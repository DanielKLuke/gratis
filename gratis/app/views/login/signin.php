<?php
include 'views/header.php';
?>

<h1>Signin</h1>
<?php
if (array_key_exists('error', $this->view_data)) {
    echo 'There was an error.';
} else {
    if (array_key_exists('credentialsAccepted', $this->view_data)) {
        if ($this->view_data['credentialsAccepted']) {
            echo 'You are logged in.';
        } else {
            echo 'That username and password is incorrect.';
        }
    } else {
        echo 'There was an error.';
    }
}

?>
<?php
include 'views/footer.php';
?>