<?php
// Include the header file
require './include/header.php';

// Start the session to check if the user is logged in
session_start();

// Check if the user is not logged in, redirect to the login page
if(!isset($_SESSION['USER_ID'])){
    header('location:login.php');
    exit();
}else{
    // Display restricted content for logged-in users
    echo '<p><section class="restricted"></p>';
    echo '<p><a href="#"><img src="./images/offer1.png" alt="offer1"></a></p>';
    echo '<p></section></p>';

    echo '<p><section class="restricted"></p>';
    echo '<p><a href="#"><img src="./images/offer2.jpg" alt="offer2"></a></p>';
    echo '<p></section></p>';

    // Display logout link
    echo '<p><section class="logout"></p>';
    echo '<p><a href="logout.php">Log Out</a></p>';
    echo '<p></section></p>';
    $conn=null;
}
// Include the footer file
require './include/footer.php';
?>
