<?php
// Include the header file
require './include/header.php';
?>

<main>
<section>
    <!-- Section for sign-up information -->
    <h2>Sign Up for Special Offers!!!</h2>
</section>
<section>
    <!-- Form for user registration -->
    <form action="login.php" method="post">

        <!-- Input fields for user details -->
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm">Confirm Password:</label>
        <input type="password" id="confirm" name="confirm" required>

        <input type="submit" value="Sign Up">
    </form>
</section>
</main>

<?php
// Include the footer file
require './include/footer.php';
?>
