<?php
session_start();
include_once "./includes/base.php";
include "./includes/login_include.php";
include_once "pannier.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <link rel="stylesheet" href="powear.css">
  <title>POWEAR
  </title>
</head>

<body>


<?php 
include_once "./includes/header.php";
?>


  <form action="#" method="post">
    <label for="email">EMAIL ADDRESS:</label>
    <input type="text" name="email" id="email" placeholder="Email Address">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="submit" value="LOG IN">
  </form>
  <button type="button" class="btn btn-light">I've forgotten my password</button>

  <h5>New to Powear?</h5>
  <a class="nav-link text-dark " href="add_user.php">Create An Account</a>

  <?php
    include "./includes/footer.php"
    ?>


  </div>










</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>