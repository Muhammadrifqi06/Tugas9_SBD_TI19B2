<?php
    include 'config.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM buku WHERE id_buku = '{$id}'");

    header('location: index.php');

?>