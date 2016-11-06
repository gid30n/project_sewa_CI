<!-- footer -->
	<footer class="page-footer white">
		<div class="container">
			<div class="row center-align grey-text">
				<div class="col m3 s12">
					<h5><b>INFORMASI</b></h5>					
					<a href="<?php echo base_url(); ?>term" class="grey-text waves-effect ">Syarat & Ketentuan</a><br>
					<a href="http://blog.sewania.com" class="grey-text waves-effect ">Blog</a><br>
					<a href="<?php echo base_url(); ?>about-us" class="grey-text waves-effect ">Tentang Kami</a><br>
					<a href="#!" class="grey-text waves-effect ">Lowongan</a><br>
				</div>
				<div class="col m3 s12">
					<h5><b>FOLLOW US</b></h5>
					<center>
					<a href="" class="grey-text col s3"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="" class="grey-text col s3"><i class="fa fa-instagram fa-2x"></i></a>
					<a href="" class="grey-text col s3"><i class="fa fa-google-plus fa-2x"></i></a>
					<a href="" class="grey-text col s3"><i class="fa fa-youtube fa-2x"></i></a>					
				</div>
				<div class="col m3 s12">
					<h5><b>HELP</b></h5>
					<a href="#!" class="grey-text waves-effect ">Cara Kerja ?</a><br>
					<a href="#!" class="grey-text waves-effect ">Keamanan</a><br>
					<a href="#!" class="grey-text waves-effect ">FAQ</a><br>
					<a href="#!" class="grey-text waves-effect ">Kontak US</a><br>
				</div>
				<div class="col m3 s12">
					<a href="#!"><img src="<?php echo base_url();?>assets/img/logo/logo2.png" class="responsive-img" alt=""></a>					
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
	$(document).ready(function(){
		$.getJSON("<?php echo base_url();?>api/range-price", function( data ){
			var min = data.min_price;
			var max = data.max_price;
			var slider = document.getElementById('slider_price');
			noUiSlider.create(slider, {
				start: [min, max],
				connect: true,
				step: 1,
				range: {
					'min': 0,
					'max': parseInt(max)
				},
				format: wNumb({
					decimals: 0
				})
			});
			var min_p = document.getElementById('min_price');
			var max_p = document.getElementById('max_price');
			slider.noUiSlider.on('update', function(values, handle){
				var value = values[handle];
				if (handle) {
					max_p.value = parseInt(value);
				}else{
					min_p.value = parseInt(value);
				}
			});

			min_p.addEventListener('change', function(){
				slider.noUiSlider.set([null, this.value]);
			});

			max_p.addEventListener('change', function(){
				slider.noUiSlider.set([null, this.value]);
			});
		});
	});	
</script>
	<script>		
		$.getJSON( "<?php echo base_url();?>api/region/1", function( data ) {				
			var $selectDropdown = 
			$("#daerah")
			.empty()
			.html(' ');

			$selectDropdown.append(
				$("<option></option>")
				.attr("value", "")
				.attr("disabled", "")
				.attr("selected", "")
				.text("--- Pilih Daerah Acara ---")
				);

			$.each(data, function (i, item) {
				$selectDropdown.append(
					$("<option></option>")
					.attr("value",item.id_region)
					.text(item.name)
					);
			});
			$('select').material_select('update');
		});		
	</script>
</body>
</html>