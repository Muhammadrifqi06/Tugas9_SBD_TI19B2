<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Buku</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
 
	<form action="add_buku.php" method="post" name="form1">
		<table width="25%" border="5">
			<tr> 
				<td>ID buku</td>
				<td><input type="text" name="id_buku"></td>
			</tr>
			<tr> 
				<td>Judul Buku</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr> 
				<td>Pengarang</td>
				<td><input type="text" name="pengarang"></td>
			</tr>
            <tr> 
				<td>Penerbit</td>
				<td><input type="text" name="penerbit"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id_buku = $_POST['id_buku'];
		$judul = $_POST['judul'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];
		
		include("config.php");
				
		$result = mysqli_query($conn, "INSERT INTO buku(id_buku,judul,pengarang,penerbit) 
        VALUES('$id_buku','$judul','$pengarang','$penerbit')");
		

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>