<?php 
    // call model
    require_once '../../htdocs/prauts/model/Mpegawai.php';

    // get id request
    $id = $_REQUEST['id'];

    $obj = new MPegawai();
    $data = $obj->detailPegawai($id);

?>

<div class="row mt-3">
	<div class="col-md-9">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-4">
						<h5 class="card-title">Photo</h5>
						<img src="images/no-image-2.png" alt="" style="height: 20rem; width: 100%;">
                        <!-- <div class="mt-3">
                            <input type="file" id="formFile">
                        </div> -->
					</div>
					<div class="col-8">
						<div class="alert alert-success" style="width: 100%;"><center>Profile Pegawai</center></div>
						<form action="" method="">
							<div class="row">
	                            <div class="col-5">
	                                <div class="form-group">
	                                    <label for="">Nama</label>
	                                    <input type="text" class="form-control dt-ipt disabled-input disabled-input" value="<?= $data['nama']; ?>" id="" placeholder="" disabled disabled>
	                                </div>
	                                <div class="form-group">
	                                    <label for="">Email</label>
	                                    <input type="text" class="form-control dt-ipt disabled-input" value="<?= $data['email']; ?>" placeholder="" disabled>
	                                </div>
	                                <div class="form-group">
	                                    <label for="">Nomor HP</label>
	                                    <input type="number" class="form-control dt-ipt disabled-input" value="<?= $data['phone']; ?>" placeholder="" disabled>
	                                </div>
	                            </div>
	                            <div class="col-5">
		                            <div class="form-group">
	                                    <label for="">NIP</label>
	                                    <input type="text" class="form-control dt-ipt disabled-input" value="<?= $data['nip']; ?>" placeholder="" disabled>
	                                </div>
		                            <div class="form-group">
	                                    <label for="">Divisi</label>
	                                    <input type="text" class="form-control dt-ipt disabled-input" value="<?= $data['nama_divisi']; ?>" placeholder="" disabled>
	                                </div>
		                            <div class="form-group">
	                                    <label for="">Agama</label>
	                                    <input type="text" class="form-control dt-ipt disabled-input" value="<?= $data['agama']; ?>" placeholder="" disabled>
	                                </div>
		                        </div>
	                        </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>