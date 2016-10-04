<footer class="page-footer grey lighten-3">		
		<div class="footer-copyright white">
			<div class="container grey-text">
				© 2016 Design By LeakWEB
				<a class="grey-text right" href="http://leakweb.github.io">LeakWeb</a>
			</div>
		</div>
	</footer>
	
	<!-- Modal Structure -->
	<div id="delete_account" class="modal">
		<div class="modal-content">
			<h4>Delete this Account ?</h4>
			<p><b class="red-text">Hati-hati</b>, tindakan ini akan benar menghapus data anda dari database kami. Untuk alasan security tolong masukan kembali nama toko secara terbalik. pada form dibawah ini!</p>
			<form action="">				
				<div class="input-field col s12">
					<input type="text" class="validate" required="" autofocus="" placeholder="Masukan nama toko anda">
				</div>
		</div>
		<div class="modal-footer">				
				<button class="btn btn-flat waves-effect modal-close">Cancel</button>
				<button type="submit" class="btn btn-flat waves-effect">Delete</button>
			</form>
		</div>
	</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo base_url();?>assets/js/materialize.js"></script>
<script src="<?php echo base_url();?>assets/js/materialize-tag.js"></script>
<script src="<?php echo base_url();?>assets/js/typeahead.js"></script>
<script>
	$(document).ready(function(){
		$('.modal-trigger').leanModal();
		$('select').material_select();
		$('.button-collapse').sideNav({
			edge: 'left'
		});
	});
</script>
<script>
	function checkAll(bx) {
	  var chkinput = document.getElementsByTagName("input");
	  // console.log(chkinput.length);
	  for(var i=0; i < chkinput.length; i++) {
	    if(chkinput[i].type == 'checkbox') {
	      chkinput[i].checked = bx.checked;
	    }
	  }
	}
</script>
<script>
	$(document).ready(function(){
	$("#sub_kategori_event").hide();
	$("#sub_kategori_perlengkapan").hide();
	$( "#kategori" )
		.change(function() {
			val_kategori = ""
			$( "#kategori option:selected" ).each(function() {
				val_kategori = $( this ).val();
				if (val_kategori == 1) {
					$("#sub_kategori_event").show();
					$("#sub_kategori_perlengkapan").hide();
				}else{
					$("#sub_kategori_perlengkapan").show();
					// $("#sub_kategori_event").hide();
				}											
			});
		});
});
</script>
</body>
</html>