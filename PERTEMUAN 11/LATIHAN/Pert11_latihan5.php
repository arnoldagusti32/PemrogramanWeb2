<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "lat_dbase");
// $hasil = mysql_db_query("lat_dbase", "select * from tbl_mhs");
$hasil = mysqli_query($con, "select * from tbl_mhs");
while ($data = mysqli_fetch_row($hasil)) {
    echo "$data[0] $data[1] $data[2]<br>";
}
//Mohon Maaf pak untuk mysql_db_query() pada PHP 7 sudah tidak bisa digunakan.
?>