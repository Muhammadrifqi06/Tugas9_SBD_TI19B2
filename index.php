<?php include('config.php');?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Sistem Peminjaman Perpustakaan</title>
</head>
<?php include('header.php');?>

    <h3>TABEL BUKU</h3>
    <a href="add_buku.php">MENAMBAH DATA</a><br/><br/>
    <table width='55%' border=1>
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  buku';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><center><?php echo $row['id_buku']?></center></td>
                <td><?php echo $row['judul']?></td>
                <td><center><?php echo $row['pengarang']?></center></td>
                <td><center><?php echo $row['penerbit']?></center></td>
                <td><a href="edit_buku.php?id=<?= $row['id_buku']; ?>"><button>UBAH</button></a> |
                    <a href="hapus.php?id=<?= $row['id_buku']; ?>"><button>HAPUS</button></a>
                </td>
            </tr>
        </tbody>
        <?php 
        }
        ?>
    </table>
    <h3>TABEL MAHASISWA</h3>
    <a href="add_mahasiswa.php">MENAMBAH DATA</a><br/><br/>
    <table width='55%' border=1>
        <thead>
            <tr>
                <th>ID Mahasiswa</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Kelas</th>  
                <th>Aksi</th>                  
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  mahasiswa';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><center><?php echo $row['id_mhsw']?></center></td>
                <td><?php echo $row['nama_mhsw']?></td>
                <td><?php echo $row['nim_mhsw']?></td>
                <td><?php echo $row['kelas_mhsw']?></td>
                <td><a href="edit_mahasiswa.php?id=<?= $row['id_mhsw']; ?>"><button>UBAH</button></a> |
                    <a href="hapus.php?id=<?= $row['id_mhsw']; ?>"><button>HAPUS</button></a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <h3>TABEL PEMINJAMAN</h3>
    <a href="add_pinjam.php">MENAMBAH DATA</a><br/><br/>
    <table width='65%' border=1>
        <thead>
            <tr>
                <th>ID Peminjaman</th>
                <th>ID Buku</th>
                <th>ID Mahasiswa</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include 'config.php';
        $sql = 'SELECT * FROM  peminjaman';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><center><?php echo $row['id_pinjam']?></center></td>
                <td><center><?php echo $row['id_buku']?></center></td>
                <td><center><?php echo $row['id_mhsw']?></center></td>
                <td><center><?php echo $row['tgl_pinjam']?></center></td>
                <td><center><?php echo $row['tgl_kembali']?></center></td>
                <td><a href="edit_pinjam.php?id=<?= $row['id_pinjam']; ?>"><button>UBAH</button></a> |
                    <a href="hapus.php?id=<?= $row['id_pinjam']; ?>"><button>HAPUS</button></a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
        <?php
        
        ?>
    </table>
    <?php include('footer.php');?>