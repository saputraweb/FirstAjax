<?php

$server = 'server';   //nama  server 
$user   = 'username'; //username server
$pass   = 'password'; //password server
$db     = 'database'; //Nama databases

//koneksi
mysql_connect( $server, $user, $pass );
mysql_select_db( $db );


?>