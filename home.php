<?php
require_once 'include/header.php';

$cek = "SELECT AlbumID, NamaAlbum FROM album WHERE UserID = '$id'";
$hasil = mysqli_query($connect, $cek);
if (!$hasil) {
    die("Query Gagal: " . mysqli_error($connect));
}
?>

<main>
    <dialog id="add-dialog">
        <div class="dialog-nav"><h2>Upload</h2><p onclick="linker3('dialogy')">X</p></div>
        <form class="form-1" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-input-row">
                <img id="prev">
                <input type="file" name="file" accept="image/*" onchange="loadFile(event)" required>
            </div>
            <div class="form-input-row">
                <label for="Judul">Judul</label>
                <input type="text" name="Judul" class="inptxt" placeholder="Judul Foto" auto-complete="off" maxlength="255" required>
            </div>
            <div class="form-input-row">
                <label for="Deskripsi">Deskripsi</label>
                <input type="text" name="Deskripsi" class="inptxt" placeholder="Deskripsi Foto" auto-complete="off" maxlength="255" required>
            </div>
            <div class="form-input-row">
                <label for="Pilih Album">Album</label>
                <select name="AlbumID" class="inpselect" required>
                    <option value="" selected disabled>Pilih Album</option>
                    <?php
                        $uniques = [];
                        while ($row = mysqli_fetch_assoc($hasil)) {
                            $AlbumID = $row['AlbumID'];
                            $NamaAlbum = $row['NamaAlbum'];
                            
                            if (!in_array($AlbumID, $uniques)) {
                                echo "<option name='AlbumID' value='$AlbumID' required>$NamaAlbum</option>";
                                $uniques[] = $AlbumID;
                            }
                        } 
                    ?>
                </select>
            </div> 
            <div class="form-input-row">
                <input class="btn6" type="submit" name="submit" value="Upload">
            </div>
        </form>
    </dialog>
    <div class="flexibleCon">        
    <?php
    $query = $connect->query("SELECT * FROM foto ORDER BY TanggalUnggah DESC");
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

<button class="add_btn" onclick="linker3('dialogy')">+</button>
<?php
require_once 'include/footer.php';
?>