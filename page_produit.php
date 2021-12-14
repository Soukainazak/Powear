<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <link rel="stylesheet" href="powear.css">
  <title>Powear</title>
</head>

<body>
  <?php
  include "./includes/header.php";
  include_once "./includes/panier_functions.php";
  include "./includes/panier_include.php";
  include_once "./includes/page_produit_include.php";
  include_once "pannier.php"

  ?>

  <div class="row-reverse row-cols-1 row-cols-md-4 g-4 d-flex justify-content-end">

    <div>
      <h5><?php echo $product['titre'] ?></h5>
      <p><?php echo $product['longdescription'] ?></p>
    </div>
    
  </div>

  <div class="row row-cols-1 row-cols-md-4 g-4 " style="margin-left: 0.2%; margin-right: 0.2%; margin-top:2%; margin-bottom: 2%;">
    <article>
      <div class="d-flex flex-row bd-highlight mb-3">
        <img style="width: 100%;padding-top: 119.05%;position: relative;" class="p-1 bd-highlight" src="pdt.jpg" alt="">
        <img style="width: 100%;padding-top: 119.05%;position: relative;" class="p-1 bd-highlight" src="pdt2.jpg" alt="">
        <img style="width: 100%;padding-top: 119.05%;position: relative;" class="p-1 bd-highlight" src="pdt3.jpg" alt="">
      </div>
      <div>
        <img style="position: relative; margin-left:30%;" src="<?php echo $product["imageurl"]; ?>" alt="">
      </div>
      <div class="d-flex flex-row bd-highlight md-4">
        <img style="width: 100%;padding-top: 119.05%; ; margin-left:30%;" class="p-1 bd-highlight" src="images/bras1.jpg" alt="">
        <img style="width: 100%;padding-top: 119.05%;" class="p-1 bd-highlight" src="images/bras2.jpg" alt="">
      </div>

    </article>
  </div>


  <form method="post">
    <div class="form-group">
      <label for="qtt">Quantité</label>
      <select class="form-control" name="selectval">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <input type="submit" name="submitValidation" value="validé" class="btn btn-info" style="margin-bottom: 2%;">
  </form>
  <?php
  if (isset($_POST['selectval'])) {
    $getValue = $_POST['selectval'];
  } ?>

  <div class="d-grid gap-2 d-md-block" style="margin-bottom: 5%;">
    <?php
    if (isset($_POST['selectval'])) {
      echo '<a href="page_produit.php?id=' . $product["id"] . '&qtt=' . $getValue . '" class="btn btn-primary font-size:30px;cursor:pointer; margin-top:3%"> Add To Card </a>';
    }
    ?>
    <a href=""></a>
  </div>
  </figcaption>
  </figure>
  </div>
  </article>
  </div>

</body>
<?php
include "./includes/footer.php";
?>


</html>