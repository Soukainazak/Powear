<?php
$email = '';
$password = '';

if (isset($_POST['Submit'])) {
    
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    
}

?>