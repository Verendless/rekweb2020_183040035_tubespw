<?php 

require 'php/functions.php';
$brand = "SELECT * FROM brand ORDER BY brand DESC";
$result = mysqli_query(koneksi(), $brand);

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
    <link rel="stylesheet" href="css/admin.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Backend Brand</title>
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
              <li class="link"><a href="backend.php" ><i class="material-icons prefix">dashboard</i></a></li>
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
    <div class="user-view">
      <div class="background">
        <img src="assets/img/admin.png">
      </div>
      <a href="#user"><img class="circle" src="assets/img/admin.png"></a>
      <a href="#name"><span class="white-text name">Hadi Sutarma</span></a>
      <a href="#email"><span class="white-text email">hadisutarma12@gmail.com</span></a>
    </div>
</li>
  <li></li>
  <li>
      <form>
        <div class="input-field sidesearch">
          <input id="search" type="search" autocomplete="off" placeholder="Search">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons fix">close</i>
        </div>
      </form>
</li>
  <li><a class="subheader">Menu</a></li>
    <li><a class="waves-effect" href="backend.php"><i class="material-icons">dashboard</i>Dashboars</a></li>
    <li><a class="waves-effect" href="backend-laptop.php"><i class="material-icons">laptop</i>Laptop</a></li>
    <li><a class="waves-effect" href="add-laptop.php"><i class="material-icons">add</i>Add Laptop</a></li>
    <li><a class="waves-effect" href="print-laptop.php"><i class="material-icons">picture_as_pdf</i>Print Laptop</a></li>
    <li><a class="waves-effect" href="backend-brand.php"><i class="material-icons">widgets</i>Brand</a></li>
    <li><a class="waves-effect" href="add-brand.php"><i class="material-icons">add</i>Add Brand</a></li>
    <li><a class="waves-effect" href="print-brand.php"><i class="material-icons">picture_as_pdf</i>Print brand</a></li>
    <li><a class="waves-effect" href="backend-user.php"><i class="material-icons">account_circle</i>Users</a></li>
    <li><a class="waves-effect" href="logout.php"><i class="material-icons">keyboard_arrow_left</i>Logout</a></li>
</ul>
<!-- Sidenav END -->
<!-- Side Bar -->
<ul id="slide-out" class="sidenav sidenav-fixed">
  <li>
    <div class="user-view">
      <div class="background">
        <img src="assets/img/admin.png">
      </div>
      <a href="#user"><img class="circle" src="assets/img/admin.png"></a>
      <a href="#name"><span class="white-text name">Hadi Sutarma</span></a>
      <a href="#email"><span class="white-text email">hadisutarma12@gmail.com</span></a>
    </div>
</li>
  <li><a class="subheader">Menu</a></li>
    <li><a class="waves-effect" href="backend.php"><i class="material-icons">dashboard</i>Dashboars</a></li>
    <li><a class="waves-effect" href="backend-laptop.php"><i class="material-icons">laptop</i>Laptop</a></li>
    <li><a class="waves-effect" href="add-laptop.php"><i class="material-icons">add</i>Add Laptop</a></li>
    <li><a class="waves-effect" href="print-laptop.php"><i class="material-icons">picture_as_pdf</i>Print Laptop</a></li>
    <li><a class="waves-effect" href="backend-brand.php"><i class="material-icons">widgets</i>Brand</a></li>
    <li><a class="waves-effect" href="add-brand.php"><i class="material-icons">add</i>Add Brand</a></li>
    <li><a class="waves-effect" href="print-brand.php"><i class="material-icons">picture_as_pdf</i>Print brand</a></li>
    <li><a class="waves-effect" href="backend-user.php"><i class="material-icons">account_circle</i>Users</a></li>
    <li><a class="waves-effect" href="logout.php"><i class="material-icons">keyboard_arrow_left</i>Logout</a></li>
</ul>
<!-- Side Bar END -->
<!-- Laptop Menu -->
<main>
  <div class="row">
    <div class="col s12 m8 l12">
      <div class="laptop-menu">
        <p><a href="dashboard.php">Dashboars</a> / <a href="backend-brand.php">Brand</a></p>
        <h5 class="center">Table Brand</h5>
      </div>
      <div class="table-laptop" id="table-brand">
        <table>
          <tr>
            <th>Gambar</th>
            <th><a class="sort_brand_backend" id="brand" data-order="desc" href="#">Brand</a></th>
            <th><a class="sort_brand_backend" id="founded" data-order="desc" href="#">Founded</a></th>
            <th><a class="sort_brand_backend" id="base" data-order="desc" href="#">Base</a></th>
            <th><a class="sort_brand_backend" id="area_served" data-order="desc" href="#">Area Served</a></th>
            <th><a class="sort_brand_backend" id="revenue" data-order="desc" href="#">Revenue</a></th>
            <th>Aksi</th>
          </tr>
          <?php foreach ($result as $brands): ?>
            <tr>
              <td><img src="assets/img/<?= $brands['image']  ?>"></td>
              <td><?= $brands['brand']  ?></td>
              <td><?= $brands['founded']  ?></td>
              <td><?= $brands['base']  ?></td>
              <td><?= $brands['area_served']  ?></td>
              <td>$<?= $brands['revenue']  ?> Billion</td>
              <td><a href="edit-brand.php?id=<?=$brands['brand'] ?>" class="edit">Edit</a> |
                <a href="delete-brand.php?id=<?=$brands['brand']?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?')" class="delete">Delete</a></td>
            </tr>
          <?php endforeach ?>
        </table>
      </div>
    </div>
  </div>
</main>
<!-- Laptop Menu END -->
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
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script> 
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/script.js"></script>
<script>
  // Live Search User Using Ajax
var keyword = document.getElementById("search");
var container = document.getElementById("table-brand");

keyword.addEventListener('keyup', function() {
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;

    }
  }

  xhr.open('POST', 'php/backend_brand_search.php?keyword=' + keyword.value, true);
  xhr.send();
});
</script>
</body>
</html>