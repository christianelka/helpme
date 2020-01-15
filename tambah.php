<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Toko Buku</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="topnav">
		<a id="judul" style="color: yellow;font-size: auto" href="#Judul">Aplikasi Toko Buku</a>
		<a href="#Home">Home</a>
		<a href="#About">About</a>
		<a href="#Contact">Contact Us</a>
		<a style="float: right" href="#logout">Logout</a>
	</div>

	<div class="bagi navigasi">	
		<div class="panel">
			<a href="index.php" class="active">ADMIN PAGE</a>
			<a href="#">Lihat Data</a>
			<a href="#">Tambah Data</a>
			<a href="#">Edit Data</a>
			<a href="#">Hapus Data</a>
		</div>
	</div>
	<div class="bagi konten">
		<div class="head-form">
				<h1>Tambah Buku</h1>
		</div>
		<div class="dokter">
		<div class="form-abu">
		<form>
		<label for="">Judul Buku</label>
		<input type="text" name="judul" placeholder="Judul Buku" class="full">
		<label for="">No ISBN</label>
		<input type="text" name="noisbn" placeholder="Nomor ISBN" class="full">
		<label for="">Penulis</label>
		<input type="text" name="penulis" placeholder="Penulis" class="full">
		<label for="">Penerbit</label>
		<input type="text" name="penerbit" placeholder="Penerbit" class="full">
		<label for="">Tahun</label>
		<input type="text" name="tahun" placeholder="Tahun Terbit" class="full">
		<label for="">Stok</label>
		<input type="text" name="stok" placeholder="Stok" class="full">
		<label for="">Harga Pokok</label>
		<input type="text" name="hargapokok" placeholder="Harga Pokok" class="full">
		<input type="submit" value="Tambah Data" class="hijau" name="tambah">
		</form>
	</div>
	</div>
	</div>
</body>
</html>
