<?php
include "koneksi.php";
$ID = $_POST['ID'];
$title = $_POST['title'];
$author = $_POST['author'];
$abstraksi = $_POST['abstraksi'];
$content = $_POST['content'];
$time = date("d M Y, H:i");
//$lead = str_replace("\r\n","<br>",$lead);
//$content= str_replace("\r\n","<br>",$content);
$update = "UPDATE articles SET judul='$title', penulis='$author',
lead='$abstraksi',
content='$content', waktu='$time' WHERE articleID ='$ID'";
$hasil = mysqli_query($koneksi, $update);
if ($hasil) {
    echo "Artikel berhasil di update<br>";
    echo "<a href=\"tampil_articles.php\">List</a>";
} else {
    echo "Artikel gagal di update";
}
?>