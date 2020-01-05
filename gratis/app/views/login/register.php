<?php
include 'views/header.php';
?>

<h1>Register</h1>
<?php

if (array_key_exists('error', $this->view_data)) {
    echo 'There was an error.';
} else {
    if (array_key_exists('userExists', $this->view_data)) {
        if ($this->view_data['userExists']) {
            echo 'Please select another username.';
        } else {
            echo 'Your account has been created.';
        }
    } else {
        echo 'There was an error.';
    }
}

?>
<?php
include 'views/footer.php';
?>