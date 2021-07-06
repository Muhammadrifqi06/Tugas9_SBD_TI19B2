<?php

include("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_mhsw'];

	$id_mhsw=$_POST['id_mhsw'];
	$nama_mhsw=$_POST['nama_mhsw'];
	$nim_mhsw=$_POST['nim_mhsw'];
    $kelas_mhsw=$_POST['kelas_mhsw'];
	
	$result = mysqli_query($conn, 
	"UPDATE mahasiswa SET id_mhsw='$id_mhsw',nama_mhsw='$nama_mhsw',nim_mhsw='$nim_mhsw',kelas_mhsw='$kelas_mhsw' 
	WHERE id_mhsw=$id");
	
	header("Location: index.php");
}
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Mahasiswa</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id_mhsw=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_mhsw = $user_data['id_mhsw'];
	$nama_mhsw = $user_data['nama_mhsw'];
	$nim_mhsw = $user_data['nim_mhsw'];
	$kelas_mhsw = $user_data['kelas_mhsw'];
}
?>
<html>
<?php include('header1.php');?>
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="update_mahasiswa.php">
		<table border="0">
			<tr> 
				<td>ID Mahasiswa</td>
				<td><input type="text" name="id_mhsw" value=<?php echo $id_mhsw;?>></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama_mhsw" value=<?php echo $nama_mhsw;?>></td>
			</tr>
			<tr> 
				<td>Nim</td>
				<td><input type="text" name="nim_mhsw" value=<?php echo $nim_mhsw;?>></td>
			</tr>
            <tr> 
				<td>Kelas</td>
				<td><input type="text" name="kelas_mhsw" value=<?php echo $kelas_mhsw;?>></td>
			</>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html