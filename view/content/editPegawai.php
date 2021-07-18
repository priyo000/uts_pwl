<?php 

require_once '../../htdocs/prauts/model/Mpegawai.php';
$id = $_REQUEST['id'];

$arr_agama = ['islam', 'kristen', 'hindu', 'budha', 'katolik'];

$obj = new MPegawai();
$data = $obj->detailPegawai($id);
$divisi = $obj->getDivisi();

?>

<div class="row mt-3">
  <div class="col-md-9">
  <form action="../../prauts/controller/Cpegawai.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">NIP</label>
        <input type="number" class="form-control" id="nip" name="nip" value="<?= $data['nip']; ?>" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="<?= $data['email']; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Agama</label>
        <?php
        $no = 0;
            foreach($arr_agama as $diin){
                $check = ($data['agama'] == $diin) ? 'checked' : '';
                ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="agama" id="kondisi_<?= $no ?>" value="<?= $diin ?>" <?= $check ?>>
                        <label class="form-check-label" for="kondisi_<?= $no ?>">
                            <?= $diin?>
                        </label>
                    </div>
                <?php
                $no++;
            }
        ?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Divisi</label>
        <select class="custom-select" name="divisi" id="divisi">
            <option selected>-- Pilih Divisi --</option>
            <?php
                foreach($divisi as $val){
                    $selected = ($data['iddivisi'] == $val['id']) ? 'selected' : '';
                    ?>
                        <option value="<?= $val['id'] ?>" <?= $selected ?>> <?= $val['nama'] ?> </option>
                    <?php
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Foto</label>
        <input type="text" class="form-control" id="foto" value="<?= $data['foto'] ?>" name="foto">
    </div>
    <button type="submit" name="proses" value="edit" class="btn btn-success">Submit</button>
    </form>
  </div>