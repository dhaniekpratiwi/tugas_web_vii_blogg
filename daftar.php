<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DAFTAR</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <form action="act_daftar.php" method="post">
      <table ID="tabel_daftar" align="center">
        <tr>
          <td colspan="3"><h1 align="center"> DAFTAR <hr> </h1></td>
        </tr>
        <tr>
          <td>Nama Lengkap</td>
          <td>:</td>
          <td> <input type="text" name="namalengkap" value=""> </td>
        </tr>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td>
            <input type="text" name="username" value="">
          </td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td>
            <input type="password" name="password" value="">
          </td>
        </tr>
        <tr>
          <td>Ulangi Password</td>
          <td>:</td>
          <td>
            <input type="password" name="ulang_password" value="">
          </td>
        </tr>
        <tr >
          <td>
          </td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="2">
            <a href="login.php">
              <button type="button" class="btn_login">Kembali </button>
            </a>
            <button type="submit" class="btn_login">Simpan</button>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
    </form>
  </body>
</html>
