<?php

include("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_buku'];

	$id_buku=$_POST['id_buku'];
	$judul=$_POST['judul'];
	$pengarang=$_POST['pengarang'];
    $penerbit=$_POST['penerbit'];
	
	$result = mysqli_query($conn, 
	"UPDATE buku SET id_buku='$id_buku',judul='$judul',pengarang='$pengarang',penerbit='$penerbit' 
	WHERE id_buku=$id");
	
	header("Location: index.php");
}
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Buku</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_buku = $user_data['id_buku'];
	$judul = $user_data['judul'];
	$pengarang = $user_data['pengarang'];
	$penerbit = $user_data['penerbit'];
}
?>
<html>
<?php include('header1.php');?>
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="update_buku.php">
		<table border="0">
			<tr> 
				<td>ID Buku</td>
				<td><input type="text" name="id_buku" value=<?php echo $id_buku;?>></td>
			</tr>
			<tr> 
				<td>Judul</td>
				<td><input type="text" name="judul" value=<?php echo $judul;?>></td>
			</tr>
			<tr> 
				<td>Pengarang</td>
				<td><input type="text" name="pengarang" value=<?php echo $pengarang;?>></td>
			</tr>
            <tr> 
				<td>Penerbit</td>
				<td><input type="text" name="penerbit" value=<?php echo $penerbit;?>></td>
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