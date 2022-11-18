<!doctype HTML>
<html>
<head>
	<title>Data dosen</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="DataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1>Data dosen</h1>
<?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
		<div class="alert alert-success">
			Penyimpanan Berhasil!
		</div>
		<?php 

}

?>

<?php 

if(@$_GET['pesan']=="hapusBerhasil"){

?>
		<div class="alert alert-success">
			Data Berhasil Dihapus!
		</div>
		<?php 

}

?>
		<table id="dataTables" class="table table-bordered">
		<thead>
			<tr>
				<th>NIP</th><th>Nama Dosen</th><th>Jenis kelamin</th><th>kd_dosen</th><th>Mata_Kuliah</th><th>Alamat</th><th>Agama</th><th>No HP/Telp</th>
				<th>
					<a href="input-dosen.php">
						<button class="btn btn-info glyphicon glyphicon-plus"></button>
					</a>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php 

		include("koneksi.php");
		$sql=$koneksi->query("select * from datadosen order by nip ASC");

		while($row= $sql->fetch_assoc()){
		?>

			<tr>
				<td><?php echo $row['nip']?></td>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['jenis_kelamin']?></td>
				<td><?php echo $row['kd_dosen']?></td>
				<td><?php echo $row['mk']?></td>
				<td><?php echo $row['alamat']?></td>
				<td><?php echo $row['agama']?></td>
				<td><?php echo $row['no_hp']?></td>
				<td>

					<a href="edit-dosen.php?id=<?php echo $row['nip']?>">
						<button class="btn btn-xs btn-denger glyphicon glyphicon-edit"></button>
					</a>

					<a href="hapus-dosen.php?id=<?php echo $row['nip']?>" onclick=" return confirm('anda yakin menghapus data?')">
						<button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
					</a>
			</tr>

		<?php 
		}
		?>
		</tbody>
		</table>
		</div>
	</div>
</div>


<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('#dataTables').DataTable();
});

</script>

</body>
</html>