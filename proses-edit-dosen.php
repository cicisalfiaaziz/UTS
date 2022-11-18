<?php 

include "koneksi.php";

$nip=$_POST['nip'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$kd_dosen=$_POST['kd_dosen'];
$mk=$_POST['mk'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$no_hp=$_POST['no_hp'];

$ubah=$koneksi->query("update datadosen set nip='$nip', nama='$nama', jenis_kelamin='$jenis_kelamin', kd_dosen='$kd_dosen', mk='$mk', alamat='$alamat', agama='$agama', no_hp='$no_hp' where nip='$id'");

if ($ubah==true){

	header("location:tampil_dosen.php?pesan=editBerhasil");
} else{
	echo "Error";
}


?>