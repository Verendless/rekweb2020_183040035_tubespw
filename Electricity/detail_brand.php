<?php 
session_start();
require 'php/functions.php';
$id = $_GET['id'];
$detail = query("SELECT * FROM brand JOIN laptop_new ON brand.brand = laptop_new.merek WHERE brand = '$id'");
if (!isset($_SESSION['login'])) {
  $log = true;
} else {
  $log = false;
}
if (isset($_SESSION['admin'])) {
  if ($_SESSION['admin'] == 1) {
  $dashboard = true;
} else {
  $dashboard = false;
}
} else {
  $dashboard = false;
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $detail[0]['brand'] ?></title>
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
</head>
<body>
<!-- Navbar Start -->
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
              <?php if ($log == true): ?>
              <li class="link"><a href="loginUser.php" ><i class="material-icons prefix">account_circle</i></a></li>    
              <?php endif ?>
              <?php if ($dashboard == true): ?>
                <li class="link"><a href="backend.php" ><i class="material-icons prefix">dashboard</i></a></li>
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
  <li>
    <form>
      <div class="input-field sidesearch">
        <input id="search" type="search" autocomplete="off" placeholder="Search">
        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
        <i class="material-icons fix">close</i>
      </div>
    </form>
  </li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Menu</a></li>
  <li><a class="waves-effect" href="laptop.php"><i class="material-icons">laptop</i>Laptop</a></li>
  <li><a class="waves-effect" href="brand.php"><i class="material-icons">widgets</i>Brands</a></li>
  <li><a class="waves-effect" href="loginUser.php"><i class="material-icons">people</i>Login/Register</a></li>
  <li><a class="waves-effect" href="logout.php"><i class="material-icons">keyboard_arrow_left</i>Logout</a></li>
</ul>
<!-- Sidenav END -->
<main>
<!-- Detail -->
<div id="box-search">
  <div class="detail">
  <div class="container">
    <p class="detailNamaLaptop"><?= $detail[0]['brand'] ?></p>
    <div class="row">
      <div class="detail_gambar">
        <div class="col s12 m6">
          <img src="assets/img/<?= $detail[0]['image'] ?>" alt="" class="responsive-img">
        </div>
        <div class="deks">
          <div class="col s12 m6 box_detail">
            <p class="nama" align="center"><?= $detail[0]['brand'] ?></p>
            <table>
              <tr>
                <th>Founded</th>
                <th>Base</th>
                <th>Area Served</th>
                <th>Revenue</th>
              </tr>
              <tr>
                <td><?= $detail[0]['founded']; ?></td>
                <td><?= $detail[0]['base']; ?></td>
                <td><?= $detail[0]['area_served']; ?></td>
                <td>$<?= $detail[0]['revenue']; ?> Billion</td>
              </tr>
              
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="featured">
  <div class="container">
    <h5 class="center">Products</h5>
    <div class="row"> 
      <?php foreach ($detail as $notebook): ?>
      <div class="col s12 m3 l3">
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
<!-- Detail END -->
</main>
<!-- Main END -->
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
<!-- Footer END -->
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>