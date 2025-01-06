<?php
//Koneksi Antara PHP dan Database
$koneksi = mysqli_connect("localhost","root","","akubisa");
if(mysqli_connect_errno()){
echo "Koneksi Gagal";
}
// else {
// echo "Koneksi Berhasil";
// }
?>