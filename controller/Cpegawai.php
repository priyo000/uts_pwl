<?php 

require_once '../dbConnected.php';
require_once '../model/Mpegawai.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$agama = $_POST['agama'];
$divisi = $_POST['divisi'];
$foto = $_POST['foto'];
$event = $_POST['proses'];
// var_dump($event);
$data = [
    $nip,
    $nama,
    $email,
    $agama,
    $divisi,
    $foto,
];
// var_dump($data);
$obj = new MPegawai();
switch ($event) {
    case 'simpan':
        $obj->insertPegawai($data);
        break;
    case 'edit':
        $data[] = $_POST['id'];
        // var_dump($data);
        $obj->editPegawai($data);
        break;
    case 'hapus':
        $id[] = $_POST['id'];
        $obj->deletePegawai($id);
        break;
    default:
        header('Location:http://localhost:4433/prauts/index.php?hal=pegawai');
        break;
}

header('Location:http://localhost:4433/prauts/index.php?hal=pegawai');