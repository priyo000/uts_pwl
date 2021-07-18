<?php 
$user = $_SESSION['MEMBER'];
// var_dump($user);
?>
<div class="row mt-3">
	<div class="col-md-9">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-4">
						<h5 class="card-title">Photo</h5>
						<img src="images/no-image-2.png" alt="" style="height: 20rem; width: 100%;">
                        <div class="mt-3">
                            <input type="file" id="formFile">
                        </div>
					</div>
					<div class="col-8">
						<div class="alert alert-success" style="width: 100%;"><center>Profile User</center></div>
						<form action="" method="">
							<div class="row">
	                            <div class="col-5">
	                                <div class="form-group">
	                                    <label for="">Nama</label>
	                                    <input type="text" class="form-control dt-ipt disabled-input disabled-input" value="<?= $member['fullname']; ?>" id="" placeholder="" disabled disabled>
	                                </div>
		                            <div class="form-group">
	                                    <label for="">Usernme</label>
	                                    <input type="text" class="form-control dt-ipt disabled-input" value="<?= $member['username']; ?>" placeholder="" disabled>
	                                </div>
		                            <div class="form-group">
	                                    <label for="">Role</label>
	                                    <input type="email" class="form-control dt-ipt disabled-input" value="<?= $member['role']; ?>" placeholder="" disabled>
	                                </div>
	                            </div>
								<!-- <div class="col-5"> -->
								<!-- </div> -->
	                            <div class="col-5">
									<div class="form-group">
	                                    <label for="">Password</label>
	                                    <input type="text" class="form-control dt-ipt disabled-input" value="" placeholder="" disabled>
	                                </div>
		                            <div class="form-group">
	                                    <label for="">Re Password</label>
	                                    <input type="text" class="form-control dt-ipt disabled-input" value="" placeholder="" disabled>
	                                </div>
			                        <div class="form-check">
	                                    <label class="form-check-label">
	                                    <input type="checkbox" class="form-check-input" id="chkData" >Ubah Password </label>
	                                </div>
	                                <button class="btn btn-success mt-2 display-0" id="save-data" onclick="return confirm('fitur belum tersedia')">Save</button>
		                        </div>
		                        <div class="col-5">
		                        </div>
	                        </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>