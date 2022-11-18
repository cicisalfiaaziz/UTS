<!DOCTYPE html>
<html>
<head>
<title> Menampilkan hasil inputan form </title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="proses-edit-dosen.php" method="POST">
					<?php 
					$id=$_GET['id'];
					include "koneksi.php";
					$tampil=$koneksi->query("select * from datadosen where nip='$id'");
					$row=$tampil->fetch_assoc();
					?>
					<div class="form-group">
						<label for="nip">Nip</label>
						<input type="hidden" name="nip" value="<?php echo $row['nip']?>" class="form-control">
						<input type="int" name="nip" value="<?php echo $row['nip']?>" class="form-control">
					</div>

					<div class="form-group">
						<label for="nama">NAMA</label>
						<input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
					</div>

					<div class="form-group">
						<label form="jenis_kelamin">Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-control">
						<option value="<?php echo $row['jenis_kelamin']?>"selected><?php echo $row['jenis_kelamin']?></option>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option></select>
					</div>

					<div class="form-group">
						<label for="kd_dosen">kd_dosen</label>
						<input type="text" name="kd_dosen" value="<?php echo $row['kd_dosen']?>" class="form-control">
					</div>

					<div class="form-group">
						<label for="mk">mk</label>
						<input type="text" name="mk" value="<?php echo $row['mk']?>" class="form-control" placeholder="Isikan ">
					</div>
					
					<div class="form-group">
				  		<label for="alamat">alamat</label>
				  		<textarea name="alamat" class="form-control" placeholder="Isikan alamat"><?php echo $row['alamat']?>"</textarea>
				  	</div>
				  	<div class="form-group">
						<label for="agama">Agama</label>
						<select name="agama" class="form-control">
							<option value="<?php echo $row['agama']?>"selected><?php echo $row['agama']?></option>
							<option value="islam">ISLAM</option>
							<option value="Kristen">KRISTEN</option>
							<option value="budha">BUDHA</option>
							<option value="hindu">HINDU</option>
							<option value="konghuchu">KONGHUCHU</option>
						</select>
					</div>
				  	<div class="form-group">
						<label for="no_hp">no_hp</label>
						<input type="char" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
					</div>
						
						<input type="submit" name="kirim" value="UBAH" class="btn btn-info">
						<input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
					</div>
				</form>
			</div>
		</div>
	</div>

<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>