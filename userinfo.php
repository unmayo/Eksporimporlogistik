<?php
session_start();
require_once "koneksi.php";

class User
{
    private $username;
    private $image;

    public function __construct($username)
    {
        $this->username = $username;
        $this->retrieveData();
    }

    private function retrieveData()
    {
        global $koneksi;
        $query = "SELECT * FROM user WHERE username = '$this->username'";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);
        if (!empty($row['image'])) {
            $this->image = $row['image'];
        } else {
            $this->image = 'placeholder.png';
        }
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getImage() {
        if (empty($this->image)) {
          return 'profile/placeholder.png';
        }
        return $this->image;
    }
}

class SessionManager
{
    public static function logout()
    {
        session_destroy();
        header("Location: index.php");
        exit();
    }

    public static function isLoggedIn()
    {
        return isset($_SESSION['username']);
    }
}

// Check if user is logged in
if (SessionManager::isLoggedIn()) {
    $username = $_SESSION['username'];
    $user = new User($username);

    echo $user->getUsername();
    echo '<div class="user-info">';
    echo '<img src="' . $user->getImage() . '" alt="User Image" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px;" />';
    echo '<div class="dropdown-menu" id="dropdown-menu">';
    echo '<a href="userprofile.php">User Profile</a>';
    echo '<a href="crud.php">Admin Panel</a>';
    echo '<a href="?logout=true">Logout</a>';
    echo '</div>';
    echo '</div>';

    // Check if logout is pressed
    if (isset($_GET['logout'])) {
        SessionManager::logout();
    }
} else {
    echo '<a href="login.php" id="login"><i data-feather="user"></i><span>Login</span></a>';
}
?>

<style>
.dropdown-menu {
    position: absolute;
    display: none;
    background-color: #0d110f;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-menu a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-menu a:hover {
    background-color: #f1f1f1;
    color: black;
}

.user-info:hover .dropdown-menu {
    display: block;
}
</style>

