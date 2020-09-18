<?php
session_start();
require 'php/functions.php';
if (!isset($_SESSION['login'])) {
    $log = true;
} else {
    $log = false;
}

if (isset($_SESSION['username']))
{
    $user = true;
} else {
    $user = false;
}

if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == 1) {
        $dashboard = true;
    } else {
        $dashboard = false;
    }
}
else {
    $dashboard = false;
}

$laptop = query("SELECT * FROM laptop");

if (isset($_POST['cari'])) {
  $laptop = cari($_POST['keyword']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Import Robot Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Import Font  -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="css/style.css"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Laptop</title>
</head>
<body>
<!-- Navbar -->
<header>
    <nav class="navbar-fixed navbar">
        <div class="nav-wrapper">
            <div class="container">
                <a href="index.php" class="brand-logo">ELECTRICITY</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <div class="menu">
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <form class="search-form" method="get">
                            <div class="input-field search">
                                <input id="search" type="search" placeholder="Search" autofocus autocomplete="off" />
                                <label class="label-icon" for="search"><a class="close"><i class="fa fa-times"></i></a></label>
                            </div>
                        </form>
                        <div class="menu">
                            <li class="link"><a class="menu-item"href="laptop.php">LAPTOP</a></li>
                            <li class="link"><a class="menu-item" href="brand.php">BRANDS</a></li>
                            <li><a id="search-button"><i class="fa fa-search"></i></a></li>
                            <?php if ($log == true):?>
                                <li class="link"><a href="loginUser.php" ><i class="material-icons prefix">account_circle</i></a></li>
                            <?php endif ?>
                            <?php if ($dashboard == true): ?>
                                <li class="link"><a href="backend.php" ><i class="material-icons prefix">dashboard</i></a></li>
                            <?php endif ?>
                            <?php if($user == true): ?>
                                <li class="link"><a href="logout.php" ><i class="material-icons prefix">directions_run</i></a></li>
                            <?php endif ?>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Navbar END -->
<!-- Sidenav -->
<ul id="mobile-demo" class="sidenav">
    <li><a class="subheader">Menu</a></li>
    <?php if ($log == true):?>
    <li><a class="waves-effect" href="loginUser.php"><i class="material-icons">people</i>Login/Register</a></li>
    <?php endif ?>
    <?php if ($dashboard == true): ?>
        <li class="link"><a href="backend.php" ><i class="material-icons prefix">dashboard</i>Dashboard</a></li>
    <?php endif ?>
    <li><a class="waves-effect" href="laptop.php"><i class="material-icons">laptop</i>Laptop</a></li>
    <li><a class="waves-effect" href="brand.php"><i class="material-icons">donut_small</i>Brands</a></li>
    <?php if($user == true): ?>
    <li><a class="waves-effect" href="logout.php"><i class="material-icons">keyboard_arrow_left</i>Logout</a></li>
    <?php endif ?>
</ul>
  <!-- Sidenav END -->
<!-- Sort Bar -->
<main>
<div id="content">
  <div class="container">
  <div class="products">
      <p class="detail"><a href="index.php">Home</a> / <a class="active" href="laptop.php">Laptop</a></p>
      <div class="row">
        <div class="col s12 m12">
          <div class="box">
            <ul>
              <li>Sort By :</li>
              <li><a class="sort_laptop" id="nama_laptop" data-order="desc" href="#">Name</a></li>
            </ul>
          </div>
        </div>
      </div>
  </div>
</div>
<!-- Sort Bar END -->

<!-- Item -->
<div class="products-item">
  <div class="container">
    <div class="row">
      <div id="box-search">
      <?php if (empty($laptop)): ?>
        <h5 class="center">Laptop Tidak Di Temukan</h5>
      <?php endif ?>
      <?php foreach ($laptop as $notebook): ?>
      <div class="col s12 m4 l3">
        <div class="featured-item">
          <div class="item-box">
            <img src="assets/img/<?= $notebook['gambar'] ?>" class="responsive-img">
            <div class="box-name">
              <p class="center"><?= $notebook['nama_laptop'] ?></p>
            </div>
            <p class="center"><?= $notebook['jenis_laptop'] ?></p>
          </div>
          <p class="center"><a class= "learn-more" href="detail_laptop.php?id=<?=$notebook['id_laptop'] ?>">Learn More</a></p>
        </div>
      </div>
      <?php endforeach ?>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Item END --> 
</main>

<!-- Footer -->
<footer class="page-footer">
  <div class="container page-footer-index">
    <div class="row">
      <div class="col l6 s12">
        <h5>Contact</h5>
        <p>Email : Hadisutarma12@gmail.com</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5>Menu</h5>
        <ul>
          <li><a href="laptop.php">Laptop</a></li>
          <li><a href="brand.php">Brand</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2019 Hadi Sutarma
    </div>
  </div>
</footer>
 
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script src="js/script.js"></script>
  <script>
    $(document).ready(function(){
    $('#search-button').click(function(){
      $('.menu-item').addClass('hide-item')
      $('.search-form').addClass('active')
      $('.close').addClass('active');
    })
    $('.close').click(function(){
      $('.menu-item').removeClass('hide-item')
      $('.search-form').removeClass('active')
      $('.close').removeClass('active');
    })
    });

    $(document).ready(function(){
        $('.sidenav').sidenav();
    });

  // Live Search Laptop Using Ajax
  var keyword_laptop = document.getElementById("search");
  var container_laptop = document.getElementById("box-search");

  keyword_laptop.addEventListener('keyup', function() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        container_laptop.innerHTML = xhr.responseText;

      }
    }

    xhr.open('POST', 'php/laptop_search.php?keyword=' + keyword_laptop.value, true);
    xhr.send();
  });
  </script>
</body>
</html>
