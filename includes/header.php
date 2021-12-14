<?php
session_start();
include_once "database.php";
include_once "base.php";
include_once "users_functions.php";
include_once "pannier.php";
?>

<header>
  <nav class="nav justify-content-end navbar navbar-expand-lg navbar-light">
    <div class="container-fluid-sm">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
            </svg></a>
        </li>
        <li>


          <?php
          if (isset($_SESSION['userId'])) {
            $user = getUser($_SESSION['userId']); ?>

            <p style="margin-top: 0.6rem">
              <?php echo ' Hi ' . $user['username']; ?>
            </p>
          <?php } else { ?>
            <a class="nav-link text-dark " href="login.php">Se connecter</a>
          <?php } ?>

        </li>
        <li class="nav-item" style="margin-inline: 5px;">
          <a class="nav-link text-dark" href="#">Blog</a>
        </li>
        <li class="nav-item" style="margin-inline: 5px;">
          <a class="nav-link text-dark" href="#">Newsletter</a>
        <li class="nav-item " style="margin-inline: 5px; margin-right:2rem">
          <a class="nav-link text-dark " href="#">Help</a>
        </li>
        </li>
        </li>
      </ul>
    </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-white bg-white border-bottom border-secondary">
    <span class="border-bottom-0"></span>
    <div class="container-padding-x">
      <a class="navbar-brand" href="powear.php">
        <img src="images/logo.PNG" alt="" width="200" height="50" class="d-inline-block align-text-top">
      </a>
      <div class="position-absolute top-50 start-50 translate-middle">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#"></a></a>
            </li>
            <li class="nav-item" style="margin-inline:50px">
              <a href="femme.php" style="color:black" class="nav-link" href="#">Femme</a>
            </li>
            <li class="nav-item">
              <a href="homme.php" style="color: black" class="nav-link" href="#">Homme</a>
            </li>
        </div>
      </div>
      <div class="position-absolute top-50 end-0 translate-middle " style="margin-top:1%">

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a style="color:white" class="nav-link " aria-current="page" href="#"></a>
            </li>
            <li class="nav-item" style="margin-inline: 10px;">
              <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg></a>
            </li>
            <li class="nav-item" style="margin-inline: 10px;">
              <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-suit-heart" viewBox="0 0 16 16">
                  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z" />
                </svg></a>
            </li>
            </li>
            <li class="nav-item" style="margin-inline: 10px">
              <a class="nav-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg></a>
            </li>

            </li>
            <li class="nav-item" style="margin-inline: 10px;  ">
              <a style="display:flex;" class="nav-link column-1" href="#" onclick=openNav()> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-bag" viewBox="0 0 16 16">
                  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                </svg>
                <span style="position:relative;width: 1rem;height: 1rem;font-weight: 500;line-height: 1rem;font-size: 1.2rem;text-align: center;bottom: 1.8rem;right: 0.6rem;margin-top:40px;dispaly:block;border-radius: 50%;background-color: rgb(0, 125, 181);color: rgb(255, 255, 255);font-family: Roboto, Arial, sans-serif;text-align: center;"><?php echo compterArticles() ?></span>
              </a>
            </li>
        </div>
      </div>
  </nav>

  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style="margin-top:1%;margin-bottom:1%;margin-right:20%; margin-left:20%; ">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <p style="margin-left: 250px;">LIVRAISON GRATUITE DES 39€ D'ACHATS</p>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <div class="carousel-item" data-bs-interval="2000">
        <p style="margin-left: 250px;">RETOURS GRATUITS SOUS 45 JOURS</p>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <div class="carousel-item">
        <p style="margin-left: 250px;">NEW YEAR'S SALE UP TO 70 %</p>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>

</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>