<?php 
include_once "includes/add_product_include.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <link rel="stylesheet" href="powear.css">
        <title>POWEAR</title>
      </head>

<body>

    <?php include_once "./includes/header.php"; ?>

    <main>
        <section>
            <form action="#" method="POST" style="margin-left: 10%;">
                <p>
                    <div>
                        <p class="label"><label for="titre">titre</label></p>
                        <input type="text" name="titre" id="titre" placeholder="titre">
                    </div>
                    <div>
                        <p class="label"><label class="shortdescription" for="shortdescription">shortDescription</label></p>
                        <textarea class="shortdescription" name="shortdescription" id="shortdescription" cols="30" rows="3"></textarea>
                    </div>

                    <div>
                        <p class="label"><label class="longdescription" for="longdescription">longdescription</label></p>
                        <textarea class="longdescription" name="longdescription" id="longdescription" cols="30" rows="3"></textarea>
                    </div>

                    <div>
                        <p class="label"><label class="genre" for="genre">genre</label></p>
                        <textarea class="genre" name="genre" id="genre" cols="30" rows="3"></textarea>
                    </div>

                    <div>
                        <p class="label"><label for="price">Price</label></p>
                        <input type="number" name="price" id="price">
                    </div>

                    <div>
                        <p class="label"><label class="imageurl" for="imageurl">imageurl</label></p>
                        <textarea class="imageurl" name="imageurl" id="imageurl" cols="30" rows="3"></textarea>
                    </div>

                    <div>
                        <p class="label"><label class="quantite	" for="quantite	">quantite	</label></p>
                        <textarea class="quantite" name="quantite" id="quantite" cols="30" rows="3"></textarea>
                    </div>
 
                </p>
                <p class="btn-submit">
                    <input type="submit" value="Ajouter">
                </p>
            </form>
        </section>     
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>