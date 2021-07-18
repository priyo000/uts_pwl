<?php

  require_once '../../htdocs/prauts/model/Mpegawai.php';

  $obj = new MPegawai();
  $data = $obj->getDataPegawai(); // get data pegawai
  // var_dump($member['role']);
?>

<div class="row mt-3">
  <div class="col-md-9">
      <?php 
        if (isset($member)) {
          # code...
          ?>
            <a class="btn btn-success mb-3" href="index.php?hal=formPegawai">Tambah</a>
          <?php
        }
      ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NIP</th>
            <th scope="col">Email</th>
            <th scope="col">Agama</th>
            <th scope="col">Divisi</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          $no = 1;
          foreach($data as $val) {
            
            ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $val['nama']; ?></td>
                <td><?= $val['nip']; ?></td>
                <td><?= $val['email']; ?></td>
                <td><?= $val['agama'] ?></td>
                <td><?= $val['nama_divisi'] ?></td>
                <td>
                    <form action="../../prauts/controller/Cpegawai.php" method="POST">
                      <a href="index.php?hal=detailPegawai&id=<?= $val['id']; ?>" class="btn btn-info">Detail</a>
                      <?php 
                        $role = $member['role'];
                        if (isset($member)) {
                          # code...
                          ?>
                            <a href="index.php?hal=editPegawai&id=<?= $val['id']; ?>" class="btn btn-warning">Edit</a>
                          <?php
                          if ($role != 'staff') {
                            ?>
                              <button name="proses" value="hapus" onclick="return confirm('Anda Yakin Data diHapus?')" class="btn btn-danger">Hapus</button>
                            <?php
                          }
                          ?>
                            <input type="hidden" name="id" value="<?= $val['id']; ?>">
                          <?php
                        }
                      ?>
                    </form>
                </td>
              </tr>
            <?php
            $no++;
          }
        ?>
        </tbody>
      </table>
    </div>