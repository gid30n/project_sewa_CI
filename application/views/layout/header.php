<body class="grey lighten-3">
	<!-- menu atas -->
	<div class="navbar-fixed">
	<nav class="white">
		<div class="nav-wrapper">
			<div class="container">
				<a href="<?php echo base_url();?>" class="brand-logo">
					<div class="row valign-wrapper">					
						<img src="<?php echo base_url();?>assets/img/logo/logo2.png" class="responsive-img left valign" width="200px" alt=""><!-- <h5 class="grey-text"><b>SEWA</b>NIA</h5>					 -->
					</div>				
				</a>
				<!-- Detection for user loged -->
				<?php if(!$this->session->userdata('user')){ ?>
					<ul class="right hide-on-med-and-down">
						<li><a href="<?php echo base_url();?>login" class="grey-text waves-effect">Login</a></li>
						<li><a href="<?php echo base_url();?>signup" class="grey-text waves-effect">Signup</a></li>
						<li><a href="<?php echo base_url();?>signup-patner" class="btn waves-effect white-text">Jadi Partner Kami</a></li>					
					</ul>	
				<?php }else{ ?>
					<ul class="right hide-on-med-and-down">
						<li><a href="<?php echo base_url(); ?>carts" class="grey-text waves-effect"><i class="material-icons left">shopping_cart</i>Order<span class="badge teal circle white-text"><?php if(!empty($this->cartsewania->total_items())){ echo $this->cartsewania->total_items(); }else{ echo "0"; };?></span></a></li>							
						<li><a href="
							<?php if ($user['admin'] === "0"){
								echo base_url('dashboard-cus');
							}else{
								echo base_url('dashboard');
							}?>" class="grey-text waves-effect"><img src="
								<?php $data_user = $this->profile_model->get_user($this->session->userdata('user')['id_user']);
									if ($data_user['admin'] !== '-9'){
										echo base_url().$data_user['avatar']; 
									}else{
										echo base_url('assets/img/ava/1.png');
									}									
								?>" class="left responsive-img circle" width="60px"> <?php echo $user['first_name']." ".$user['last_name']; ?></a></li>						
					</ul>	
				<?php } ?>
			</div>
			
			<!-- activate side-bav in mobile view -->
			<a href="#" data-activates="mobile-demo" class="button-collapse grey-text"><i class="material-icons">menu</i></a>			
			<!-- navbar for mobile -->
			<ul class="side-nav teal lighten-1" id="mobile-demo">
				<li><center><img src="<?php echo base_url();?>assets/img/logo/logo-w.png" class="responsive-img" width="150px" alt=""></center></li>
				<li><h5 class="center-align"><b>SEWA</b>NIA</h5></li>
				<hr>
				<!-- Detection for user loged -->
				<?php 
					if(!$this->session->userdata('user')){ ?>
						<li><a href="<?php echo base_url();?>login" class="white-text waves-effect">Login</a></li>
						<li><a href="<?php echo base_url();?>signup" class="white-text waves-effect">Signup</a></li>
						<li><a href="<?php echo base_url();?>signup-patner" class="white-text waves-effect">Jadi Partner Kami</a></li>
				<?php }else{ ?>
					<li><a href="<?php echo base_url(); ?>cart" class="white-text waves-effect"><i class="material-icons left white-text">shopping_cart</i>Order<span class="badge teal circle white-text">99</span></a></li>							
					<li><a href="<?php echo base_url();?>dashboard" class="white-text waves-effect"><img src="
						<?php $data_user = $this->profile_model->get_user($this->session->userdata('user')['id_user']); 
							if ($data_user['admin'] !== '-9'){
								echo base_url().$data_user['avatar']; 
							}else{
								echo base_url('assets/img/ava/1.png');
							}		
						?>" class="left responsive-img circle" width="50px" style="margin-right:10px"><?php echo $user['first_name']." ".$user['last_name']; ?></a></li>						
				<?php } ?>
			</ul>
		</div>
	</nav>
	</div>
	<!-- end menu atas -->