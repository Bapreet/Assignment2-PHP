<?php
//Include the header file
require './include/header.php';
?>
<main>
<section class="loginform">
    <!-- Display login form with instructions -->
    <h3>Fill the below to Login.</h3>

    <form action="./include/user-authentication.php" method="post">
        <!-- Input fields for username and password -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <!-- Submit button for the login form -->
        <input type="submit" value="Log in">
        </form>
    </section>
</main>
<?php
//Include the header file
require './include/footer.php';
?>