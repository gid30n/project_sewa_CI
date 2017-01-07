 <script type="text/javascript" src="<?php echo base_url();?>assets/js/choosen-product.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.lazyimage.min.js"></script>
 
 <script type="text/javascript">
 
 jQuery(document).ready(function(){
 $('.lazy-image').lazyImage();
    $( getProducts );
	
});

  </script>

	<!-- slider	 -->
    
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="<?php echo base_url();?>assets/img/slide/1.jpg">
				<div class="caption center-align bening">
					<h3>Wujudkan Pesta Impian Anda</h3>
					<h5 class="light grey-text text-lighten-3">Tempat Terbaik Untuk mencari Perlengkapan Pesta dan Paket Pesta</h5>
				</div>
			</li>
			<li>
				<img src="<?php echo base_url();?>assets/img/slide/2.jpg">
				<div class="caption center-align bening">
					<h3>Profesional</h3>
					<h5 class="light grey-text text-lighten-3">Kami memilih Vendor yang Memang Benar-Benar Ahli di Bidangnya</h5>
				</div>
			</li>
			<li>
				<img src="<?php echo base_url();?>assets/img/slide/3.jpg">
				<div class="caption center-align bening">
					<h3>Tersebar Di Seluruh Kota</h3>
					<h5 class="light grey-text text-lighten-3">Temukan Kebutuhan Pesta anda di setiap Kota di Bali</h5>
				</div>
			</li>
			<li>
				<img src="<?php echo base_url();?>assets/img/slide/4.jpg">
				<div class="caption center-align bening">
					<h3>Kepuasan Anda Prioritas Kami</h3>
					<h5 class="light grey-text text-lighten-3">Pesan Sekarang dan buat momen pestamu berkesan</h5>
				</div>
			</li>
		</ul>
	</div>
	<!-- end slider -->
	<main>
		<br>	
		<div class="container">			
			<div class="row">
			<!-- search -->
				<!-- <form action="" method="POST">					
					<div class="input-field col m5 s12"> 
						<div class="form-group">
							<i class="material-icons prefix">room</i>																				
							<input type="text" class="form-control" id="icon_prefix" name="city" placeholder="City/Zipcode">
						</div>
					</div>
					<div class="input-field col m5 s12"> 
						<div class="form-group">
							<i class="material-icons prefix">collections</i>														
							<input type="text" class="form-control" id="icon_prefix" name="looking" placeholder="I'm Looking For A..">
						</div>
					</div>
					<div class="col m2 s12 center">					
						<button type="submit" class="btn teal btn-large col s12"><i class="material-icons center-align">search</i></button>
					</div>				
				</form> -->
				<!-- <br><br> -->
				<!-- end search -->
				
				<!-- cara kerja -->
				<div class="col s12 cara-kerja">
					<h4 class="center-align"><b>Bagaimana Cara Kerjanya</b></h4>			
					<br><br>
					<div class="col s4 center hoverable">
						<img src="<?php echo base_url();?>assets/img/cara/pilih.png" class="responsive-img" width="250px" alt="">
						<h5><b>Pilih</b></h5>
						<p>Pilih peralatan pesta yang anda butuhkan</p>
					</div>	
					<div class="col s4 center hoverable">
						<img src="<?php echo base_url();?>assets/img/cara/input.png" class="responsive-img" width="250px" alt="">
						<h5><b>Input Form Sewa</b></h5>
						<p>Beritahu Kami Detail Informasi Kebutuhan Sewa Anda</p>
					</div>
					<div class="col s4 center hoverable">
						<img src="<?php echo base_url();?>assets/img/cara/pasang.png" class="responsive-img" width="250px" alt="">
						<h5><b>Pasang</b></h5>
						<p>Perlengkapan yang anda sewa kami pasang</p>
					</div>
				</div>					
				<!-- end cara kerja -->

				<!-- ketegori -->		
				<div class="col s12 kategori">
					<h4 class="center-align"><b>Temukan Kategori Yang Anda Cari</b></h4>
					<br><br>
					<div class="col m6 s12">
						<a href="<?php echo base_url(); ?>kategori#paket"><img src="<?php echo base_url();?>assets/img/kategori/1.jpg" class="responsive-img hoverable" alt=""></a>
					</div>
					<div class="col m6 s12">
						<a href="<?php echo base_url(); ?>kategori#perlengkapan"><img src="<?php echo base_url();?>assets/img/kategori/2.jpg" class="responsive-img hoverable" alt=""></a>
					</div>
					<div class="col m6 s12">
						<a href="<?php echo base_url("konsultasi"); ?>"><img src="<?php echo base_url();?>assets/img/kategori/3.jpg" class="responsive-img hoverable" alt=""></a>
					</div>
					<div class="col m6 s12">
						<a href="<?php echo base_url("konsultasi"); ?>"><img src="<?php echo base_url();?>assets/img/kategori/4.jpg" class="responsive-img hoverable" alt=""></a>
					</div>
				</div>
				<!-- end kategori -->

				<!-- paket -->
				<div class="col s12">
					<h4 class="center-align"><b>Produk Populer</b></h4>
					<br><br>
                    
					<div class="row" data-bind="foreach: products">						
						<div class="col s12 m6 l4">
							<div class="card hoverable">
							    <div class="card-image waves-effect waves-block waves-light">                                 
							    <a data-bind="attr: { href: '<?php echo base_url("ads"); ?>/'+slug }"><img class="activator lazy-image" data-bind="attr: { src: gallery[0].src, alt: gallery[0].title }"></a>
                
							    </div>
							    <div class="card-content">
							      <a data-bind="attr: { href: '<?php echo base_url("ads"); ?>/'+slug }" ><span class="card-title activator grey-text text-darken-4 truncate" data-bind="text: title" style="word-wrap: break-word"><!-- <i class="material-icons right">more_vert</i> --></span></a>
							      <br>
							      <i class="tiny material-icons">room</i><span data-bind="text: lokasi">Denpasar</span>
							      <div class="divider"></div>
							      <span><b data-bind="text: price"></b></span>																      
							    </div>
							    <!-- <div class="card-reveal">
							      <span class="card-title grey-text text-darken-4" data-bind="text: title">Card Title</span><span class="card-title grey-text text-darken-4" style="margin-top:-40px;"><i class="material-icons right">close</i></span>
                                  <p>&nbsp;</p>
							      <p class="truncate" data-bind="html: descript" style="word-wrap: break-word">Here is some more information about this product that is only revealed once clicked on.</p>
							      <p><a data-bind="attr: { href: '<?php echo base_url("ads"); ?>/'+slug }" class="btn waves-effect">Detail</a></p>
							    </div> -->
							  </div>
						</div>                       					
					</div>						
				</div>
				<!-- end paket -->			
				</div>							
			</div>
			<!-- daftarkan -->
			<div class="parallax-container">
		    	<div class="parallax"><img src="<?php echo base_url();?>assets/img/slide/1.jpg"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col s12 daftarkan center-align">
		    				<h4 class="white-text bening">Anda Penyedia Peralatan Pesta ?</h4>
		    				<br>
		    				<a href="<?php echo base_url("signup-patner"); ?>" class="btn btn-large waves-effect"><b>Daftarkan Usaha Anda</b></a>
		    			</div>		    					    			
		    		</div>		    		
		    	</div>
		    </div>
			<!-- end daftarkan -->

			<!-- testi & video -->			
			<div class="row center">
				<div class="col s12 m6">
					<h4 class="center-align"><b>Video</b></h4>
					<hr>
					<!-- <video class="responsive-video" controls>
				    	<source src="assets/video/1.mp4" type="video/mp4">
				  	</video> -->
				  	 <div class="video-container">
				        <iframe width="560" height="315" src="https://www.youtube.com/embed/hhNVPQIOzrE" frameborder="0" allowfullscreen></iframe>
				     </div>
				</div>
				<div class="col s12 m6">
					<h4 class="center-align"><b>Testimoni</b></h4>
					<hr>
					<div class="row">
						<div class="col s2">
							<img src="<?php echo base_url(); ?>assets/img/ava/1.jpg" class="responsive-img circle left" alt="">						
						</div>
						<div class="col s10">
							<p>"Awalnya bingung mau cari Gayor untuk pernikahan, tau tau ada web yang menyediakan Perlengkapan Pesta di bali sangat membantu dan fast respon, desain gayornya juga berpariasi" </p>
						</div>
						<div class="col s2">
							<img src="<?php echo base_url(); ?>assets/img/ava/1/1.jpg" class="responsive-img circle left" alt="">						
						</div>
						<div class="col s10">
							<p> "Masalah yang sering saya hadapi sebagai seorang EO adalah kesulitan mencari perlengpakan untuk membangun acara yang saya tangani, semenjak mengenal sewania segala kebutuhan pesta jadi gambang dipesan"</p>
						</div>
						<div class="col s2">
							<img src="<?php echo base_url(); ?>assets/img/ava/1/2.jpg" class="responsive-img circle left" alt="">						
						</div>
                        
						
						<div class="col s10">
							<p>"saya punya dana terbatas untuk mengadakan resepsi pernikahan waktu itu, bingung dan hampir menunda pernikahan, tapi seorang teman merekomendasikan situs ini dan sewania membantu mencari perlengkapan pesta dengan budget terbatas"</p>
						</div>
					</div>										
				</div>			
			</div>	
			<!-- end testi & video -->			
	</main>
