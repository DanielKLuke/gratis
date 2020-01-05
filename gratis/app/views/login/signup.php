<?php
include 'views/header.php';
?>

<h1>Sign Up</h1>

<form action="/login/signup" name="sign_up" method="post">
    <label for="username">Choose Username</label>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Choose Password</label>
    <input type="text" id="password" name="password">
    <br>
    <input type="submit" value="Sign Up">
</form>

<?php
include 'views/footer.php';
?>