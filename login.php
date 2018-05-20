
<html lang="en" dir="ltr">
  <head>
    <meta charsey="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>

    <form action="act_login.php" method="post" class="form_login">
      <table align="center" ID="tabel_login" >
        <tr>
          <td colspan="3">
            <h1 align="center"> LOGIN</h1> <hr>
          </td>
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
          <td></td>
          <td colspan="2" >
            <button type="submit" class="btn_login">Login</button>
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <h4>Belum punya akun? klik->
              <a href="daftar.php" class="tulis">Daftar</a>
            </h4>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
