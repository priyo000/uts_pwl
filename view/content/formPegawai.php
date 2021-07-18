<?php 
  require_once '../../htdocs/prauts/model/Mpegawai.php';
  $obj = new MPegawai();
  $divisi = $obj->getDivisi();
?>

<div class="row mt-3">
  <div class="col-md-9">
    <form action="../../prauts/controller/Cpegawai.php" method="POST">
      <div class="form-group">
          <label for="exampleInputEmail1">NIP</label>
          <input type="number" class="form-control" id="nip" name="nip" value="">
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="">
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control" name="email" id="email" value="">
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Agama</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="agama" id="exampleRadios1" value="islam" checked>
          <label class="form-check-label" for="exampleRadios1">
            Islam
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="agama" id="exampleRadios2" value="kristen">
          <label class="form-check-label" for="exampleRadios2">
            Kristen
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="agama" id="exampleRadios3" value="hindu">
          <label class="form-check-label" for="exampleRadios3">
            Hindu
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="agama" id="exampleRadios4" value="katolik">
          <label class="form-check-label" for="exampleRadios4">
            Katolik
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="agama" id="exampleRadios5" value="budha">
          <label class="form-check-label" for="exampleRadios5">
            Budha
          </label>
        </div>
      </div>
      <div class="form-group">
        <label for="divisi">Example select</label>
        <select class="form-control" name="divisi" id="divisi">
          <option selected>-- Pilih Divisi --</option>
          <?php 
            foreach($divisi as $val){
              ?>
                <option value="<?= $val['id'] ?>"> <?= $val['nama'] ?> </option>
              <?php
            }
          ?>
          <!-- <option>1</option> -->
        </select>
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">Foto</label>
          <input type="text" class="form-control" id="nama" name="foto" value="">
      </div>
      <button type="submit" name="proses" value="simpan" class="btn btn-success">Submit</button>
    </form>
  </div>