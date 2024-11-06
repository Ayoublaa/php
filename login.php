<?php

if (isset($_POST['submit'])) {
    $emailValue = $_POST['email'];
    $passwordValue = $_POST['password'];
    if (empty($emailValue) || empty($passwordValue)) {
        echo '<h1>Empty values, please provide both email and password.</h1>';
    } else {
        echo '<h1>Welcome, your information:</h1>';
        echo "Email: $emailValue <br>";
        echo "Password: $passwordValue <br>";
    }
} 

?>
