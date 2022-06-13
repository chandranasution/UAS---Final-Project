<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "finalproject";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Gagal terkoneksi!");
}
