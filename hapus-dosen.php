<?php 

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from datadosen where nip='$id'");

if($hapus==true){

	header("location:tampil_dosen.php?pesan=hapusBerhasil");

}else{
	echo "error";
}

?>