<?php 

require 'php/functions.php';
$id = $_GET['id'];
$notebook = query("SELECT * FROM laptop_new WHERE id_laptop = $id")[0];
if(isset($_POST['edit']))
  {
    if (editLaptop($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'backend-laptop.php';
            </script>";
    }
    else {
        echo "<script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'edit-laptop.php';
            </script>";
    }
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
    <link rel="stylesheet" href="css/admin.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Edit Laptop</title>
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
<!-- Edit Laptop Menu -->
<main>
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="laptop-menu">
        <p><a href="backend.php">Dashboars</a> / <a href="backend-laptop.php">Laptop</a> / <a href="edit-laptop.php">Edit Laptop</a></p>
        <h5 class="center">Edit Laptop</h5>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="add-laptop">
      <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $notebook['id_laptop'] ?>" required>
        <input type="hidden" name="gambarLama" value="<?= $notebook['gambar'] ?>" required>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <input value="<?=$notebook['nama_laptop'] ?>" id="nama_laptop" name="nama" type="text" class="validate" required>
            <label class="active" for="nama_laptop">Nama Laptop</label>
          </div>
          <div class="input-field col s6 m6 l6">
            <input value="<?=$notebook['jenis_laptop'] ?>" name="jenis" type="text" id="jenis" required>
            <label class="active" for="jenis" >Jenis Laptop</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6 m6 l6">
            <input value="<?=$notebook['prosesor'] ?>" name="prosesor" id="prosesor" type="text" required>
            <label class="active" for="prosesor" >Prosesor</label>
          </div>
          <div class="input-field col s6 m6 l6">
            <input value="<?=$notebook['vga'] ?>" id="vga" name="vga" type="text" required>
            <label class="active" for="vga">VGA</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <input value="<?=$notebook['ram'] ?>" name="ram" id="ram" type="text" required>
            <label class="active" for="ram">RAM</label>
          </div>
          <div class="input-field col s6 m6 l6">
            <input value="<?=$notebook['storage'] ?>" id="storage" name="storage" type="text" required>
            <label class="active" for="storage">Storage</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <input value="<?=$notebook['dimensi'] ?>" id="dimensi" name="dimensi" type="text" required>
            <label class="active" for="dimensi">Dimensi</label>
          </div>
          <div class="input-field col s6 m6 l6">
            <input value="<?=$notebook['merek'] ?>" id="merek" name="merek" type="text" required>
            <label class="active" for="merek">Merek</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <input value="<?=$notebook['harga'] ?>" id="harga" name="harga" type="text" required>
            <label class="active" for="harga">Harga</label>
          </div>
          <div class="file-field input-field col s3 m3 l3">
            <div class="btn">
              <span>Image</span>
              <input type="file" name="gambar">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path" type="text" placeholder="Upload Laptop Image" value="<?=$notebook['gambar'] ?>">
            </div>
          </div>
          <div class="col s3 m3 l3 img-preview">
            <img src="assets/img/<?= $notebook['gambar'] ?>" class="responsive-img">
          </div>
        </div>        
        <div class="row">
          <div class="input-field col s12 m12 l12">
            <textarea id="detail" class="materialize-textarea" name="detail" required=""></textarea>
            <label class="active" for="detail">Deskripsi</label>
          </div>
        </div>
          <p class="center"><button class="btn waves-effect waves-light submit-add" type="submit" name="edit">Edit
            <i class="material-icons right">send</i>
          </button>
          </p>
      </form>
    </div>
  </div>
</main>
<!-- Add Laptop Menu END -->
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
  $('#detail').val('<?=$notebook['detail'] ?>');
  M.textareaAutoResize($('#detail'));
</script>
</body>
</html>