<?php
include_once 'connection.php'; 

$DeleteAlbum = $_GET['DeleteAlbumID'];

if (isset($_POST['DisLike'])) {
    $FotoID = $_GET['FotoID'];
    $LikeID = $_GET['LikeID'];
    $Delete = "DELETE FROM likefoto WHERE likefoto.LikeID ='$LikeID'";
    $resultDelete = mysqli_query($connect, $Delete);
    if($resultDelete){
        echo "<script> alert ('like berhasil dihapus.'); window.location.replace('../interaction.php?ID=". $FotoID ."')</script>";
    }else{
        echo "<script> alert ('like gagal dihapus:". mysqli_error($connect) ."'); window.location.replace('../interaction.php?ID=". $FotoID ."')</script>";
    }
    mysqli_close($connect);
}

if (isset($DeleteAlbum)) {
    $Delete = "DELETE FROM album WHERE album.AlbumID ='$DeleteAlbum'";
    $resultDelete = mysqli_query($connect, $Delete);
    if($resultDelete){
        echo "<script> alert ('Album berhasil dihapus.'); window.location.replace('../profile.php')</script>";
    }else{
        echo "<script> alert ('Album gagal dihapus:". mysqli_error($connect) ."'); window.location.replace('../profile.php')</script>";
    }
    mysqli_close($connect);
}
?>