
		<div class="col s12 l9 right">
			<div class="card white">
				<div class="card-content teal-text">						
					<div class="row">
						<div class="col m6 s12">
							<h5>Selamat Datang : <?php echo $user['first_name']." ".$user['last_name'];?></h5>
							<p>last used in at: <?php echo convert_date($user['last_login'],"d-m-Y g:i A")." ".date('T');?></p>
						</div>
						<div class="col m6 s12">														
							<div class="col l4 12 s12 right">
								<div class="card blue-grey darken-1">
									<div class="card-content white-text center-align">											
										<i class="material-icons medium">apps</i>
										<div class="divider"></div>
										<p>ADS : <b id="total_iklan">26</b></p>
									</div>										
								</div>
							</div>															
						</div>
					</div>
				</div>					
			</div>
		</div>
		<div class="col s12 l9 right">
			<div class="card white">
				<div class="card-content teal-text">
					<ul class="collapsible z-depth-0" data-collapsible="expandable">
					<?php if($user['admin'] === "1"){ ?>						
						<li>
							<div class="collapsible-header"><b>Profil Bisnis</b></div>
							<div class="collapsible-body">
								<div class="container">
									<form action="">
										<div class="row">
											<div class="input-field">
												<div class="col m3 s12">
													<label for="brand_name" class="teal-text">Nama Brand</label>									
												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">
													<input type="text" id="brand_name" class="validate" required="" name="brand_name" placeholder="Sewania" value="<?php echo $business_profile['brand_name'];?>">
												</div>								
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<div class="col m3 s12">
													<label for="jenis_service" class="teal-text">Jenis Jasa</label>																		
												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">
													<textarea name="jenis_service" id="jenis_service" class="materialize-textarea" placeholder="Masukkan jenis services yang anda berikan"><?php echo $business_profile['type_service'];?></textarea>
												</div>
											</div>
										</div>
										<div class="row">
										<?php require_once 'tinymce.php';?>
											<div class="input-field">
												<div class="col m3 s12">
													<label for="des_usaha" class="teal-text">Deskripsi Usaha</sup></label>										
												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">
													<textarea name="des_usaha" id="des_usaha" class="materialize-textarea" placeholder="Masukkan deskripsi usaha anda"><?php echo $business_profile['description'];?></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<div class="col m3 s12">
													<label for="alamat_usaha" class="teal-text">Alamat Usaha</label>									
												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">
													<input type="text" id="alamat_usaha" class="validate" required="" name="alamat_usaha" placeholder="Jln. Bla bla" value="<?php echo $business_profile['address'];?>">
												</div>								
											</div>
										</div>										
										<div class="row">
											<button type="submit" class="btn waves-effect right">Update</button>
										</div>
									</form>
								</div>									
							</div>
						</li>
						<?php } ?>
						<li>
							<div class="collapsible-header"><b>Akun Detail</b></div>
							<div class="collapsible-body">
								<div class="container">
									<form action="">
										<div class="row">
											<div class="input-field">
												<div class="col m3 s12">
													<label for="first_name" class="teal-text">Nama Depan</label>																	
												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">	
													<input type="text" id="first_name" class="validate" required="" name="first_name" placeholder="John" value="<?php echo $user['first_name']; ?>">									
												</div>
											</div>
										</div>
										<div class="row">
											<div class="input-field">							
												<div class="col m3 s12">
													<label for="last_name" class="teal-text">Nama Belakang</label>
												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">
													<input type="text" id="last_name" class="validate" required="" name="last_name" placeholder="Smith" value="<?php echo $user['last_name']; ?>">																	
												</div>
											</div>
										</div>											
										<div class="row">
											<div class="input-field">
												<div class="col m3 s12">
													<label for="acc_email" class="teal-text">Email</label>									
												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">
													<input type="email" id="acc_email" class="validate" required="" name="acc_email" placeholder="johnsmith@email.com" value="<?php echo $user['email']; ?>">																		
												</div>
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<div class="col m3 s12">
													<label for="old_acc_pass" class="teal-text">Old Password <sup class="red-text">*</sup></label>									

												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">
													<input type="password" id="old_acc_pass" class="validate" required="" name="old_acc_pass" placeholder="************">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<div class="col m3 s12">
													<label for="acc_pass" class="teal-text">New Password <sup class="red-text">*</sup></label>									

												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">
													<input type="password" id="acc_pass" class="validate" required="" name="acc_pass" placeholder="************">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<div class="col m3 s12">
													<label for="re-acc_pass" class="teal-text">New Re-Password <sup class="red-text">*</sup></label>					
												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">
													<input type="password" id="re-acc_pass" class="validate" required="" name="re-acc_pass" placeholder="************">
													<span class="grey-text"><sup class="red-text">*</sup> Password at least have 5 character</span>
												</div>
											</div>								
										</div>
										<div class="row">
											<button type="submit" class="btn waves-effect right">Update</button>
										</div>
									</form>
								</div>																	
							</div>
						</li>
						<li>
							<div class="collapsible-header"><b>Pengaturan</b></div>
							<div class="collapsible-body">
								<br><br>
								<form action="" method="POST">
									<div class="row">
										<div class="input-field">
											<div class="col m3 s12">
												<label for="re-acc_pass" class="teal-text">Gambar Profile</label>					
											</div>
											<div class="col m9 s12">
												<br class="hide-on-med-and-up">
												<div class="file-field input-field">
											      <div class="btn">
											        <span>File</span>
											        <input type="file">
											      </div>
											      <div class="file-path-wrapper">
											        <input class="file-path validate" type="text">
											      </div>
											    </div>
											</div>
										</div>								
									</div>
									<p>
								      <input type="checkbox" id="subscribe" />
								      <label for="subscribe">Subscribe</label>
								      <button class="btn waves-effect right">Update</button>
								    </p>
								</form>
							</div>
						</li>
					</ul>	
				</div>					
			</div>
		</div>
	</div>
</main>