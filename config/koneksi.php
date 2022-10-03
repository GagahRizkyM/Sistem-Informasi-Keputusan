<?php
session_start();

$koneksi = mysqli_connect("localhost", "root", "", "db_kinerjaperawat");
if(!$koneksi) {
	echo "Koneksi Error!";
}
?>