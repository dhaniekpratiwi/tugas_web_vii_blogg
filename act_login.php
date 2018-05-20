<?php
//cetak dan ambil data dr database
include 'koneksi.php';

//persiapan variabel
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM akun WHERE username='".$username."'";
$select = mysqli_query($koneksi,$query);

if ($akun = mysqli_fetch_assoc($select)) {
//ambil password di databse
  $password_db=$akun['password'];
  // cek enkripsi hashing multi layer
  //1. hash md5
  $hash_md5=md5($password);
  //2. cek hahs bcrypt
  $cek_bcrypt = password_verify($hash_md5,$password_db);

  if ($cek_bcrypt) {
    // simpan data ke session
    session_start();
    $_SESSION['id'] = $akun['id'];
    $_SESSION['username'] = $akun['username'];
    //arahkan ke halaman index
    header('location:index.php');

  } else {
    echo "<h3>Maaf password tidak cocok untuk akun ".$username."</h3><br>";
    echo '<a href="login.php">Kembali</a>';
  }

} else {
  echo "<h3>Maaf kami tidak menemukan username ".$username." dalam database </h3><br>";
  echo '<a href="login.php">Kembali</a>';
}
 ?>
