<?php 
// start session
session_start();

require_once '../dbConnected.php';
require_once '../model/Mmember.php';

$username = $_POST['username'];
$password = $_POST['password'];


$data = [
    $username, //? 1
    $password, //? 2
];
// var_dump($data);
$obj = new Mmember();
$result = $obj->check_login($data);
// var_dump($result);
if (!empty($result)) {
    # code...
    $_SESSION['MEMBER'] = $result;
    header('Location:http://localhost:4433/prauts/index.php?hal=pegawai');
} else {
    # code...
    header('Location:http://localhost:4433/prauts/index.php?hal=gagalLogin');
}
