<body class="grey lighten-3">	
	<nav class="white">
		<div class="nav-wrapper">
			<div class="container">
				<a href="#!" class="brand-logo teal-text"><i class="material-icons">store</i><?php if(!empty($business_profile['brand_name'])){ echo ucfirst($business_profile['brand_name']); }else{ echo "Sewania"; };?></a>
				<ul class="right hide-on-med-and-down">
					<li class="teal-text"><?php echo $user['first_name']." ".$user['last_name'];?></li>
					<li><img src="<?php echo base_url();?>assets/img/ava/1.png" class="responsive-img circle brand-logo" alt="" width="50px"></li>					
				</ul>							
			</div>

			<a href="#" data-activates="mobile-demo" class="button-collapse grey-text"><i class="material-icons">menu</i></a>						
			<!-- navbar for mobile -->
			<ul class="side-nav teal lighten-1" id="mobile-demo">				
				<li><h5 class="center-align"><b><?php if(!empty($business_profile['brand_name'])){ echo ucfirst($business_profile['brand_name']); }else{ echo "Sewania"; };?></b></h5></li>
				<div class="divider"></div>
				<li class="white"><a href="#!" class="teal-text"><b>Dashboard</b></a></li>
				<?php 
				$ses_admin = $this->session->userdata('user');
				if($ses_admin['admin']){
					?>
						<li class="active"><a href="<?php echo base_url();?>dashboard" class="white-text waves-effect"><i class="material-icons left white-text">home</i>My Profile</a></li>
					<?php
				}else{
					?>
						<li class="active"><a href="<?php echo base_url();?>dashboard-cus" class="white-text waves-effect"><i class="material-icons left white-text">home</i>My Profile</a></li>
					<?php
				}
				?>
				<li><a href="#!" class="white-text waves-effect"><i class="material-icons left white-text">close</i>Logout</a></li>
				<div class="divider"></div>
				<li class="white"><a href="#!" class="teal-text"><b>Services</b></a></li>				
				<li><a href="#!" class="white-text waves-effect"><i class="material-icons left white-text">shopping_cart</i>Pesan<span class="new badge">99</span></a></li>
				<li><a href="<?php echo base_url();?>peralatan" class="white-text waves-effect"><i class="material-icons left white-text">beach_access</i>Peralatan Pesta<span class="new badge" data-badge-caption="item">400</span></a></li>
				<li><a href="<?php echo base_url();?>paket" class="white-text waves-effect"><i class="material-icons left white-text">work</i>Paket Pesta<span class="new badge" data-badge-caption="paket">4</span></a></li>				
			</ul>
		</div>
	</nav>