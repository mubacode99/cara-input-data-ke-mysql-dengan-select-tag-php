<?php

$host="localhost";
$user="root";
$pass="";
$name="fcrud";


$koneksi = mysql_connect($host, $user, $pass);

$koneksidb= mysql_select_db($name);

if ($koneksidb) {

	echo "database tersedia";

}
else {
	echo "database tidak tersedia";
}





?>