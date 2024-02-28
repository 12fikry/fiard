<?php
require_once 'action/connection.php';
session_start();

if (isset($_SESSION['UserID'])) {
    $name = $_SESSION['username'];
    $id = $_SESSION['UserID'];
} else {
    header('location: login.php');
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
    <title>Fiard</title>
</head>
<body>
    <header>
        <nav>
            <h1 class="ProfileLogo" onclick="linker('profile')"></h1>
            <h1 class="HomeLogo" onclick="linker('home')"></h1>
            <h1 class="AlbumLogo" onclick="linker('album')"></h1>
            <h1 class="logout" onclick="linker('logout')"></h1>
        </nav>
    </header>