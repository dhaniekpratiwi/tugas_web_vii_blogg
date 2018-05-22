<?php
include "koneksi.php";

$namalengkap = $_POST['namalengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$ulang_password = $_POST['ulang_password'];

//cetak password dan ulangi password dan isinya sama
if ($password == $ulang_password) {
//enkripsi multi layer
//1. hash MD5 (hash = de text biasa ke acak tp tdk bis dibalikkan, hanya bisa ditebak, meski pass nya sama tp tiap di enkripsi akan beda)
//$hash_md5 = md_5($password);
//2. hash bcrypt
//$bcrypt = password_hash($hash_md5,PASSWORD_DEFAULT);

  $query = "INSERT INTO akun VALUES(NULL,'".$namalengkap."','".$username."','".$password."')";
  $insert = mysqli_query($koneksi,$query);

  if ($insert) {
    // arahkan ke dlm login
    //header('location:login.php');
    echo "<script>alert('Berhasil Mendaftar')</script>";
  echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
  } else {
    echo "GAGAL INPUT DATANYA GAN -_-";
    echo '<a href="daftar.php">Kembali</a>';
  }
  } else {
    echo "password dan ulang Password tdk sama <br>";
    echo '<a href = "daftar.php">Kembali</a>';
  }
  ?>
