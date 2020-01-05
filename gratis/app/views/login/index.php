<?php
include 'views/header.php';
?>

<h1>Login</h1>

<?php
//IF YOU ARE NOT LOGGED IN, A FORM IS DISPLAYED
if (array_key_exists('LoggedIn', $this->view_data)) {
    if ($this->view_data['LoggedIn'] == true) {
        echo 'You are logged in.
        <br>
        <a href="/login/signout">Sign Out</a>';
    } else {
        echo
            '<form action="/login/index" name="sign_in" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password</label>
        <input type="text" id="password" name="password">
        <br>
        <input type="submit" value="Login">
        </form>
        <a href="/login/signup">Sign Up</a><br>';
    }
}
?>

<?php
include 'views/footer.php';
?>