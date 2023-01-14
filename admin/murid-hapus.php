<?php
include('../koneksi.php');
if(isset($_GET['id'])){
    mysqli_query($conn, "DELETE FROM murid WHERE id = " . $_GET['id']);
    header("Location: murid.php");
}