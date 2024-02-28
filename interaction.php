<?php
require_once 'include/header.php';
$imgID = $_GET['ID'];
$DataFoto = "SELECT `IdFoto`, `JudulFoto`, `DeskripsiFoto`, `TanggalUnggah`, `LokasiFile`, `AlbumID`, `UserID` FROM `foto` WHERE `IdFoto` = $imgID";
$hasil = mysqli_query($connect, $DataFoto);
if (!$hasil) {
    die("Query gagal: " . mysqli_error($connect));
}
$row = mysqli_fetch_assoc($hasil);
$DeskripsiFoto = $row['DeskripsiFoto'];
?>

<div class="interaction-row-con">
    <div class="DisplayedImgCon">
        <img class="DisplayedImg" src="uploads/<?php echo $row['LokasiFile'];?>" alt=""/>
    </div>
    <div class="TDLC_Container">
        <h1 class="ImgTitle"><?php echo $row['JudulFoto'];?></h1>
        <?php
        $UserID = $row['UserID'];
        $getUsername = $connect->query("SELECT username FROM user WHERE UserID = '$UserID'");
        if($getUsername){
            while($row = $getUsername->fetch_assoc()){
        ?>
            <h2 class="UploadedBy">Diupload Oleh <?php echo $row['username']; ?></h2>
        <?php
            }
        }
        ?>
        <h2 class="ImgDesc"><?php echo $DeskripsiFoto;?></h2>
        <div class="DisplayComment">
        <?php
        $getComment = $connect->query("SELECT * FROM komentarfoto WHERE IdFoto = '$imgID' ORDER BY TanggalKomentar DESC");
            if($getComment->num_rows > 0){
                while($row = $getComment->fetch_assoc()){
                    $User = $row["UserID"];
                    $GetName = $connect->query("SELECT username FROM user WHERE UserID = '$User'");
                    $Name = $GetName->fetch_assoc();
        ?>
                <div class="PostedComment">
                    <h2><?php echo $Name['username'];?></h2>
                    <p><?php echo $row['IsiKomentar'];?></p>
                </div>
        <?php
                    }
            }else{
        ?>
                <strong>Tidak Ada Komentar :/</strong>
        <?php
            }
        ?>
        </div>

        <?php
        $getUsername = $connect->query("SELECT UserID FROM foto WHERE IdFoto = '$imgID'");
        if($getUsername){
            while($row = $getUsername->fetch_assoc()){
                $User = $_SESSION['UserID'];
                // Sudah Di Like atau Belum
                $getLike = $connect->query("SELECT * FROM likefoto WHERE IdFoto = '$imgID' AND UserID = '$User'");
                if($getLike->num_rows > 0){
                    while($row = $getLike->fetch_assoc()){
                        $LikeID = $row["LikeID"];
                ?>
                <!-- Form Menghapus Like -->
                <form class="Like-Form" action="action/act_delete.php?LikeID=<?php echo $LikeID;?>&FotoID=<?php echo $imgID;?>" method="post">
                    <input class="DisLikeButton" type="submit" name="DisLike" value="">
                </form>
                <?php
                        }
                }else{
                ?>
                <!-- Form Memberikan Like -->
                <form class="Like-Form" action="action/act_add.php?FotoID=<?php echo $imgID;?>" method="post">
                    <input class="LikeButton" type="submit" name="Like" value="">
                </form>
                <?php
                }
            }
        }
        ?>
        <!-- Form Memberikan Komentar -->
        <form class="Comment-Form" action="action/act_comment.php?FotoID=<?php echo $imgID;?>" method="post">
            <input type="text" name="IsiKomentar" class="CommentInp" placeholder="Berikan Komentar..." auto-complete="off" maxlength="255" required>
            <input class="SendBtn" type="submit" name="submit" value="">
        </form>
    </div>
</div>

<?php
require_once 'include/footer.php';
?>