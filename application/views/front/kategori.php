<body class="grey lighten-3">
	<!-- menu atas -->
	<div class="navbar-fixed">
	<nav class="white">
		<div class="nav-wrapper">
			<div class="container">
				<a href="<?php echo base_url(); ?>" class="brand-logo">
					<div class="row valign-wrapper">					
						<img src="assets/img/logo/logo2.png" class="responsive-img left valign" width="200px" alt=""><!-- <h5 class="grey-text"><b>SEWA</b>NIA</h5>					 -->
					</div>				
				</a>
				<!-- Detection for user loged -->
				<?php if(!$this->session->userdata('user')){ ?>
					<ul class="right hide-on-med-and-down">
						<?php if (!empty($this->cartsewania->total_items())): ?>
							<li><a href="<?php echo base_url(); ?>carts" class="grey-text waves-effect"><i class="material-icons left">shopping_cart</i>Order<span class="badge teal circle white-text"><?php if(!empty($this->cartsewania->total_items())){ echo $this->cartsewania->total_items(); }else{ echo "0"; };?></span></a></li>
						<?php endif ?>						
						<li><a href="<?php echo base_url();?>login" class="grey-text waves-effect">Login</a></li>
						<!-- <li><a href="<?php echo base_url();?>signup" class="grey-text waves-effect">Signup</a></li> -->
						<li><a href="<?php echo base_url();?>signup-patner" class="btn waves-effect white-text">Jadi Partner Kami</a></li>					
					</ul>	
				<?php }else{ ?>
					<ul class="right hide-on-med-and-down">
						<?php if (!empty($this->cartsewania->total_items())): ?>
							<li><a href="<?php echo base_url(); ?>carts" class="grey-text waves-effect"><i class="material-icons left">shopping_cart</i>Order<span class="badge teal circle white-text"><?php if(!empty($this->cartsewania->total_items())){ echo $this->cartsewania->total_items(); }else{ echo "0"; };?></span></a></li>
						<?php endif ?>												
						<li><a href="
							<?php if ($user['admin'] === "0"){
								echo base_url('dashboard-cus');
							}else{
								echo base_url('dashboard');
							}?>" class="grey-text waves-effect"><img src="<?php echo base_url(); ?>assets/img/ava/1.png" class="left responsive-img circle" width="60px"> <?php echo $user['first_name']." ".$user['last_name']; ?></a></li>						
					</ul>	
				<?php } ?>	
			</div>
			
			<!-- activate side-bav in mobile view -->
			<a href="#" data-activates="mobile-demo" class="button-collapse grey-text"><i class="material-icons">menu</i></a>			
			<!-- navbar for mobile -->
			<ul class="side-nav teal lighten-1" id="mobile-demo">
				<li><center><img src="assets/img/logo/logo-w.png" class="responsive-img" width="150px" alt=""></center></li>
				<li><h5 class="center-align"><b>SEWA</b>NIA</h5></li>
				<hr>
				<!-- Detection for user loged -->
				<?php 
					if(!$this->session->userdata('user')){ ?>
						<?php if (!empty($this->cartsewania->total_items())): ?>
							<li><a href="<?php echo base_url(); ?>carts" class="white-text waves-effect">Order<span class="badge teal circle white-text"><?php if(!empty($this->cartsewania->total_items())){ echo $this->cartsewania->total_items(); }else{ echo "0"; };?></span></a></li>
						<?php endif ?>						
						<li><a href="<?php echo base_url();?>login" class="white-text waves-effect">Login</a></li>
						<!-- <li><a href="<?php echo base_url();?>signup" class="white-text waves-effect">Signup</a></li> -->
						<li><a href="<?php echo base_url();?>signup-patner" class="white-text waves-effect">Jadi Partner Kami</a></li>
				<?php }else{ ?>
					<?php if (!empty($this->cartsewania->total_items())): ?>
							<li><a href="<?php echo base_url(); ?>carts" class="white-text waves-effect">Order<span class="badge teal circle white-text"><?php if(!empty($this->cartsewania->total_items())){ echo $this->cartsewania->total_items(); }else{ echo "0"; };?></span></a></li>
						<?php endif ?>													
					<li><a href="<?php echo base_url();?>dashboard" class="white-text waves-effect"><img src="<?php echo base_url(); ?>assets/img/ava/1.png" class="left responsive-img circle" width="50px" style="margin-right:10px"><?php echo $user['first_name']." ".$user['last_name']; ?></a></li>						
				<?php } ?>
			</ul>

			<a href="#" data-activates="mobile-demo1" class="button-collapse1 grey-text right"><i class="material-icons hide-on-large-only">search</i></a>			
			<!-- navbar for mobile -->
			<div class="side-nav teal lighten-1" id="mobile-demo1">
				<nav>
				    <div class="nav-wrapper">
				      <form>
				        <div class="input-field teal lighten-1">
				          <input id="search" type="search" required placeholder="Pencarian" name="cari">
				          <label for="search"><i class="material-icons">search</i></label>
				          <i class="material-icons">close</i>
				        </div>
				        <!-- <div class="input-field center">
				        	<select name="kategori">
						      <option value="" disabled selected>--- Pilih Kategori ---</option>
						      <option value="1">Option 1</option>
						      <option value="2">Option 2</option>
						      <option value="3">Option 3</option>
						    </select>
				        </div> -->
				        <center><button type="submit" class="btn btn-large white teal-text waves-effect">Search</button></center>				        
				      </form>
				    </div>
				</nav>
			</div>			
		</div>		
	</nav>	
	</div>
	<!-- end menu atas -->	
	<main>
		<div class="container">
			<div class="row">
				<div class="fixed-action-btn hide-on-med-and-down" style="bottom: 45px; right: 24px;">
				    <a class="btn-floating btn-large teal modal-trigger" href="#cari">
				      <i class="large material-icons">search</i>
				    </a>			    
				 </div>
				<div class="col s12">
					<ul class="tabs">
						<li class="tab col m6 s12"><a class="active teal-text onta" href="#paket">Paket Event</a></li>
						<li class="tab col m6 s12"><a href="#perlengkapan" class="teal-text onta">Perlengkapan Pesta</a></li>					
					</ul>
				</div>
				<div id="paket" class="col s12">
					<h4 class="teal-text center-align"><b>Kategori</b></h4>
					<div class="box white">
						<ul class="collection">
							<a href="<?php echo base_url("kategori/paket-pernikahan"); ?>" class="collection-item col m6 s12 waves-effect teal-text"><i class="material-icons left">wc</i>Paket Pernikahan</a>
							<a href="<?php echo base_url("kategori/paket-ulang-tahun"); ?>" class="collection-item col m6 s12 waves-effect teal-text"><i class="material-icons left">cake</i>Paket Ulang Tahun Anak</a>
							<a href="<?php echo base_url("kategori/paket-ulang-tahun"); ?>" class="collection-item col m6 s12 waves-effect teal-text"><i class="material-icons left">cake</i>Paket Ulang Tahun Remaja</a>
							<a href="<?php echo base_url("kategori/paket-acara-adat-bali"); ?>" class="collection-item col m6 s12 waves-effect teal-text"><i class="material-icons left">local_activity</i>Paket Acara Adat Bali</a>
							<a href="<?php echo base_url("kategori/paket-dekorasi"); ?>" class="collection-item col m6 s12 waves-effect teal-text"><i class="material-icons left">color_lens</i>Paket Dekorasi</a>
							<a href="<?php echo base_url("kategori/paket-catering"); ?>" class="collection-item col m6 s12 waves-effect teal-text"><i class="material-icons left">restaurant</i>Paket Catering</a>
						</ul>
					</div>
					<h4 class="teal-text center-align"><b>TOP PAKET</b></h4>
					<div class="box col s12 white" id="top_paket">					
						
					</div>
				</div>
				<div id="perlengkapan" class="col s12">
					<h4 class="teal-text center-align"><b>Kategori</b></h4>
					<div class="box white">
						<ul class="collection">
						  <a href="<?php echo base_url("kategori/tenda"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/tent.png" class="left icon-kategori"> Tenda</a>
							<a href="<?php echo base_url("kategori/kursi"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/chair.png" class="left icon-kategori">Kursi</a>
							<a href="<?php echo base_url("kategori/meja"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/table.png" class="left icon-kategori">Meja</a>
							<a href="<?php echo base_url("kategori/sound-system"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/sound.png" class="left icon-kategori">Sound System</a>
							<a href="<?php echo base_url("kategori/podium-mimbar"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/stage.png" class="left icon-kategori">Podium/Mimbar</a>
							<a href="<?php echo base_url("kategori/lighting"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/light.png" class="left icon-kategori">Lighting</a>
							<a href="<?php echo base_url("kategori/standing-ac"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/ac.png" class="left icon-kategori">Pendingin</a>
							<a href="<?php echo base_url("kategori/alat-musik"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/music.png" class="left icon-kategori">Alat Musik</a>
							<a href="<?php echo base_url("kategori/rigging"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/riging.png" class="left icon-kategori">Riging</a>
							<a href="<?php echo base_url("kategori/alat-catering"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/eat.png" class="left icon-kategori">Alat Catering</a>
							<a href="<?php echo base_url("kategori/genset"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/genset.png" class="left icon-kategori">Genset</a>
							<a href="<?php echo base_url("kategori/flooring"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/floring.png" class="left icon-kategori">Panggung</a>
							<a href="<?php echo base_url("kategori/tv-screen"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/tv.png" class="left icon-kategori">Multimedia</a>
							<a href="<?php echo base_url("kategori/kendaraan-penganting"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/car.png" class="left icon-kategori">Kendaraan Pengantin</a>		
                            <a href="<?php echo base_url("kategori/dekorasi"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/decor.png" class="left icon-kategori">Dekorasi</a>	
                            <a href="<?php echo base_url("kategori/kartu-undangan"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/card.png" class="left icon-kategori">Kartu Undangan</a>	
                            <a href="<?php echo base_url("kategori/penghibur"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/hiburan.png" class="left icon-kategori">Penghibur</a>	
                            <a href="<?php echo base_url("kategori/tempat-acara"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/tempat.png" class="left icon-kategori">Tempat Acara</a>	
                            <a href="<?php echo base_url("kategori/make-up"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/makeup.png" class="left icon-kategori">Make Up</a>	
                            <a href="<?php echo base_url("kategori/pakaian-pengantin"); ?>" class="collection-item col l4 m6 s12 wave-effect teal-text"><img src="assets/img/Icon/dres.png" class="left icon-kategori">Pakaian Pengantin</a>
						</ul>
					</div>
					<h4 class="teal-text center-align"><b>TOP PERLENGKAPAN</b></h4>
					<div class="box col s12 white" id="top_perlengkapan">
											
					</div>
				</div>		
			</div>	
		</div>		
	</main>

	<!-- Modal Structure -->
	<div id="cari" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4>Pencarian</h4>
			<div class="row">
				<form action="">
					<div class="input-field col s12">
				        <input id="pencarian" type="text" class="validate" required="">
				        <label for="pencarian">Pencarian nama paket atau perlengkapan</label>
			        </div>
			       <!--  <div class="col s6">
						<select name="kategori">
					      <option value="" disabled selected>--- Pilih Kategori ---</option>
					      <option value="1">Option 1</option>
					      <option value="2">Option 2</option>
					      <option value="3">Option 3</option>
					    </select>
					</div> -->
					<div class="col s12 center">
						<img src="assets/img/animated/search.gif" class="responsive-img" width="300px">
					</div>
			</div>
		</div>
		<div class="modal-footer">						
			<button type="reset" class="btn waves-effect modal-close yellow">Close</button>
			<button type="submit" class="btn waves-effect">Search</button>
			</form>
		</div>
	</div>
