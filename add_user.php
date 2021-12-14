<?php
include_once "includes/add_user_include.php";
if(isset($_SESSION['userId'])){
    $user= getUser($_SESSION['userId']);
    if ($user['admin'] != 1){
        header('Location:http://localhost/poweaar/powear.php');
    }
}else{
    header('Location:http://localhost/poweaar/powear.php');
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="powear.css">
</head>

<body>

    <?php include_once "includes/header.php"; ?>

    <section>
        <div class="row">
            <form action="#" method="POST" style="margin-left: 10%;">
                <p>
                    <div>
                        <p class="label"><label for="username">Username</label></p>
                        <input type="text" name="username" id="username" placeholder="Username">
                    </div>
                    <div>
                        <p class="label"><label for="email">Email</label></p>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div>
                        <p class="label"><label for="password">Password</label></p>
                        <input type="password" name="password" id="password">
                    </div>
                </p>
                <p class="btn-submit">
                    <input type="submit" value="Sing up">
                </p>
            </form>     
        </div>            
    </section>


    <?php
    include "./includes/footer.php"
    ?>
</body>
<script src="js/index.js"></script>
</html>