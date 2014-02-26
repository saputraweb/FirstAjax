<?php

$server = 'namaserver';   //nama  server 
$user   = 'user'; //username server
$pass   = 'password'; //password server
$db     = 'database'; //Nama databases

//koneksi
mysql_connect( $server, $user, $pass );
mysql_select_db( $db );

$nip = $_GET['q'];
if ( $nip ) {
	$query =  mysql_query("select alamat from karyawan where nip = $nip");
	while ( $q = mysql_fetch_array( $query )) {
		echo $q['alamat'];
	}
}

?>