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
						<li><a href="<?php echo base_url();?>login" class="grey-text waves-effect">Login</a></li>
						<li><a href="<?php echo base_url();?>signup" class="grey-text waves-effect">Signup</a></li>
						<li><a href="<?php echo base_url();?>signup-patner" class="btn waves-effect white-text">Jadi Partner Kami</a></li>					
					</ul>	
				<?php }else{ ?>
					<ul class="right hide-on-med-and-down">
						<li><a href="<?php echo base_url(); ?>cart" class="grey-text waves-effect"><i class="material-icons left">shopping_cart</i>Order<span class="badge teal circle white-text">99</span></a></li>							
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
						<li><a href="<?php echo base_url();?>login" class="white-text waves-effect">Login</a></li>
						<li><a href="<?php echo base_url();?>signup" class="white-text waves-effect">Signup</a></li>
						<li><a href="<?php echo base_url();?>signup-patner" class="white-text waves-effect">Jadi Partner Kami</a></li>
				<?php }else{ ?>
					<li><a href="<?php echo base_url(); ?>cart" class="white-text waves-effect"><i class="material-icons left white-text">shopping_cart</i>Order<span class="badge teal circle white-text">99</span></a></li>							
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
							<a href="<?php echo base_url();?>kategori-detail" class="collection-item col m6 s12 waves-effect teal-text"><i class="material-icons left">wc</i>Paket Pernikahan</a>
							<a href="<?php echo base_url();?>kategori-detail" class="collection-item col m6 s12 waves-effect teal-text"><i class="material-icons left">cake</i>Paket Ulang Tahun</a>
							<a href="<?php echo base_url();?>kategori-detail" class="collection-item col m6 s12 waves-effect teal-text"><i class="material-icons left">local_activity</i>Paket Acara Adat Bali</a>
							<a href="<?php echo base_url();?>kategori-detail" class="collection-item col m6 s12 waves-effect teal-text"><i class="material-icons left">color_lens</i>Paket Dekorasi</a>
							<a href="<?php echo base_url();?>kategori-detail" class="collection-item col m6 s12 waves-effect teal-text"><i class="material-icons left">restaurant</i>Paket Catering</a>
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
							<a href="<?php echo base_url('kategori/tenda');?>" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/tent.png" width="24px" class="left"> Tenda</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/tent.png" width="24px" class="left"> Tenda</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/chair.png" width="24px" class="left">Kursi</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/table.png" width="24px" class="left">Meja</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/sound.png" width="24px" class="left">Sound System</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/stage.png" width="24px" class="left">Podium/Mimbar</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/light.png" width="24px" class="left">Lighting</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/ac.png" width="24px" class="left">Standing AC</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/music.png" width="24px" class="left">Alat Music</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/riging.png" width="24px" class="left">Riging</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/eat.png" width="24px" class="left">Alat Catering</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/genset.png" width="24px" class="left">Genset</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/floring.png" width="24px" class="left">Flooring</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/tv.png" width="24px" class="left">TV/Screen</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/car.png" width="24px" class="left">Kendaraan Pengantin</a>		
                            <a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/decor.png" width="24px" class="left">Dekorasi</a>	
                            <a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/card.png" width="24px" class="left">Kartu Undangan</a>	
                            <a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/hiburan.png" width="24px" class="left">Penghibur</a>	
                            <a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/tempat.png" width="24px" class="left">Tempat Acara</a>	
                            <a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/makeup.png" width="24px" class="left">Make Up</a>	
                            <a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url(); ?>assets/img/Icon/dres.png" width="24px" class="left">Pakaian Pengantin</a>												
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/tent.png" width="24px" class="left"> Tenda</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/chair.png" width="24px" class="left">Kursi</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/table.png" width="24px" class="left">Meja</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/sound.png" width="24px" class="left">Sound System</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/stage.png" width="24px" class="left">Podium/Mimbar</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/light.png" width="24px" class="left">Lighting</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/ac.png" width="24px" class="left">Standing AC</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/music.png" width="24px" class="left">Alat Music</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/riging.png" width="24px" class="left">Riging</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/eat.png" width="24px" class="left">Alat Catering</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/genset.png" width="24px" class="left">Genset</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/floring.png" width="24px" class="left">Flooring</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/tv.png" width="24px" class="left">TV/Screen</a>
							<a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/car.png" width="24px" class="left">Kendaraan Pengantin</a>		
                            <a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/decor.png" width="24px" class="left">Dekorasi</a>	
                            <a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/card.png" width="24px" class="left">Kartu Undangan</a>	
                            <a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/hiburan.png" width="24px" class="left">Penghibur</a>	
                            <a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/tempat.png" width="24px" class="left">Tempat Acara</a>	
                            <a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/makeup.png" width="24px" class="left">Make Up</a>	
                            <a href="detail_kategori" class="collection-item col m6 s12 wave-effect"><img src="<?php echo base_url();?>assets/img/Icon/dres.png" width="24px" class="left">Pakaian Pengantin</a>												
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
					'<div class="col s12 m4">'+
							'<div class="card hoverable">'+
							    '<div class="card-image waves-effect waves-block waves-light">'+
							     	'<img class="activator" src="'+'<?php echo base_url("images/?w=150&h=150&src="); ?>'+gallery[0].src+'">'+
							    '</div>'+
							    '<div class="card-content">'+
							    	'<span class="card-title activator grey-text text-darken-4">'+data[i].title+'</span>'+
							    	'<br>'+							      	
							    	'<i class="tiny material-icons">room</i>'+data[i].lokasi+
							      	'<div class="divider"></div>'+
							      	'<span><b>'+data[i].price+'</b></span>'+																      
							    '</div>'+
							    '<div class="card-reveal">'+
							    	'<span class="card-title grey-text text-darken-4">'+data[i].title+'<i class="material-icons right">close</i></span>'+
							    	'<p style="word-wrap: break-word"><?php echo mb_strimwidth("'+data[i].descript+'",0,250, "...."); ?></p>'+
									'<p><a href="<?php echo base_url();?>ads/'+data[i].slug+'" class="btn waves-effect">Detail</a></p>'+
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
					'<div class="col s12 m4">'+
							'<div class="card hoverable">'+
							    '<div class="card-image waves-effect waves-block waves-light">'+
							     	'<img class="activator" src="'+'<?php echo base_url("images/?w=150&h=150&src="); ?>'+gallery[0].src+'">'+
							    '</div>'+
							    '<div class="card-content">'+
							    	'<span class="card-title activator grey-text text-darken-4">'+data[i].title+'</span>'+
							    	'<br>'+							      	
							    	'<i class="tiny material-icons">room</i>'+data[i].lokasi+
							      	'<div class="divider"></div>'+
							      	'<span><b>'+data[i].price+'</b></span>'+																      
							    '</div>'+
							    '<div class="card-reveal">'+
							    	'<span class="card-title grey-text text-darken-4">'+data[i].title+'<i class="material-icons right">close</i></span>'+
							    	'<p style="word-wrap: break-word"><?php echo mb_strimwidth("'+data[i].descript+'",0,250, "...."); ?></p>'+
									'<p><a href="<?php echo base_url();?>ads/'+data[i].slug+'" class="btn waves-effect">Detail</a></p>'+
							    '</div>'+
							  '</div>'+
							'</div>'	
				);
			}
		}
	});
</script>