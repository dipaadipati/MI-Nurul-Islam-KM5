<?php
include('../koneksi.php');
if(isset($_GET['id'])){
    mysqli_query($conn, "DELETE FROM pelajaran WHERE id = " . $_GET['id']);
    header("Location: pelajaran.php");
}