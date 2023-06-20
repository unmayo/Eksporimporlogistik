<?php
include 'koneksi.php';

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Retrieve user data from the database
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);
    $userData = mysqli_fetch_assoc($result);

    //image
    $userprofile = $userData['image'];
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $email = $_POST['email'];

        // Handle image upload
        $imagePath = $userData['image']; // Initialize with current image path
        if ($_FILES['image']['name']) {
            $imageFileName = $_FILES['image']['name'];
            $imageTmpPath = $_FILES['image']['tmp_name'];
            $newImagePath = 'profile/' . $imageFileName;

            // Delete the previous image file if it exists and it's different from the new image file
            if (!empty($imagePath) && $imagePath !== $newImagePath) {
                unlink($imagePath);
            }

            // Move the uploaded image file to the desired folder
            move_uploaded_file($imageTmpPath, $newImagePath);
            $imagePath = $newImagePath; // Update the image path
        }

        // Perform the necessary update operation with the retrieved form data
        $updateQuery = "UPDATE user SET email = '$email', image = '$imagePath' WHERE username = '$username'";
        mysqli_query($koneksi, $updateQuery);

        // Fetch the updated user data from the database
        $result = mysqli_query($koneksi, $query);
        $userData = mysqli_fetch_assoc($result);

        // Refresh the page
        echo '<script>window.location.href = "userprofile.php";</script>';
        exit();
    }
} else {
    // Display an error message if the user is not logged in
    echo "Error: You must be logged in to access this page.";
    exit();
}

?>





