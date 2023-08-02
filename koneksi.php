<?php
  $host = "192.168.244.5"; 
  $user = "haproxy_bukutamu";
  $pass = "P@ssw0rd456!";
  $nama_db = "bukutamu"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>
