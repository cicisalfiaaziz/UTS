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
				<form action="proses-input-dosen.php" method="POST">
					<div class="form-group">
						<label for="nip">NIP</label>
						<input type="number" name="nip" class="form-control">
					</div>

					<div class="form-group">
						<label for="nama">NAMA Dosen</label>
						<input type="text" name="nama" class="form-control" placeholder="Isikan NAMA">
					</div>

					<div class="form-group">
						<label form="jenis_kelamin">Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-control">
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option></select>
					</div>

					<div class="form-group">
						<label for="kd">Kode Dosen</label>
						<input type="Text" name="kd" class="form-control">
					</div>

					<div class="form-group">
						<label form="mk">MK</label>
						<input type="text" name="kd" class="form-control">	
					</div>
					<div class="form-group">
				  		<label for="alamat">Alamat</label>
				  		<textarea name="alamat" class="form-control" placeholder="Isikan alamat"></textarea>
				  	
					</div>
					
					<div class="form-group">
						<label for="agama">Agama</label>
						<select name="agama" class="form-control">
							<option value="islam">ISLAM</option>
							<option value="Kristen">KRISTEN</option>
							<option value="budha">BUDHA</option>
							<option value="hindu">HINDU</option>
							<option value="konghuchu">KONGHUCHU</option>
						</select>
					</div>
				  	<div class="form-group">
						<label for="no_hp">no Hp</label>
						<input type="number" name="no_hp" class="form-control">
					</div>
						
						<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
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