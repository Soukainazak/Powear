<?php 
include_once "includes/update_product_include.php";
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
                        <p class="label"><label for="titre">titre</label></p>
                        <input type="text" name="titre" id="titre" placeholder="titre" value="<?php echo $product['titre'] ?>">
                    </div>
                    <div>
                        <p class="label"><label id="shortdescription" for="shortdescription">shortDescription</label></p>
                        <textarea name="shortdescription" id="shortdescription" cols="30" rows="3"><?php echo $product['shortdescription'] ?></textarea>
                    </div>
                
                    <div>
                        <p class="label"><label for="longdescription">longdescription</label></p>
                        <input type="text" name="longdescription" id="longdescription" placeholder="url de longdescription" value="<?php echo $product['longdescription'] ?>">
                    </div>

                    <div>
                        <p class="label"><label for="genre">genre</label></p>
                        <input type="text" name="genre" id="genre" placeholder="url de genre" value="<?php echo $product['genre'] ?>">
                    </div>

                    <div>
                        <p class="label"><label for="price">price</label></p>
                        <input type="text" name="price" id="price" placeholder="url de price" value="<?php echo $product['price'] ?>">
                    </div>

                    <div>
                        <p class="label"><label for="imageurl">imageurl</p>
                        <input type="text" name="imageurl" id="imageurl" placeholder="url de imageurl" value="<?php echo $product['imageurl'] ?>">
                    </div>

                    <div>
                        <p class="label"><label for="quantite">quantite</p>
                        <input type="text" name="quantite" id="quantite" placeholder="url de quantite" value="<?php echo $product['quantite'] ?>">
                    </div>

                    <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                </p>
                <p class="btn-submit">
                    <input type="submit" value="Modifier">
                </p>
            </form>
        </section>     
    </main>


</body>

</html>