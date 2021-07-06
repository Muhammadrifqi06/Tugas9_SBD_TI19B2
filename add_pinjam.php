<?php include('header.php');?>
 
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Buku</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
 
	<form action="add_pinjam.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Peminjaman</td>
				<td><input type="text" name="id_pinjam"></td>
			</tr>
			<tr> 
				<td>ID Buku</td>
				<td><input type="text" name="id_buku"></td>
			</tr>
			<tr>
				<td>ID Mahasiswa</td>
				<td><input type="text" name="id_mhsw"></td>
			</tr>
            <tr>
				<td>Tanggal Peminjaman</td>
				<td><input type="text" name="tgl_pinjam"></td>
			</tr>
            <tr>
				<td>Tanggal Pengembalian</td>
				<td><input type="text" name="tgl_kembali"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
 
	if(isset($_POST['Submit'])) {
		$id_pinjam = $_POST['id_pinjam'];
		$id_buku = $_POST['id_buku'];
		$id_mhsw = $_POST['id_mhsw'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
		$tgl_kembali = $_POST['tgl_kembali'];

		include("config.php");
		
		$result = mysqli_query($config, "INSERT INTO peminjaman(id_pinjam,id_buku,id_mhsw,tgl_pinjam,tgl_kembali) 
		VALUES($id_pinjam,$id_buku,$id_mhsw,$tgl_pinjam,$tgl_kembali)");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>