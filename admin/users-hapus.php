<?php
include('../koneksi.php');
if(isset($_GET['id'])){
    mysqli_query($conn, "DELETE FROM users WHERE id = " . $_GET['id']);
    header("Location: users.php");
}