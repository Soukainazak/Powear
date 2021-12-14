
<?php
include "users_functions.php";
if(isset($_POST) && $_POST !== []) {
    $user=getUserByEmail($_POST['email']);
    if($user !== false) {
        if(password_verify($_POST['password'],$user['password'])) {
            $_SESSION['userId'] =$user['id'];
        }
    }
}
    
