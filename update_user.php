<?php 
include_once "includes/update_user_include.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Powear</title>
    <link rel="stylesheet" href="powear.css">
</head>

<body>
   
<?php include_once "includes/header.php"; ?>    

<form action="#" method="POST" style="margin-left: 10%;">
            <p>
                <input type="hidden" name="id" <?php if($user !== null){?>value="<?php echo $user["id"] ?>"<?php } ?>>
                <label for="username">Nom</label>
                <input type="text" name="username" id="username" placeholder="username" <?php if($user !== null){?>value="<?php echo $user["username"] ?>"<?php } ?>><br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" <?php if($user !== null){?>value="<?php echo $user["email"] ?>"<?php } ?>>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password">
            </p>
            <p>
                <input type="submit" value="Enregistrer">
            </p>
        </form>

    
</body>

</html>