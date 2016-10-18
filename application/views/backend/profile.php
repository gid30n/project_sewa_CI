
		<div class="col s12 l9 right">
			<div class="card white">
				<div class="card-content teal-text">						
					<div class="row">
						<div class="col m6 s12">
							<h5>Selamat Datang : <?php echo $user['first_name']." ".$user['last_name'];?></h5>
							<p>last logged in at: <?php echo convert_date($user['last_login'],"d-m-Y g:i A")." ".date('T');?></p>
						</div>
						<div class="col m6 s12">								
							<div class="col l4 12 s12">
								<div class="card blue-grey darken-1">
									<div class="card-content white-text center-align">											
										<i class="material-icons medium">remove_red_eye</i>
										<div class="divider"></div>
										<p>Visits : <b>3232</b></p>
									</div>										
								</div>
							</div>								
							<div class="col l4 12 s12">
								<div class="card blue-grey darken-1">
									<div class="card-content white-text center-align">											
										<i class="material-icons medium">apps</i>
										<div class="divider"></div>
										<p>ADS : <b>26</b></p>
									</div>										
								</div>
							</div>								
							<div class="col l4 12 s12">
								<div class="card blue-grey darken-1">
									<div class="card-content white-text center-align">	
										<i class="material-icons medium">people</i>
										<div class="divider"></div>
										<p>Fav : <b>1337</b></p>
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
						<li>
							<div class="collapsible-header active"><b>Profil Bisnis</b></div>
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
													<input type="text" id="brand_name" class="validate" required="" name="brand_name" placeholder="Sewania">
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
													<textarea name="jenis_service" id="jenis_service" class="materialize-textarea" placeholder="Masukkan jenis services yang anda berikan"></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<div class="col m3 s12">
													<label for="des_usaha" class="teal-text">Deskripsi Usaha</sup></label>										
												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">
													<textarea name="des_usaha" id="des_usaha" class="materialize-textarea" placeholder="Masukkan deskripsi usaha anda"></textarea>
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
													<input type="text" id="alamat_usaha" class="validate" required="" name="alamat_usaha" placeholder="Jln. Bla bla">
												</div>								
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<div class="col m3 s12">
													<label for="provinsi" class="teal-text">Provinsi</label>
													<br class="hide-on-med-and-up">
													<br class="hide-on-med-and-up">
												</div>
												<div class="col m9 s12">
													<select name="provinsi">
														<option value="" disabled selected>--- Pilih Provinsi ---</option>
														<option value="1">Option 1</option>
														<option value="2">Option 2</option>
														<option value="3">Option 3</option>
													</select>
												</div>								
											</div>
										</div>
										<div class="row">
											<div class="input-field">
												<div class="col m3 s12">
													<label for="kabupaten" class="teal-text">Kabupaten</label>
													<br class="hide-on-med-and-up">
													<br class="hide-on-med-and-up">
												</div>
												<div class="col m9 s12">
													<select name="kabupaten">
														<option value="" disabled selected>--- Pilih Kabupaten ---</option>
														<option value="1">Option 1</option>
														<option value="2">Option 2</option>
														<option value="3">Option 3</option>
													</select>
												</div>								
											</div>
										</div>
										<div class="row">
											<div class="input-field">							
												<div class="col m3 s12">
													<label for="tlp_usaha" class="teal-text">Tlp Usaha</label>
												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">
													<input type="text" id="tlp_usaha" class="validate" required="" name="tlp_usaha" placeholder="08111111111">																	
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
													<input type="text" id="first_name" class="validate" required="" name="first_name" placeholder="John">									
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
													<input type="text" id="last_name" class="validate" required="" name="last_name" placeholder="Smith">																	
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
													<input type="email" id="acc_email" class="validate" required="" name="acc_email" placeholder="johnsmith@email.com">																		
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
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta cupiditate iure suscipit nostrum nulla doloribus enim molestias ipsam ratione error, harum, facere rerum ipsum at dolorum! Nisi rem obcaecati totam.
							</div>
						</li>
					</ul>	
				</div>					
			</div>
		</div>
	</div>
</main>