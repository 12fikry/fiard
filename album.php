<?php
require_once 'include/header.php';
?>

<main>
    <dialog id="add-dialog">
        <div class="dialog-nav"><h2>Buat Album</h2><p onclick="linker3('dialogy')">X</p></div>
        <form class="form-1" action="action/act_add.php" method="post">
            <div class="form-input-row">
                <label for="NamaAlbum">Nama Album</label>
                <input type="text" name="NamaAlbum" class="inptxt" placeholder="Berikan Nama Album" auto-complete="off" maxlength="255" required>
            </div>
            <div class="form-input-row">
                <label for="Deskripsi">Deskripsi</label>
                <input type="text" name="Deskripsi" class="inptxt" placeholder="Berikan Deskripsi Album" auto-complete="off" required>
            </div>
            <div class="form-input-row">
                <input class="btn6" type="submit" name="AddAlbum" value="Buat Album">
            </div>
        </form>
    </dialog>
    <div class="AlbumList">
    <?php
    $query = $connect->query("SELECT * FROM album ORDER BY TanggalDibuat DESC");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $AlbumID = $row["AlbumID"];
                $NamaAlbum = $row["NamaAlbum"];
                $Deskripsi = $row["Deskripsi"];
                $TanggalDibuat = $row["TanggalDibuat"];
                $UserID = $row["UserID"];
    ?>
        <div class="Album" onclick="LoadAlbum('<?php echo $AlbumID; ?>')">
            <h2 class="NamaAlbum"><?php echo $NamaAlbum; ?></h2>
            <p class="TanggalDibuat"><?php echo $TanggalDibuat; ?></p>
        </div>
    <?php
                }
        }else{
    ?>
        <br>
        <br>
            <strong>Tidak Ada Album</strong>
    <?php
        }
    ?>
    </div>

</main>

<button class="add_btn" onclick="linker3('dialogy')">+</button>
<?php
require_once 'include/footer.php';
?>