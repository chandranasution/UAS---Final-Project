<?php

$dbhost = "localhost";
$dbuser = "id16962634_uas";
$dbpass = "lX8iA8/TvVDk/\QT";
$dbname = "id16962634_finalproject";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Gagal terkoneksi!");
}
