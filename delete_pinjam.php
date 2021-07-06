<?php
    include 'config.php';
    $id = $_GET['id'];

    $result =  mysqli_query($conn, "DELETE FROM peminjaman WHERE id_pinjam = '{$id}'");
    header('location: index.php');

?>