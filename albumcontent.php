<?php
require_once 'include/header.php';
$getID = $_GET['ID'];
$DataAlbum = "SELECT `AlbumID`, `NamaAlbum`, `Deskripsi`, `TanggalDibuat`, `UserID` FROM `album` WHERE `AlbumID` = '$getID'";
$hasil = mysqli_query($connect, $DataAlbum);
if (!$hasil) {
    die("Query gagal: " . mysqli_error($connect));
}
$row = mysqli_fetch_assoc($hasil);
$DeskripsiAlbum = $row['Deskripsi'];
?>

<main>
    <h1 style="margin: 10px 0 10px 0;padding: 10px; width: 100%;text-align: center;"><?php echo $DeskripsiAlbum; ?></h2>
    <div class="flexibleCon">    
        <?php
        $query = $connect->query("SELECT * FROM foto WHERE `AlbumID`= '$getID' ORDER BY TanggalUnggah DESC");
            if($query->num_rows > 0){
                while($row = $query->fetch_assoc()){
                    $imageID = $row["IdFoto"];
                    $imageData = 'uploads/'.$row["LokasiFile"];
        ?>
            <img class="ImageItem" src="<?php echo $imageData; ?>" alt="" ondblclick="LoadPhoto('<?php echo $imageID; ?>')"/>
        <?php
                    }
            }else{
        ?>
            <br>
            <br>
                <strong>Tidak Ada Foto</strong>
        <?php
            }
        ?>
        </div>
</main>

<?php
require_once 'include/footer.php';
?>