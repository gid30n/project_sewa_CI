
		<div class="col s12 l9 right">
			<div class="card white">
				<div class="card-content teal-text">						
					<div class="row">
						<div class="col m6 s12">
							<h5>Selamat Datang : <?php echo $user['first_name']." ".$user['last_name'];?></h5>
							<p>last logged in at: <?php echo convert_date($user['last_login'],"d-m-Y g:i A")." ".date('T');?></p>
						</div>
						<div class="col m6 s12">																							
							<div class="col l4 12 s12 right">
								<div class="card blue-grey darken-1">
									<div class="card-content white-text center-align">											
										<i class="material-icons medium">apps</i>
										<div class="divider"></div>
										<p>ADS : <b id="total_iklan"></b></p>
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
