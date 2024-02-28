<?php 
include_once 'connection.php';

if (isset($_POST['UpdatePhoto'])) {
    $FotoID = $_POST['idfoto'];
    $JudulFoto = $_POST['judul'];
    $Deskripsi = $_POST['deskripsi'];
    $cek = mysqli_query($connect, "SELECT * FROM foto WHERE JudulFoto = '$JudulFoto';");
    if ($cek) {
        $insert = $connect->query("UPDATE foto SET JudulFoto = '".$JudulFoto."', DeskripsiFoto = '".$Deskripsi."' WHERE foto.IdFoto ='$FotoID';");
        if($insert){
            echo "<script> alert ('data ". $JudulFoto ." telah berhasil diperbarui.'); window.location.replace('../profile.php')</script>";
        }else{
            echo "<script> alert ('data ". $JudulFoto ." gagal diperbarui:". mysqli_error($connect) ."'); window.location.replace('../profile.php')</script>";
        }
    } else {
        die("Error: " . mysqli_error($connect));
    }
    mysqli_close($connect);
};

if (isset($_POST['DeletePhoto'])) {
    $FotoID = $_POST['idfoto'];
    $Delete = "DELETE FROM foto WHERE foto.IdFoto ='$FotoID'";
    $resultDelete = mysqli_query($connect, $Delete);
    if($resultDelete){
        echo "<script> alert ('berhasil dihapus.'); window.location.replace('../profile.php')</script>";
    }else{
        echo "<script> alert ('gagal dihapus:". mysqli_error($connect) ."'); window.location.replace('../profile.php')</script>";
    }
    mysqli_close($connect);
}
