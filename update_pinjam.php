<?php

include("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_pinjam'];
	
	$id_pinjam=$_POST['id_pinjam'];
	$id_buku=$_POST['id_buku'];
	$id_mhsw=$_POST['id_mhsw'];
	$tgl_pinjam=$_POST['tgl_pinjam'];
    $tgl_kembali=$_POST['tgl_kembali'];

    $result = mysqli_query($conn, 
	"UPDATE peminjaman SET id_pinjam='$id_pinjam',id_buku='$id_buku',id_mhsw='$id_mhsw',tgl_pinjam='$tgl_pinjam',tgl_kembali='$tgl_kembali' 
	WHERE id_pinjam=$id");

	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
 
$result = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_pinjam=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_pinjam=$user_data['id_pinjam'];
	$id_buku=$user_data['id_buku'];
	$id_mhsw=$user_data['id_mhsw'];
	$tgl_pinjam=$user_data['tgl_pinjam'];
    $tgl_kembali=$user_data['tgl_kembali'];
}
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Transaksi</title>
</head>

<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_pinjam.php">
		<table border="0">
			<tr> 
				<td>ID Peminjaman</td>
				<td><input type="text" name="id_pinjam" value=<?php echo $id_pinjam;?>></td>
			</tr>
			<tr> 
				<td>ID Buku</td>
				<td><input type="text" name="id_buku" value=<?php echo $id_buku;?>></td>
			</tr>
			<tr> 
				<td>ID Mahasiswa</td>
				<td><input type="text" name="id_mhsw" value=<?php echo $id_mhsw;?>></td>
			</tr>
            <tr> 
				<td>Tanggal Peminjaman</td>
				<td><input type="text" name="tgl_pinjam" value=<?php echo $tgl_pinjam;?>></td>
			</tr>
			<tr> 
				<td>Tanggal Pengembalian</td>
				<td><input type="text" name="tgl_kembali" value=<?php echo $tgl_kembali;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html>