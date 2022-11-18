<?php

$nip=$_POST['nip'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$kd_dosen=$_POST['kd_dosen'];
$mk=$_POST['mk'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$no_hp=$_POST['no_hp'];


include "koneksi.php";

$simpan=$koneksi->query("insert into datadosen(nip,nama,jenis_kelamin,kd_dosen,mk,alamat,agama,no_hp) 
						values ('$nip', '$nama', '$jenis_kelamin', '$kd_dosen', '$mk', '$alamat', '$agama', '$no_hp')");

if ($simpan==true){

	header("location:tampil_dosen.php?pesan=inputBerhasil");
} else{
	echo "Error";
}

?>