<script>
	$.getJSON('<?php echo site_url() ?>api/all/ads/kategori/1/0/6', function(data){
		if (data != "") {
			for (var i = 0; i < data.length; i++) {
				gallery = data[i].gallery;
				$('#top_perlengkapan').append(
					'<div class="col s12 l4 m6">'+
						'<div class="card hoverable">'+
						    '<div class="card-image waves-effect waves-block waves-light">'+
						     	'<a href="<?php echo base_url();?>ads/'+data[i].slug+'"><img height="250" class="activator" src="'+'<?php echo base_url(); ?>'+gallery[0].src+'"></a>'+
						    '</div>'+
						    '<div class="card-content">'+
						    	'<a href="<?php echo base_url();?>ads/'+data[i].slug+'"><span class="card-title activator grey-text text-darken-4">'+data[i].title+'</span></a>'+
						    	'<br>'+							      	
						    	'<i class="tiny material-icons">room</i>'+data[i].lokasi+
						      	'<div class="divider"></div>'+
						      	'<span><b>'+data[i].price+'</b></span>'+																      
						    '</div>'+						    
						  '</div>'+
						'</div>'	
				);
			}
		}
	});

	$.getJSON('<?php echo site_url() ?>api/all/ads/kategori/2/0/6', function(data){
		if (data != "") {
			for (var i = 0; i < data.length; i++) {
				gallery = data[i].gallery;
				$('#top_paket').append(
					'<div class="col s12 l4 m6">'+
						'<div class="card hoverable">'+
						    '<div class="card-image waves-effect waves-block waves-light">'+
						     	'<a href="<?php echo base_url();?>ads/'+data[i].slug+'"><img height="250" class="activator" src="'+'<?php echo base_url(); ?>'+gallery[0].src+'"></a>'+
						    '</div>'+
						    '<div class="card-content">'+
						    	'<a href="<?php echo base_url();?>ads/'+data[i].slug+'"><span class="card-title activator grey-text text-darken-4">'+data[i].title+'</span></a>'+
						    	'<br>'+							      	
						    	'<i class="tiny material-icons">room</i>'+data[i].lokasi+
						      	'<div class="divider"></div>'+
						      	'<span><b>'+data[i].price+'</b></span>'+																      
						    '</div>'+						    
						  '</div>'+
						'</div>'
				);
			}
		}
	});
</script>