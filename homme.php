<?php
include_once "includes/homme_include.php";
?>
<!DOCTYPE html>
<html lang="en">

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

<?php
include "./includes/header.php";
?>

    <div class="row row-cols-1 row-cols-md-4 g-4 " style="margin-left: 0.5%; margin-right: 0.5%; margin-top:2%; margin-bottom: 2%;">
    <?php foreach($products as $product) { ?>
      <article>
      <div class="col">
        <figure class="card h-100">
           <img  class="card-img-top" src="<?php echo $product["imageurl"]; ?>" alt="<?php echo $product['titre'] ?>">
        <figcaption class="card-body">
          <h5 class="card-title"><?php echo $product['titre'] ?></h5>
          <p class="card-text"><?php echo $product['price'] ?>€</p>
          <div class="d-grid gap-2 d-md-block">
            <?php
              echo '<a href="page_produit.php?id='.$product["id"].'" class="btn btn-primary">View More </a>'
            ?>
          </div>
        </figcaption>
      </figure>
    </div>
  </article>
  <?php } ?>
</div>     
<?php
    include "./includes/footer.php"
    ?>
</body>
</html>

