<?php
// Retrieve username and hash the password using SHA-512
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);

// Include the database connection file
require 'database.php';

// SQL query to check if the provided username and password match a user in the database
$sql = "SELECT USER_ID FROM ACCOUNT_DETAILS WHERE username = '$username' AND password = '$password'";
$res=$conn->query($sql);

// Get the number of rows returned by the query
$count = $res->rowCount();

// Check if a user with the provided credentials exists
if ($count == 1){
    // Display success message
    echo '<p>You Succesfully Logged In</p>';

    // Start a session and store the user ID in the session variable
    foreach($res as $row) {
        session_start();
        $_SESSION['USER_ID'] = $row['USER_ID'];
        // Redirect to the restricted page
        Header('location:../restricted-page.php');
    }
}else{
    // Display login failed message
    echo '<p>Oops!!! Login Falied</p>';
}
// Close the database connection
$conn = null;
?>