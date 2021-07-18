<?php

$dsn = 'mysql:dbname=dbpegawai;host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,TRUE);

    // echo 'Alhamdulillah Sukses Koneksi DB';
} catch (PDOException $e) {
    echo 'Gagal Koneksi '.$e->getMessage();
}