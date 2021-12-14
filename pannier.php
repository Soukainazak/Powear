<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <link rel="stylesheet" href="pannier.css">
    <title>Powear</title>
</head>

<div id="mySidenav" class="sidenav border border-1">
    <span  class='border-bottom'>YOUR BAG</span>
    <a  href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
    <div class="col" >
      <?php
      include_once './includes/panier_functions.php';

      if (isset($_SESSION['panier'])) {
        $productsInCart = $_SESSION['panier'];
      }
      //var_dump( $productsInCart);
      if (isset($productsInCart)) {
        for ($i = 0; $i < sizeof($productsInCart["imageurl"]); $i++) {
      ?>
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
          
      <?php
        }
      }
      // echo MontantGlobal();
      ?>
   
   </div>
          </div>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="paier.js"></script>


</html>


