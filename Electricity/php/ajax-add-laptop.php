<?php 

require 'functions.php';

$laptop = query("SELECT * FROM laptop");
if(isset($_POST['add']))
  {
    if (tambahLaptop($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                // document.location.href = 'backend-laptop.php';
            </script>";
    }
    else {
        echo "<script>
                alert('Data gagal ditambahkan!');
                // document.location.href = 'add-laptop.php';
            </script>";
    }
  }
  var_dump(tambahLaptop($_POST));

 ?>

  <div class="row">
    <div class="col s12 m12 l12">
      <div class="laptop-menu">
        <p><a href="backend.php">Dashboars</a> / <a href="backend-laptop.php">Add Laptop</a></p>
        <h5 class="center">Add Laptop</h5>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="add-laptop">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <input name="nama" type="text">
            <label >Nama Laptop</label>
          </div>
          <div class="input-field col s6 m6 l6">
            <input name="jenis" type="text">
            <label >Jenis Laptop</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6 m6 l6">
            <input name="prosesor" id="" type="text">
            <label >Prosesor</label>
          </div>
          <div class="input-field col s6 m6 l6">
            <input name="vga" type="text">
            <label >VGA</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6 m6 l6">
            <input name="ram" id="" type="text">
            <label >RAM</label>
          </div>
          <div class="input-field col s6 m6 l6">
            <input name="storage" type="text">
            <label >Storage</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6 m6 l6">
            <input name="dimensi" type="text">
            <label >Dimensi</label>
          </div>
          <div class="input-field col s6 m6 l6">
            <input name="merek" type="text">
            <label >Merek</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <input name="harga" type="text">
            <label >Harga</label>
          </div>
          <div class="file-field input-field col s6 m6 l6">
            <div class="btn">
              <span>Image</span>
              <input type="file" name="gambar">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Upload Laptop Image">
            </div>
          </div>
        </div>        
        <div class="row">
          <div class="input-field col s12 m12 l12">
            <textarea id="deskripsi" class="materialize-textarea" name="deskripsi"></textarea>
            <label>Deskripsi</label>
          </div>
        </div>
          <p class="center"><button class="btn waves-effect waves-light submit-add" type="submit" name="add">Add
            <i class="material-icons right">send</i>
          </button>
          </p>
      </form>
    </div>
  </div>