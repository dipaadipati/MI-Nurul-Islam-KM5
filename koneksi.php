<?php 
 
$conn = mysqli_connect("localhost","root","","nurulislam");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>