<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from buku where buku_id='$id'");

if($hapus==true){

    header("location:contoh2.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>