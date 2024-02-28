<?php
require_once 'action/connection.php';
require_once 'action/act_login.php';

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
    <title>Login</title>
</head>
<body class="body2">
  <main id="main-2">
    <form class="form-2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h1 class="login-title">LOGIN</h1>
      <div class="form-input-row">
        <label for="username">Username</label>
        <input class="inptxt" type="text" id="username" name="username" placeholder="Masukan username" autocomplete="off" required>
      </div>
      <div class="form-input-row">
        <label for="password">Password</label>
        <input class="inptxt" type="password" id="password" name="password" placeholder="Masukan password" autocomplete="off" required>
      </div>
      <div class="form-input-row">
        <button type="submit" class="btn6" name="Login">Sign in</button>
      </div>
    </form>
  </main>

<?php
require_once 'include/footer.php';
?>