<?php
    include 'config.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id_mhsw = '{$id}'");

    header('location: index.php');

?>