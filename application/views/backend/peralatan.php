<main>
		<div class="row">
			<div class="col s12 m3 left hide-on-med-and-down">
				<div class="card white">
					<div class="card-content teal-text">						
						<ul class="collapsible z-depth-0" data-collapsible="expandable">
							<li>
								<div class="collapsible-header active"><b>Dashboard</b></div>
								<div class="collapsible-body">									
									<ul class="collection with-header">
										<?php 
											$ses_admin = $this->session->userdata('user');
											if($ses_admin['admin']){
												?><a href="<?php echo base_url();?>dashboard" class="collection-item waves-effect"><i class="material-icons left">home</i>My Profile</a><?php
											}else{
												?><a href="<?php echo base_url();?>dashboard-cus" class="collection-item waves-effect"><i class="material-icons left">home</i>My Profile</a><?php
											}
										?>
										<div class="divider"></div>
										<a href="#!" class="collection-item waves-effect"><i class="material-icons left">close</i>Logout</a>
									</ul>									
								</div>
							</li>
							<li>
								<div class="collapsible-header active"><b>Services</b></div>
								<div class="collapsible-body">
									<ul class="collection with-header">
										<a href="#!" class="collection-item waves-effect"><i class="material-icons left">shopping_cart</i>Pesan<span class="new badge teal white-text">99</span></a>
										<a href="<?php echo base_url();?>peralatan" class="collection-item waves-effect active"><i class="material-icons left">beach_access</i>Peralatan Pesta<span class="new badge" data-badge-caption="item">400</span></a>
										<a href="<?php echo base_url();?>paket" class="collection-item waves-effect"><i class="material-icons left">work</i>Paket Pesta<span class="new badge" data-badge-caption="paket">4</span></a>
									</ul>									
								</div>
							</li>
							<li>
								<div class="collapsible-header"><b>Other</b></div>
								<div class="collapsible-body">
									<ul class="collection with-header">
										<a href="#delete_account" class="collection-item modal-trigger waves-effect"><i class="material-icons left">close</i>Delete this account</a>
									</ul>
								</div>
							</li>
						</ul>
					</div>					
				</div>
			</div>
			<div class="col s12 l9 right">
				<div class="card white">
					<div class="card-content teal-text">						
						<div class="row">
							<div class="col s12">
								<div class="col s12">
									<h5 class="left"><i class="material-icons">shopping_cart</i> Pesan</h5>									
									<a href="<?php echo base_url();?>peralatan/new-ads" class="btn right col l6 m6 s2"><i class="material-icons left">add</i><span class="hide-on-small-only">Tambah Perlengkapan Pesta</span></a>
								</div>								
								<hr class="hide-on-med-and-down">
								<div class="col m6 s12">
									<p>
      									<input type="checkbox" onclick="checkAll(this)" id="checkAll" />
      									<label for="checkAll">Select: All | </label>
      									<a class="waves-effect waves-light red btn"><i class="material-icons right">close</i>Delete</a>
    								</p>
								</div>
								<div class="col m6 s12">
									<div class="row">
										<div class="input-field">
											<div class="col m2 s3">
												<label for="filter">Search <br>
                      								<a title="clear filter" class="clear-filter" href="#clear">[clear]</a>
                      							</label>		
											</div>
											<div class="col m10 s9">
												<input type="text" id="search" name="search" placeholder="filter">
												<br class="hide-on-med-and-up">
												<br class="hide-on-med-and-up">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m4">
										<div class="card hoverable">
										    <div class="card-image waves-effect waves-block waves-light">
										      <img class="activator" src="assets/img/kategori/1.jpg">
										    </div>
										    <div class="card-content">
										      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
										      <p><span class="teal-text">Rating :<i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i></span>	</p>
										      <i class="tiny material-icons">room</i>Denpasar
										      <div class="divider"></div>
										      <span><b>Rp.15.000.000,00</b></span>																      
										    </div>
										    <div class="card-action">
											    <div class="row">
											    	<div class="col s12">
														<p>
													      <input type="checkbox" id="check"/>
													      <label for="check">Pilih</label>
													    </p>
													</div>
													<a href="#!" class="btn teal white-text col s5 btn-mar waves-effect"><i class="material-icons left">edit</i>Edit</a>
													<a href="#!" class="btn red white-text col s6 btn-mar waves-effect"><i class="material-icons left">delete</i>Delete</a>
													<a href="#!" class="btn orange white-text col s12 btn-mar waves-effect"><i class="material-icons left">share</i>Share</a>
											    </div>													    											
										    </div>
										    <div class="card-reveal">
										      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
										      <p>Here is some more information about this product that is only revealed once clicked on.</p>
										      <p><a href="ads-detail" class="btn waves-effect">Detail</a></p>
										    </div>
										  </div>
									</div>
									<div class="col s12 m4">
										<div class="card hoverable">
										    <div class="card-image waves-effect waves-block waves-light">
										      <img class="activator" src="assets/img/kategori/1.jpg">
										    </div>
										    <div class="card-content">
										      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
										      <p><span class="teal-text">Rating :<i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i></span>	</p>
										      <i class="tiny material-icons">room</i>Denpasar
										      <div class="divider"></div>
										      <span><b>Rp.15.000.000,00</b></span>																      
										    </div>
										    <div class="card-action">
											    <div class="row">
											    	<div class="col s12">
														<p>
													      <input type="checkbox" id="check2"/>
													      <label for="check2">Pilih</label>
													    </p>
													</div>
													<a href="#!" class="btn teal white-text col s5 btn-mar waves-effect"><i class="material-icons left">edit</i>Edit</a>
													<a href="#!" class="btn red white-text col s6 btn-mar waves-effect"><i class="material-icons left">delete</i>Delete</a>
													<a href="#!" class="btn orange white-text col s12 btn-mar waves-effect"><i class="material-icons left">share</i>Share</a>
											    </div>													    											
										    </div>
										    <div class="card-reveal">
										      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
										      <p>Here is some more information about this product that is only revealed once clicked on.</p>
										      <p><a href="ads-detail" class="btn waves-effect">Detail</a></p>
										    </div>
										  </div>
									</div>
									<div class="col s12 m4">
										<div class="card hoverable">
										    <div class="card-image waves-effect waves-block waves-light">
										      <img class="activator" src="assets/img/kategori/1.jpg">
										    </div>
										    <div class="card-content">
										      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
										      <p><span class="teal-text">Rating :<i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i></span>	</p>
										      <i class="tiny material-icons">room</i>Denpasar
										      <div class="divider"></div>
										      <span><b>Rp.15.000.000,00</b></span>																      
										    </div>
										    <div class="card-action">
											    <div class="row">
											    	<div class="col s12">
														<p>
													      <input type="checkbox" id="check1"/>
													      <label for="check1">Pilih</label>
													    </p>
													</div>
													<a href="#!" class="btn teal white-text col s5 btn-mar waves-effect"><i class="material-icons left">edit</i>Edit</a>
													<a href="#!" class="btn red white-text col s6 btn-mar waves-effect"><i class="material-icons left">delete</i>Delete</a>
													<a href="#!" class="btn orange white-text col s12 btn-mar waves-effect"><i class="material-icons left">share</i>Share</a>
											    </div>													    											
										    </div>
										    <div class="card-reveal">
										      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
										      <p>Here is some more information about this product that is only revealed once clicked on.</p>
										      <p><a href="ads-detail" class="btn waves-effect">Detail</a></p>
										    </div>
										  </div>
									</div>									
									<div class="col s12 center-align">
										<ul class="pagination">
											<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
											<li class="active teal"><a href="#!">1</a></li>
											<li class="waves-effect"><a href="#!">2</a></li>
											<li class="waves-effect"><a href="#!">3</a></li>
											<li class="waves-effect"><a href="#!">4</a></li>
											<li class="waves-effect"><a href="#!">5</a></li>
											<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</main>