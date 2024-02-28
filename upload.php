<?php 
include_once 'action/connection.php'; 
session_start();

if (isset($_SESSION['UserID'])) {
    $UserID = $_SESSION['UserID'];
} else {
    header('location: login.php');
    exit;
}


$targetDir = "uploads/"; 
if(isset($_POST["submit"])){ 
    if(!empty($_FILES["file"]["name"])){
        $Judul = $_POST["Judul"];
        $Deskripsi = $_POST["Deskripsi"];
        $AlbumID = $_POST["AlbumID"];
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                $insert = $connect->query("INSERT INTO foto (JudulFoto, DeskripsiFoto, TanggalUnggah, LokasiFile, AlbumID, UserID) VALUES ('".$Judul."', '".$Deskripsi."', NOW(), '".$fileName."', 1, '".$UserID."')");
                if($insert){
                    echo "<script> alert ('".$Judul. " has been uploaded successfully.'); window.location.replace('home.php')</script>";
                }else{
                    echo "<script> alert ('File upload gagal, coba kembali.'); window.location.replace('home.php')</script>";
                }
            }else{
                echo "<script> alert ('Maaf, terdapat error saat melakukan upload file.'); window.location.replace('home.php')</script>";
            }
        }else{
            echo "<script> alert ('Maaf, hanya JPG, JPEG, PNG, & GIF yang boleh upload.'); window.location.replace('home.php')</script>";
        } 
    }else{
        echo "<script> alert ('Mohon pilih file yang ingin di upload.'); window.location.replace('home.php')</script>";
    }
}
?>