<?php 

require 'php/functions.php';
$laptop = "SELECT * FROM laptop ORDER BY id_laptop DESC";
$result = mysqli_query(koneksi(), $laptop);

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
    <title>Backend Laptop</title>
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
              <li class="link"><a href="loginUser.php" ><i class="material-icons prefix">account_circle</i></a></li>
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
        <p><a href="dashboard.php">Dashboars</a> / <a href="backend-laptop.php">Laptop</a></p>
        <h5 class="center">Table Laptop</h5>
      </div>
      <div class="table-laptop" id="table-laptop">
        <table>
          <tr>
            <th>Gambar</th>
            <th><a class="backend_sort_laptop" id="nama_laptop" data-order="desc" href="#">Nama</a></th>
            <th><a class="backend_sort_laptop" id="jenis_laptop" data-order="desc" href="#">Jenis</a></th>
            <th><a class="backend_sort_laptop" id="prosesor" data-order="desc" href="#">Prosesor</a></th>
            <th><a class="backend_sort_laptop" id="vga" data-order="desc" href="#">VGA</a></th>
            <th><a class="backend_sort_laptop" id="ram" data-order="desc" href="#">RAM</a></th>
            <th><a class="backend_sort_laptop" id="storage" data-order="desc" href="#">Storage</a></th>
            <th><a class="backend_sort_laptop" id="dimensi" data-order="desc" href="#">Dimensi</a></th>
            <th><a class="backend_sort_laptop" id="merek" data-order="desc" href="#">Merek</a></th>
            <th><a class="backend_sort_laptop" id="harga" data-order="desc" href="#">Harga</a></th>
            <th>Aksi</th>
          </tr>
          <?php foreach ($result as $notebook): ?>
            <tr>
              <td><img src="assets/img/<?= $notebook['gambar']  ?>"></td>
              <td><?= $notebook['nama_laptop']  ?></td>
              <td><?= $notebook['jenis_laptop']  ?></td>
              <td><?= $notebook['prosesor']  ?></td>
              <td><?= $notebook['vga']  ?></td>
              <td><?= $notebook['ram']  ?></td>
              <td width="100px"><?= $notebook['storage']  ?></td>
              <td><?= $notebook['dimensi']  ?></td>
              <td><?= $notebook['merek']  ?></td>
              <td>Rp. <?= $notebook['harga']  ?></td>
              <td><a href="edit-laptop.php?id=<?=$notebook['id_laptop'] ?>" class="edit">Edit</a> | 
                <a href="delete-laptop.php?id=<?=$notebook['id_laptop']?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?')" class="delete">Delete</a></td>
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
var container = document.getElementById("table-laptop");

keyword.addEventListener('keyup', function() {
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;

    }
  }

  xhr.open('POST', 'php/backend_laptop_search.php?keyword=' + keyword.value, true);
  xhr.send();
});
</script>
</body>
</html>