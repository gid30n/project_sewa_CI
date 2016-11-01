<body class="grey lighten-3">	
	<nav class="white">
		<div class="nav-wrapper">
			<div class="container">
				<a href="<?php echo base_url();?>" class="brand-logo teal-text"><i class="material-icons">store</i><?php if(!empty($business_profile['brand_name'])){ echo ucfirst($business_profile['brand_name']); }else{ echo "Sewania"; };?></a>
				<ul class="right hide-on-med-and-down">
					<li class="teal-text"><?php echo $user['first_name']." ".$user['last_name'];?></li>
					<li><img src="<?php $data_user = $this->profile_model->get_user($this->session->userdata('user')['id_user']); echo base_url().$data_user['avatar']; ?>" class="responsive-img circle brand-logo" alt="" width="50px"></li>					
				</ul>							
			</div>
			
			<a href="#" data-activates="mobile-demo" class="button-collapse grey-text"><i class="material-icons">menu</i></a>						
			<!-- navbar for mobile -->
			<ul class="side-nav teal lighten-1" id="mobile-demo">				
				<li><h5 class="center-align"><b><?php if(!empty($business_profile['brand_name'])){ echo ucfirst($business_profile['brand_name']); }else{ echo "Sewania"; };?></b></h5></li>
				<div class="divider"></div>
				<li class="white"><a href="#!" class="teal-text"><b>Dashboard</b></a></li>
				<?php 					
					$level = $this->session->userdata('user');
					if($level['admin'] === '-9'){
						echo '<li class="active"><a href="'.base_url("dashboard").'" class="white-text waves-effect"><i class="material-icons left white-text">home</i>My Profile</a></li>';
					}else{
						echo '<li class="active"><a href="'.base_url("dashboard-cus").'" class="white-text waves-effect"><i class="material-icons left white-text">home</i>My Profile</a></li>';
					}
				?>				
				<li><a href="<?php echo base_url("logout"); ?>" class="white-text waves-effect"><i class="material-icons left white-text">close</i>Logout</a></li>
				<div class="divider"></div>
				<li class="white"><a href="#!" class="teal-text"><b>Services</b></a></li>
			<ul>	
			<div class="row">							
				<ul class="collapsible left col s12" data-collapsible="accordion">
					<li>
						<div class="collapsible-header active ,m"><i class="material-icons">shopping_cart</i>Pesan</div>
						<div class="collapsible-body">
							<br>
							<a href="#!" class="waves-effect"><i class="material-icons left">shopping_cart</i>Pesan<span class="new badge">99</span></a>			
							<a href="#!" class="collection-item waves-effect"><i class="material-icons left">history</i>History Pesanan<span class="new badge teal white-text" data-badge-caption="recent">1337</span></a>
							<br>
						</div>
					</li>						
				</ul>
				<?php 
					if ($level['admin'] === "-9" || $level['admin'] === '1') {
				?>

				<ul class="collapsible left col s12" data-collapsible="accordion">
					<li>
						<div class="collapsible-header"><i class="material-icons">beach_access</i>Peralatan Pesta</div>
						<div class="collapsible-body">
							<br>
							<a href="<?php echo base_url("peralatan/new-ads"); ?>" class="collection-item waves-effect"><i class="material-icons left">add</i>Tambah Peralatan Pesta</a>
							<a href="<?php echo base_url("peralatan"); ?>" class="collection-item waves-effect"><i class="material-icons left">beach_access</i>Peralatan Pesta<span class="new badge" data-badge-caption="item" id='count_peralatan'>400</span></a>
							<br>
						</div>
					</li>						
				</ul>
				<ul class="collapsible left col s12" data-collapsible="accordion">
					<li>
						<div class="collapsible-header"><i class="material-icons">work</i>Paket Pesta</div>
						<div class="collapsible-body">
							<br>
							<a href="<?php echo base_url("paket/new-ads"); ?>" class="collection-item waves-effect"><i class="material-icons left">add</i>Tambah Paket Pesta</a>
							<a href="<?php echo base_url("paket"); ?>" class="collection-item waves-effect"><i class="material-icons left">beach_access</i>Paket Pesta<span class="new badge" data-badge-caption="item" id='count_paket'>400</span></a>
							<br>
						</div>
					</li>						
				</ul>
				<?php
					}
				?>
			</div>																		
		</div>			
	</nav>
	<main>
		<div class="row">
			<div class="col s12 m3 left hide-on-med-and-down">
				<div class="card white">
					<div class="card-content">						
						<ul class="collapsible z-depth-0" data-collapsible="expandable">
							<li>
								<div class="collapsible-header active"><b>Dashboard</b></div>
								<div class="collapsible-body">									
									<ul class="collection with-header">
										<?php $level = $this->session->userdata('user'); 
											if($level['admin'] === "-9"){
												echo '<a href="'.base_url("dashboard").'" class="collection-item active waves-effect"><i class="material-icons left">home</i>My Profile</a>';
											}else{
												echo '<a href="'.base_url("dashboard-cus").'" class="collection-item active waves-effect"><i class="material-icons left">home</i>My Profile</a>';
											} 
										?>										
										<div class="divider"></div>
										<a href="<?php echo base_url("logout"); ?>" class="collection-item waves-effect"><i class="material-icons left">close</i>Logout</a>
									</ul>									
								</div>
							</li>
							<li>
								<div class="collapsible-header active"><b>Services</b></div>
								<div class="collapsible-body">
									<ul class="collection with-header">										
										<!-- <a href="#!" class="collection-item waves-effect"><i class="material-icons left">shopping_cart</i>Pesan<span class="new badge teal white-text">99</span></a> -->
										<ul class="collapsible z-depth-0" data-collapsible="accordion">
											<li>
												<div class="collapsible-header active"><i class="material-icons">shopping_cart</i>Pesan</div>
												<div class="collapsible-body">
													<?php 
														if ($level['admin'] === "0" || $level['admin'] === "1") {
													?>
														<a href="<?php echo base_url('dashboard-cus/order'); ?>" class="collection-item waves-effect"><i class="material-icons left">shopping_cart</i>Pesan<span class="new badge teal white-text">99</span></a>
														<a href="<?php echo base_url('dashboard-cus/order/history'); ?>" class="collection-item waves-effect"><i class="material-icons left">history</i>History Pesanan<span class="new badge teal white-text" data-badge-caption="recent">1337</span></a>
													<?php 
														}else{ 
													?>
														<a href="<?php echo base_url('dashboard/order'); ?>" class="collection-item waves-effect"><i class="material-icons left">shopping_cart</i>Pesan<span class="new badge teal white-text">99</span></a>
														<a href="<?php echo base_url('dashboard/order/history'); ?>" class="collection-item waves-effect"><i class="material-icons left">history</i>History Pesanan<span class="new badge teal white-text" data-badge-caption="recent">1337</span></a>
													<?php
														}
													?>
												</div>
											</li>											
										</ul>
										<?php 
											if ($level['admin'] === "-9" || $level['admin'] === "1") {
										?>										
											<ul class="collapsible z-depth-0" data-collapsible="accordion">
												<li>
													<div class="collapsible-header"><i class="material-icons">beach_access</i>Peralatan Pesta</div>
													<div class="collapsible-body">
														<a href="<?php echo base_url("peralatan/new-ads"); ?>" class="collection-item waves-effect"><i class="material-icons left">add</i>Tambah Peralatan Pesta</a>
														<a href="<?php echo base_url("peralatan"); ?>" class="collection-item waves-effect"><i class="material-icons left">beach_access</i>Peralatan Pesta<span class="new badge" data-badge-caption="item" id='count_peralatan'></span></a>
													</div>
												</li>											
											</ul>
											<ul class="collapsible z-depth-0" data-collapsible="accordion">
												<li>
													<div class="collapsible-header"><i class="material-icons">work</i>Paket Pesta</div>
													<div class="collapsible-body">
														<a href="<?php echo base_url("paket/new-ads"); ?>" class="collection-item waves-effect"><i class="material-icons left">add</i>Tambah Paket Pesta</a>
														<a href="<?php echo base_url("paket"); ?>" class="collection-item waves-effect"><i class="material-icons left">work</i>Paket Pesta<span class="new badge" data-badge-caption="paket" id='count_paket'></span></a>
													</div>
												</li>											
											</ul>
											<?php if ($level['admin'] === '-9') {?>
											<ul class="collapsible z-depth-0" data-collapsible="accordion">
												<li>
													<div class="collapsible-header"><i class="material-icons">record_voice_over</i>Konsultasi</div>
													<div class="collapsible-body">														
														<a href="<?php echo base_url("dashboard/konsultasi"); ?>" class="collection-item waves-effect"><i class="material-icons left">record_voice_over</i>Konsultasi Acara<span class="new badge" id='count_konsultasi'><?php echo $jum_new_konsultasi; ?></span></a>
														<a href="<?php echo base_url("dashboard/konsultasi/history"); ?>" class="collection-item waves-effect"><i class="material-icons left">history</i>Konsultasi Acara<span class="new badge" id='count_konsultasi'><?php echo $jum_history_konsultasi; ?></span></a>
													</div>
												</li>											
											</ul>
											<?php } ?>
										<?php
											}
										?>																				
									</ul>									
								</div>
							</li>
							<li>
								<div class="collapsible-header"><b>Other</b></div>
								<div class="collapsible-body">
									<ul class="collection with-header">
										<?php  
											if ($level['admin'] != "-9") {
												echo '<a href="#delete_account" class="collection-item modal-trigger waves-effect"><i class="material-icons left">close</i>Delete this account</a>';
											}else{
												echo '<a href="#nama_subs" class="collection-item modal-trigger waves-effect"><i class="material-icons left">add</i>Add Sub Category</a>';
												echo '<a href="#nama_super_subs" class="collection-item modal-trigger waves-effect"><i class="material-icons left">add</i>Add Super Sub Category</a>';
												echo '<a href="list_category" class="collection-item waves-effect"><i class="material-icons left">view_list</i>List All Category</a>';	
											}											
										?>										
									</ul>
								</div>
							</li>
						</ul>
					</div>					
				</div>
			</div>			
