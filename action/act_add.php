<?php 
include_once 'connection.php'; 
session_start();

if (isset($_SESSION['UserID'])) {
    $UserID = $_SESSION['UserID'];
} else {
    header('location: login.php');
    exit;
}

if (isset($_POST['AddAlbum'])) {
    $NamaAlbum = $_POST['NamaAlbum'];
    $Deskripsi = $_POST['Deskripsi'];
    $User = $UserID;
    $getNama = mysqli_query($connect, "SELECT * FROM album WHERE NamaAlbum = '$NamaAlbum';");
    $row = mysqli_fetch_assoc($getNama);
    $cek = $row['NamaAlbum'];
    if($cek === $NamaAlbum) {
        die("Mohon pilih nama yang lain");
    } else {
        $insert = $connect->query("INSERT INTO album (NamaAlbum, Deskripsi, TanggalDibuat, UserID) VALUES ('".$NamaAlbum."', '".$Deskripsi."', NOW(), '".$User."')");
        if($insert){
            echo "<script> alert ('". $NamaAlbum ." berhasil ditambahkan.'); window.location.replace('../album.php')</script>";
        }else{
            echo "<script> alert ('Album gagal ditambahkan:". $insert ."'); window.location.replace('../album.php')</script>";
        }
    }
    mysqli_close($connect);
}
if(isset($_POST['Like'])){
    $FotoID = $_GET['FotoID'];
    $User = $UserID;
    $insert = $connect->query("INSERT INTO `likefoto`(`IdFoto`, `UserID`, `TanggalLIke`) VALUES ('".$FotoID."', '".$User."', NOW())");
    if($insert){
        echo "<script> alert ('Like Ditambahkan'); window.location.replace('../interaction.php?ID=". $FotoID ."')</script>";
    }else{
        echo "<script> alert ('Like gagal ditambahkan". $insert ."'); window.location.replace('../interaction.php?ID=". $FotoID ."')</script>";
    }
}

?>