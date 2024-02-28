<?php 
include_once 'connection.php'; 
session_start();

if (isset($_SESSION['UserID'])) {
    $UserID = $_SESSION['UserID'];
} else {
    header('location: ../login.php');
    exit;
}

if(isset($_POST["submit"])){
    $Foto = $_GET["FotoID"];
    $IsiKomentar = $_POST["IsiKomentar"];
    $insert = $connect->query("INSERT INTO komentarfoto (IdFoto, UserID, IsiKomentar, TanggalKomentar) VALUES ('".$Foto."', '".$UserID."', '".$IsiKomentar."', NOW())");
    if($insert){
        echo "<script> alert ('komentar berhasil ditambahkan.'); window.location.replace('../interaction.php?ID=". $Foto ."')</script>";
    }else{
        echo "<script> alert ('komentar gagal ditambahkan". $insert ."'); window.location.replace('../interaction.php?ID=". $Foto ."')</script>";
    }
}
?>