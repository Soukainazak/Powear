<?php
session_start();
include_once "./includes/panier_functions.php";
include "./includes/panier_include.php";
//unset($_SESSION['panier']); // vider le pannier
//var_dump($_SESSION['panier']);// db 7na quand on actualise b7ala on ajoute le produit encore le panier


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="powear.css">
    <title>POWEAR</title>
</head>

<body>
    <div class="container">
        <?php
        include "./includes/header.php";
        if (isset($_SESSION['panier'])) {
            $productsInCart = $_SESSION['panier'];
        }

        //èvar_dump( $productsInCart);// chi wa7ed ghayt9eda jemla checkout we ur bag diyalach ?
        ?>

        <div class="row row-cols-1 row-cols-md-4 g-4 " style="margin-left: 0.5%; margin-right: 0.5%; margin-top:2%; margin-bottom: 2%;">
            <?php
            if (isset($productsInCart)) {
                for ($i = 0; $i < sizeof($productsInCart["imageurl"]); $i++) {

            ?>
                    <article>
                        <div class="col">
                            <figure class="card h-100">
                                <img class="card-img-top" src="<?php echo $productsInCart["imageurl"][$i]; ?>" alt="<?php echo $productsInCart["titre"][$i] ?>">
                                <figcaption class="card-body">
                                    <h5 class="card-title"><?php echo $productsInCart["titre"][$i] ?></h5>
                                    <label for="quantite">Quantité</label>
                                    <p><?php echo $productsInCart["quantite"][$i] ?></p>
                                    <p class="card-text"><?php echo $productsInCart["price"][$i] ?>€</p>
                                    <div class="d-grid gap-2 d-md-block">
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </article>

            <?php
                }
            }
            ?>

        </div>
            <?php
               echo MontantGlobal();
            ?>
        <a href="" class='btn btn-primary'> CHECKOUT </a>
        <a href="" class='btn btn-primary'> YOUR BAG </a>
    </div>
</body>

</html>