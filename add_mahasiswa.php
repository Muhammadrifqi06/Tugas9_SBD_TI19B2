<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Mahasiswa</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
 
	<form action="add_mahasiswa.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Mahasiswa</td>
				<td><input type="text" name="id_mhsw"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama_mhsw"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim_mhsw"></td>
			</tr>
            <tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas_mhsw"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
 
	if(isset($_POST['Submit'])) {
		$id_mhsw = $_POST['id_mhsw'];
		$nama_mhsw = $_POST['nama_mhsw'];
		$nim_mhsw = $_POST['nim_mhsw'];
        $kelas_mhsw = $_POST['kelas_mhsw'];
		
		include("config.php");
		
		$result = mysqli_query($config, "INSERT INTO mahasiswa(id_mhsw,nama_mhsw,nim_mhsw,kelas_mhsw) 
		VALUES($id_mhsw,$nama_mhsw,$nim_mhsw,$kelas_mhsw)");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>