<!DOCTYPE html>
<html>
<head>
	<title>BUKU</title>
</head>
<body>
 
	<form action="/formulir/proses" method="post">
        @csrf
      	<label for="nama">Nama</label>
		<input type="text" name="nama"> <br/>
		<label for="alamat">alamat</label>
		<input type="text" name="alamat"> <br/>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>