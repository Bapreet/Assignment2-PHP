<?php
    // Include the database connection file
    require './include/database.php';

    // Retrieve data from the form
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $dob = $_POST['dob'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    //validate inputs
    $validate = true;// Flag to check if validation is successful

    // Include the header file
    require './include/header.php';

    // Check if required data is missing
    if (empty($first_name) || empty($last_name) || empty($dob)) {
        echo '<p>Required data is missing</p>';
        $validate = false;
    }

    // Check if username is empty
    if (empty($username)) {
        echo '<p>Username is required</p>';
        $validate = false;
    }

    // Check if password is invalid or empty
    if (($password != $confirm) || (empty($password))) {
        echo '<p>Password is invalid</p>';
    }

    // If validation is successful, proceed to insert data into the database
    if ($validate) {
        // Hash the password using SHA-512 algorithm
        $password = hash('sha512', $password);

        // SQL query to insert data into the ACCOUNT_DETAILS table
        $sql = "INSERT INTO ACCOUNT_DETAILS (fname, lname, dob, username, password) VALUES ('$first_name','$last_name', '$dob', '$username','$password');";

        // Execute the SQL query
        $conn->exec($sql);

        // Close the database connection
        $conn = null;
    }
?>
<main>
    <section class="login">
        <!-- Display success message and provide a link to the login page -->
        <h3>Account created Successfully.</h3>
        <h3>Now, You can login.</h3>
        <a href="login-form.php">Go to Log In Page</a>
    </section>
</main>

<?php
// Include the footer file
require './include/footer.php';
?>
