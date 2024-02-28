<?php 
include_once 'connection.php';

if (isset($_POST['UpdateAlbum'])) {
    $AlbumID = $_POST['albumid'];
    $NamaAlbum = $_POST['namaalbum'];
    $Deskripsi = $_POST['deskripsi'];
    $cek = mysqli_query($connect, "SELECT * FROM album WHERE NamaAlbum = '$NamaAlbum';");
    if ($cek) {
        $insert = $connect->query("UPDATE album SET NamaAlbum = '".$NamaAlbum."', Deskripsi = '".$Deskripsi."' WHERE AlbumID = '$AlbumID';");
        if($insert){
            echo "<script> alert ('data ". $NamaAlbum ." telah berhasil diperbarui.'); window.location.replace('../profile.php')</script>";
        }else{
            echo "<script> alert ('data ". $NamaAlbum ." gagal diperbarui:". mysqli_error($connect) ."'); window.location.replace('../profile.php')</script>";
        }
    } else {
        die("Error: " . mysqli_error($connect));
    }
    mysqli_close($connect);
}

?>