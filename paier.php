<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="paier.css">
    <title>Powear</title>
</head>

<body>

<div id="mySidenav" class="sidenav border border-1 " >
<span class="border-bottom">YOUR BAG</span>

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
</div>

<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>
</body>
<script src="paier.js"></script>
</html>


