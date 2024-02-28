<?php
require_once 'include/header.php';
$id = $_SESSION['UserID'];
?>
<div class="ProfileContainer">
    <?php
    $query = $connect->query("SELECT * FROM user WHERE UserID = '$id'");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $Username = $row["username"];
                $Email = $row["Email"];
                $Alamat = $row["alamat"];
                $NamaLengkap = $row["NamaLengkap"];
    ?>
    <?php
                }
        }else{
    ?>
    <div class="ProfileInfo">
        <h2 class="ProfileData">?</h2>
        <h2 class="ProfileData">?</h2>
        <h2 class="ProfileData">?</h2>
        <h2 class="ProfileData">?</h2>
    </div>
    <?php
        }
    ?>
    <div class="ProfileInfo">
        <h2 class="ProfileData"><?php echo $Username; ?></h2>
        <h2 class="ProfileData"><?php echo $Email; ?></h2>
        <h2 class="ProfileData"><?php echo $Alamat; ?></h2>
        <h2 class="ProfileData"><?php echo $NamaLengkap; ?></h2>
    </div>
    </div>
        <dialog id="edit-dialog">
            <div class="dialog-nav"><h2>Edit Album</h2><p onclick="linker3('dialoge')">X</p></div>
            <form class="form-1"  name="EDITALBUM" action="action/act_edit.php" method="post">
                <div class="form-input-row">
                    <label for="userid">Id Pembuat</label>
                    <input type="text" name="userid" class="inptxt" placeholder="..." auto-complete="off" maxlength="11" readonly required>
                </div>
                <div class="form-input-row">
                    <label for="albumid">Id Album</label>
                    <input type="text" name="albumid" class="inptxt" placeholder="..." auto-complete="off" maxlength="11" readonly required>
                </div>
                <div class="form-input-row">
                    <label for="tanggaldibuat">Tanggal Dibuat</label>
                    <input type="text" name="tanggaldibuat" class="inptxt" placeholder="..." auto-complete="off" maxlength="11" readonly required>
                </div>
                <div class="form-input-row">
                    <label for="namaalbum">Nama Album</label>
                    <input type="text" name="namaalbum" class="inptxt" placeholder="Berikan Nama Album" auto-complete="off" maxlength="255" required>
                </div>
                <div class="form-input-row">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="inptxt" placeholder="Berikan Deskripsi Album" auto-complete="off" required>
                </div>
                <div class="form-input-row">
                    <input class="btn6" type="submit" name="UpdateAlbum" value="Update Album">
                </div>
            </form>
        </dialog>
        <dialog id="edit-dialog2">
            <div class="dialog-nav"><h2>Data Foto</h2><p onclick="linker3('dialog3')">X</p></div>
            <form class="form-1"  name="DATAPHOTO" action="action/act_photo.php" method="post">
                <div class="form-input-row">
                    <label for="userid">Id Pembuat</label>
                    <input type="text" name="userid" class="inptxt" placeholder="..." auto-complete="off" maxlength="11" readonly required>
                </div>
                <div class="form-input-row">
                    <label for="idfoto">Id Foto</label>
                    <input type="text" name="idfoto" class="inptxt" placeholder="..." auto-complete="off" maxlength="11" readonly required>
                </div>
                <div class="form-input-row">
                    <label for="albumid">Id Album</label>
                    <input type="text" name="albumid" class="inptxt" placeholder="..." auto-complete="off" maxlength="11" readonly required>
                </div>
                <div class="form-input-row">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="inptxt" placeholder="Judul Foto" auto-complete="off" maxlength="255" required>
                </div>
                <div class="form-input-row">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="inptxt" placeholder="Deskripsi Foto" auto-complete="off" maxlength="255" required>
                </div>
                <div class="form-input-row">
                    <label for="tanggalunggah">Tanggal Dibuat</label>
                    <input type="text" name="tanggalunggah" class="inptxt" placeholder="..." auto-complete="off" maxlength="11" readonly required>
                </div>
                <div class="form-input-row-2">
                    <button class="DataPhotoButton" type="EditFoto" name="UpdatePhoto">Edit</button>
                    <button class="DataPhotoButton" type="DeleteFoto" name="DeletePhoto">Hapus</button>
                </div>
            </form>
        </dialog>

<div class="Titles">
    <h2 class="Title">Upload</h2>
    <h2 class="Title">Album</h2>
</div>
<main class="PhotoAlbumContainer">
    <div class="UserPhoto">        
    <?php
    $query = $connect->query("SELECT * FROM foto WHERE UserID = '$id' ORDER BY TanggalUnggah DESC");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageID = $row["IdFoto"];
                $Judul = $row["JudulFoto"];
                $Deskripsi = $row["DeskripsiFoto"];
                $imageData = 'uploads/'.$row["LokasiFile"];
                $TanggalUnggah = $row["TanggalUnggah"];
                $AlbumID = $row["AlbumID"];
    ?>
        <img class="ImageItem" src="<?php echo $imageData; ?>" alt="" onclick="linker3('dialog3'); LoadDataPhoto(this)"  data-albumid="<?php echo $AlbumID; ?>" data-idfoto="<?php echo $imageID; ?>" data-judul="<?php echo $Judul; ?>" data-deskripsi="<?php echo $Deskripsi; ?>" data-tanggalunggah="<?php echo $TanggalUnggah; ?>" data-userid="<?php echo $id; ?>"/>
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
    <div class="UserAlbum">
    <?php
    $query = $connect->query("SELECT * FROM album WHERE UserID = '$id' ORDER BY TanggalDibuat DESC");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $AlbumID = $row["AlbumID"];
                $NamaAlbum = $row["NamaAlbum"];
                $Deskripsi = $row["Deskripsi"];
                $TanggalDibuat = $row["TanggalDibuat"];
                $UserID = $row["UserID"];
    ?>
        <div class="Album">
            <h2 class="NamaAlbum"><?php echo $NamaAlbum; ?></h2>
            <button class="EditButton" onclick="linker3('dialoge'); LoadEditAlbum(this)" data-albumid="<?php echo $AlbumID; ?>" data-namaalbum="<?php echo $NamaAlbum; ?>" data-deskripsi="<?php echo $Deskripsi; ?>" data-tanggaldibuat="<?php echo $TanggalDibuat; ?>" data-userid="<?php echo $UserID; ?>">EDIT</button>
            <button class="DeleteButton"><a href="action/act_delete.php?DeleteAlbumID=<?php echo $AlbumID;?>" onclick="return confirm('Apakah anda yakin menghapus Album <?=$NamaAlbum?>?')">Hapus</a></button>
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


<?php
require_once 'include/footer.php';
?>