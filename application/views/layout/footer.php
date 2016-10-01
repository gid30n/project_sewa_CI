	<!-- footer -->
	<footer class="page-footer white">
		<div class="container">
			<div class="row center-align grey-text">
				<div class="col m3 s12">
					<h5><b>INFORMASI</b></h5>					
					<a href="#!" class="grey-text waves-effect btn btn-flat">Tentang Kami</a><br>
					<a href="#!" class="grey-text waves-effect btn btn-flat">Blog</a><br>
					<a href="#!" class="grey-text waves-effect btn btn-flat">Team Kami</a><br>
					<a href="#!" class="grey-text waves-effect btn btn-flat">Lowongan</a><br>
				</div>
				<div class="col m3 s12">
					<h5><b>FOLLOW US</b></h5>
				</div>
				<div class="col m3 s12">
					<h5><b>HELP</b></h5>
					<a href="#!" class="grey-text waves-effect btn btn-flat">Cara Kerja ?</a><br>
					<a href="#!" class="grey-text waves-effect btn btn-flat">Keamanan</a><br>
					<a href="#!" class="grey-text waves-effect btn btn-flat">Email Kami</a><br>
					<a href="#!" class="grey-text waves-effect btn btn-flat">Call(083114380563)</a><br>
				</div>
				<div class="col m3 s12">
					<a href="#!"><img src="<?php echo base_url();?>assets/img/logo/logo2.png" class="responsive-img" alt=""></a>
					<p>  Copyright @2016 sewania.com
					Kebijakan Privasi Syarat dan Ketentuan info@sewania.com</p>
					<button class="btn btn-large teal waves-effect">SUBSCRIBE</button>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container grey-text">
				© 2016 Design By LeakWEB
				<a class="grey-text right" href="http://leakweb.github.io">LeakWEB Contact</a>
			</div>
		</div>
	</footer>
	<!-- end footer -->

<script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script>
	$(document).ready(function(){
		$('.button-collapse').sideNav({
			edge: 'left'
		});
		$('.button-collapse1').sideNav({
			edge: 'right'
		});				
		$('.slider').slider({full_width: true, height: 450});
		$('.parallax').parallax();
		$('.button-collapse').sideNav();
		$('textarea').trigger('autoresize');
		$('select').material_select();
		$('.modal-trigger').leanModal();
	});
</script>
<!-- bxSlider Javascript file --> 
<script src="<?php echo base_url();?>assets/js/bxslider.min.js"></script> 
<script>
$(document).ready(function(){
	$('.bxslider').bxSlider({
		pagerCustom: '#bx-pager'
	});
	$('.bx-prev').text("");
	$('.bx-next').text("");
});
</script> 
<script src="<?php echo base_url();?>assets/js/nouislider.min.js"></script>
<script>
	var slider = document.getElementById('slider_price');
	  noUiSlider.create(slider, {
	   start: [20, 80],
	   connect: true,
	   step: 1,
	   range: {
	     'min': 0,
	     'max': 100
	   },
	   format: wNumb({
	     decimals: 0
	   })
	  });


	$(document).ready(function(){
		var min_p = document.getElementById('min_price');
		var max_p = document.getElementById('max_price');
		slider.noUiSlider.on('update', function(values, handle){
			var value = values[handle];
			  	if (handle) {
			  		max_p.value = value;
			  	}else{
			  		min_p.value = value;
			  	}
		});

		min_p.addEventListener('change', function(){
			slider.noUiSlider.set([null, this.value]);
		});

		max_p.addEventListener('change', function(){
			slider.noUiSlider.set([null, this.value]);
		});
	});	
</script>
</body>
</html>