<?php 
include_once "includes/delete_user_include.php";
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

    <main>
        <section>
            <form action="#" method="POST" style="margin-left: 10%;">
                <p>
                    <div>
                        <p class="label"><label for="users">username</label></p>
                        <select name="id" id="users">
                            <?php
                                foreach($users as $user) { ?>
                                    <option value="<?php echo $user["id"]; ?>">
                                        <?php echo $user["username"]; ?>
                                    </option>
                            <?php } ?>
                        </select>
                        <input type="submit" value="Supprimer">
                    </div>
                </p>
                <p class="btn-submit">
                    
                </p>
            </form>
        </section>     
    </main>

</body>

</html>