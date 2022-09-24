<?php
$host="localhost";
$user="root";
$password="";
$database="percobaan1";

$koneksi=mysqli_connect($host,$user,$password);
mysqli_select_db($koneksi,$database);

if($koneksi){
echo "Berhasil Terhubung";
}else{
echo "Gagal Terhubung";
}
?>
