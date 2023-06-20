<?php
include 'koneksi.php';

// Default year to show
$year = '';

// Check if the year input is provided
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}

// Fetch the data from the database
$query = "SELECT image_path, text, link, date FROM news";

// Check if the year is provided, then modify the query accordingly
if (!empty($year)) {
    $query .= " WHERE YEAR(date) = $year";
}

// Order the results by lowest ID first
$query .= " ORDER BY id ASC";

$result = mysqli_query($koneksi, $query);

// Function to extract the domain from a link
function getDomainFromLink($link) {
    $urlParts = parse_url($link);
    $host = $urlParts['host'] ?? '';
    $hostParts = explode('.', $host);
    $domain = $hostParts[count($hostParts) - 2] ?? '';
    return $domain;
}

// Function to get platform image based on the link
function getPlatformImage($link) {
    $host = parse_url($link, PHP_URL_HOST);
    $path = parse_url($link, PHP_URL_PATH);
    $platforms = array(
        'www.youtube.com' => 'youtube.png',
        'youtu.be' => 'youtube.png',
        'twitter.com' => 'twitter.png',
        'www.reddit.com' => 'reddit.png',
        'www.instagram.com' => 'insta.png'
        // Add more platforms and corresponding image names here
    );
    if ($host === 'youtu.be' || ($host === 'www.youtube.com' && $path === '/watch')) {
        return 'youtube.png';
    }
    return isset($platforms[$host]) ? $platforms[$host] : 'draft.png';
}
?>

<style>
        .image-container {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: center;
            margin-top: 20px;
            margin-left: 25%;
        }

        .image-box {
            display: flex;
            flex-direction: column;
            align-items: left;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            width: 100%;
            max-width: 750px;
            color: white;
            transition: transform 0.3s ease;
        }

        .image-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .image-box a {
            text-decoration: none;
            color: white;
            display: flex;
            align-items: center;
        }

        .image-box img {
            width: 200px;
            height: 200px;
            margin-right: 20px;
        }

        .platform-image {
            width: 30px;
            height: 30px;
            margin-left: 10px;
        }

        .text-container {
            overflow-wrap: break-word;
            color: white;
        }

        .empty-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            margin-right: 40%;
        }

        .empty-container h2 {
            color: white;
        }
        .image-box .social-logo {
            width: 30px; /* Adjust the width as desired */
            height: 30px; /* Adjust the height as desired */
            margin-right: 15px;
            margin-left: 15px;
        }
        .filter-container {
            background-color: #191c13;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 8px;
            width: 26%;
            margin-left: 20px;
            margin-top: 40px;
            height: 300px;
        }

        .year-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            height: 20%;
        }

        .filter-container {
            background-color: #191c13;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 8px;
            width: 26%;
            margin-left: 20px;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: center;
            margin-top: 20px;
            margin-left: 20px;
            flex-grow: 1;
        }

        .filter-title {
            font-size: 36px;
            font-family: "Raleway", sans-serif;
            margin-bottom: 20px;
            text-align: center;
        }

    </style>


<!-- Filter by Year -->
<div class="filter-container">
        <form action="" method="GET" class="year-filter-form">
            <label for="year" style="font-size: 18px; margin-right: 10px;">Archive:</label>
            <input type="text" id="year" name="year" value="<?php echo $year; ?>" style="padding: 6px 10px; border-radius: 4px; border: 1px solid #ccc;">
            <input type="submit" value="Filter" style="padding: 6px 10px; border-radius: 4px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">
        </form>
        <br>
        <!-- Year Buttons -->
        <div class="year-buttons">
            <?php for ($i = 2023; $i >= 2019; $i--) { ?>
                <button onclick="filterByYear(<?php echo $i; ?>)" style="margin-bottom: 10px; padding: 6px 50px; border-radius: 4px; border: 1px solid #ccc; background-color: #f2f2f2; color: #333; cursor: pointer; display: block;"><?php echo $i; ?></button>
            <?php } ?>
        </div>
    </div>



         <div class="image-container">
                <?php if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $platformImage = getPlatformImage($row['link']);
                        $domain = getDomainFromLink($row['link']);
                        $isYouTube = ($domain === 'youtu.be' || $domain === 'www.youtube.com');
                        ?>
                        <div class="image-box">
                            <a href="<?php echo $row['link']; ?>" onclick="redirectToLink('<?php echo $row['link']; ?>');">
                                <img src="<?php echo $row['image_path']; ?>" alt="Image">
                                <div class="text-container">
                                    <h1><?php echo $row['text']; ?></h1>
                                    <p><?php echo $row['date']; ?></p>
                                </div>
                                <?php if ($isYouTube) { ?>
                                    <img src="youtube.png" alt="YouTube Logo" class="social-logo">
                                <?php } else { ?>
                                    <img src="<?php echo $platformImage; ?>" alt="Image" class="social-logo">
                                <?php } ?>
                            </a>
                        </div>
                    <?php }
                } else { ?>
                    <div class="empty-container">
                        <h2>Oops, it's empty right now.</h2>
                        <br>
                        <img src="placeholder.png" alt="Empty Image">
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                <?php } ?>
        </div>  
    </div> 

