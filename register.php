<?php
require_once 'action/connection.php';
require_once 'action/act_register.php';

if (isset($_SESSION['username'])) {
    header('location: home.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/universal.css">
    <link rel="stylesheet" href="asset/css/form.css">
    <title>Register</title>
</head>
<body class="body2">
  <main id="main-2">
    <form class="form-2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h1 class="login-title">Register</h1>
      <div class="form-input-row">
        <label for="username">Username</label>
        <input class="inptxt" type="text" id="username" name="username" placeholder="Masukan username" autocomplete="off">
      </div>
      <div class="form-input-row">
        <label for="password">Password</label>
        <input class="inptxt" type="password" id="password" name="password" placeholder="Masukan password" autocomplete="off">
      </div>
      <div class="form-input-row">
        <label for="Email">Email</label>
        <input class="inptxt" type="text" id="Email" name="Email" placeholder="Masukan Email" autocomplete="off">
      </div>
      <div class="form-input-row">
        <label for="NamaLengkap">Nama Lengkap</label>
        <input class="inptxt" type="text" id="NamaLengkap" name="NamaLengkap" placeholder="Masukan Nama Lengkap" autocomplete="off">
      </div>
      <div class="form-input-row">
        <label for="alamat">Alamat</label>
        <input class="inptxt" type="text" id="alamat" name="alamat" placeholder="Masukan Alamat" autocomplete="off">
      </div>
      <div class="form-input-row">
        <button type="submit" class="btn6" name="Login">Sign in</button>
      </div>
    </form>
  </main>

<?php
require_once 'include/footer.php';
?>