<?php
$koneksi= mysqli_connect("localhost", "root","", "2257401021") or die ('database tidak terhubung');


//cek koneksi
if(mysqli_connect_errno()){
  echo "koneksi database gagal : " . mysqli_connect();
}



?>