<?php 

require 'functions.php';

      function registrasi($data) {
      if(isset($data['registrasi'])) {
      $conn = koneksi();
      $username = $data['username'];
      $email = $data['email'];
      $hashed = password_hash($data['password'], PASSWORD_DEFAULT);
      $checkUsername = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
      $checkEmail = mysqli_query(koneksi(), "SELECT * FROM user WHERE email = '$email'");

      if(mysqli_num_rows($checkUsername) > 0) {
        $errorU = true;
      } else if(mysqli_num_rows($checkEmail) > 0)  {
        $errorE = true;
      } else {
        $queryTambah = "INSERT INTO user VALUES (NULL, '$username', '$email', '$hashed', CURRENT_TIMESTAMP, 0)";
        // $result = mysqli_query($conn, $queryTambah);
        mysqli_query($conn, $queryTambah);
        return mysqli_affected_rows($conn);
      }
        
    }    
}
?>