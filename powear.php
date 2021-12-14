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
  <?php
  include "./includes/header.php";
  ?>

  <div class="contenant" style="color:white;background-image: url('gift.png');width: 100%;height:100vh;display: grid;justify-content: center;align-content: center;">
    <div id="mycontents" class="card-body">
      <p style="font-size: 30px;font-weight: bolder;color: white;text-align:center;">$10 OFF GIFTS</p>
      <p style="text-align:center;">Save on some of our fave 'fits for the Holidays, when you spend $50.</p>
      <p style="text-align:center;">Use Code: GIFT10 6th to 12th December.</p>
      <div style="display: grid;justify-content: center;align-content: center;grid-gap: 10px;">
        <a style="grid-column: 1;background-color: white;border-color: white;color: black;border-radius: 5rem;font-size: 1rem;font-weight: 500;text-transform: uppercase;" href="femme.php" class="btn btn-primary">SHOP WOMENS</a>
        <a style="grid-column: 2;border-color: #53565a;background-color: #53565a;color: white;border-radius: 5rem;font-size: 1rem;font-weight: 500;text-transform: uppercase;" href="homme.php" class="btn btn-primary">SHOP MENS</a>
      </div>

    </div>
  </div>

  <div class="contenant" style=" margin-top:2%;color:white;background-image: url('womaan.jpg');width: 100%;height:100vh;display: grid;justify-content: center;align-content: center;">
    <!-- <img src="womaan.jpg" alt="image" style="width: 100%;"> -->
    <div>
      <p class="card-text" style="font-size: 3rem;line-height: 4.5rem; color:white;text-align:center;">VISION: WORN THIS WAY</p>
      <p class="card-text" style="text-align:center;">Sweat to rep your POWEAR family in the latest lightweight seamless</p>
      <div style="display: grid;justify-content: center;align-content: center;grid-gap: 10px;">
        <a style="background-color: white;border-color: white;color: black;border-radius: 5rem;font-size: 1rem;font-weight: 500;text-transform: uppercase;text-align: center;" href="femme.php" class="btn btn-primary">SHOP NOW</a>
      </div>
    </div>
  </div>


  <div class="myContainer">
    <div id="mycard" class="card" style="width:50rem;">
      <div class="mycontents">
        <div id="mycontents" class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">SHOP<br>WOMEN</br></p>
          <a href="femme.php" class="btn btn-primary">SHOP</a>
        </div>
      </div>
    </div>

    <div id="mycard" class="card" style="width:50rem;">
      <div class="mycontents">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">SHOP<br>MEN </br></p>
          <a href="homme.php" class="btn btn-primary">SHOP</a>
        </div>
      </div>
    </div>
  </div>





  <div class="card mb-3" style="background-color: black;">
    <div class="card-body" style="color:whitesmoke; display : flex;flex-direction: row;align-self : center;">
      <p> Want emails you'll actually read, including the latest deets and exclusive deals ?</p>
      <a href="#" class="btn" style=" background-color: white;
    width : 20vh;
    color: black;
    border-radius: 8rem;
    font-weight: 500;
    text-transform: uppercase;
    margin-left:1rem">SIGN UP</a>

    </div>
  </div>



  <script src="powear.js"></script>
</body>

<?php
include "./includes/footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>