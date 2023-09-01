<?php
$servername = "localhost"; //name server -> biasanya localhost
$database = "practice"; // nama database -> bisa disesuaikan
$username = "root"; // username xampp biasanya pake root
$password = ""; // password xampp / data base -> biasanya kosong

// membuat koneksi ke database

$connect = mysqli_connect($servername, $username, $password, $database);

// test koneksi

if (!$connect) { // jika koneksi maka akan keluar 
    die("Connection failed: " . mysqli_connect_error());
}