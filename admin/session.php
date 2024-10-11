<?php
include_once("../config.php");

if ($_SESSION['username']) {
    $user_check = $_SESSION['username'];
    $sql = "SELECT username FROM u=login WHERE username='$user_check'";
    $result = mysqli_query($mysqli, $sql);
    if ($result->num_rows ==  0) {
        $row = mysqli_fetch_assoc($result);
        $login_session = $row['username'];
        if (!isset($login_session)) {
            header('Location: '.$base_url_admin.'/signout.php');
        }
    }
} else {
    header('Location: '.$base_url_admin.'/sign.php');
}