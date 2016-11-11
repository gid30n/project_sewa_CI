<footer class="page-footer grey lighten-3">		
		<div class="footer-copyright white">
			<div class="container grey-text">
				© 2016 Design By LeakWEB
				<a class="grey-text right" href="http://leakweb.github.io">LeakWeb</a>
			</div>
		</div>
	</footer>
	
	<!-- Modal Structure -->
	<div id="delete_account" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4>Delete this Account ?</h4>
			<p><b class="red-text">Hati-hati</b>, tindakan ini akan benar menghapus data anda dari database kami. Untuk alasan security tolong masukan kembali "Sewania" secara terbalik. pada form dibawah ini!</p>
			<?php echo form_open("/dashboard-cus/delete-account"); ?>				
				<div class="input-field col s12">
					<input type="text" class="validate" name="sewania" required="" autofocus="" placeholder="Masukan Sewania Secara Terbalik">
				</div>
				<div class="input-field col s12">
					<?php echo $this->recaptcha->render(); ?>
				</div>
		</div>
		<div class="modal-footer">				
				<button class="btn btn-flat waves-effect modal-close">Cancel</button>
				<button type="submit" class="btn btn-flat waves-effect">Delete</button>
			<?php echo form_close(); ?>
		</div>
	</div>
		
	<!-- Modal Structure -->
	<div id="nama_subs" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4>Add Sub Category</h4>
			<?php echo form_open('dashboard/kategori/add/sub'); ?>
				<div class="row">
					<div class="input-field">
						<div class="col m3 s12">
							<label for="nama_sub" class="teal-text">Nama Sub Kategori</label>									
						</div>
						<div class="col m9 s12">
							<br class="hide-on-med-and-up">
							<input type="text" id="nama_sub" class="validate" required="" name="nama_sub">
						</div>								
					</div>
				</div>
				<div class="row">
					<div class="input-field">
						<div class="col m3 s12">
							<label for="kategori" class="teal-text">Kategori</label>
							<br class="hide-on-med-and-up">
							<br class="hide-on-med-and-up">
						</div>
						<div class="col m9 s12">
							<select name="kategori" id="kategori">
								<option value="" disabled selected>--- Pilih Kategori ---</option>
								<option value="1">Perlengkapan Pesta</option>
								<option value="2">Paket Pesta</option>								
							</select>
						</div>								
					</div>
				</div>				
			
		</div>
		<div class="modal-footer">
			<button class="btn teal waves-effect" type="submit">Submit</button>			
		</div>
		<?php echo form_close(); ?>
	</div>

	<!-- Modal Structure -->
	<div id="nama_super_subs" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4>Add Super Sub Category</h4>
			<?php echo form_open('dashboard/kategori/add/super-sub'); ?>
				<div class="row">
					<div class="input-field">
						<div class="col m3 s12">
							<label for="nama_super_sub" class="teal-text">Nama Super Sub Kategori</label>									
						</div>
						<div class="col m9 s12">
							<br class="hide-on-med-and-up">
							<input type="text" id="nama_super_sub" class="validate" required="" name="nama_super_sub">
						</div>								
					</div>
				</div>
				<div class="row">
					<div class="input-field">
						<div class="col m3 s12">
							<label for="sub_kategori" class="teal-text">Sub Kategori</label>
							<br class="hide-on-med-and-up">
							<br class="hide-on-med-and-up">
						</div>
						<div class="col m9 s12">
							<select name="sub_kategori" id="sub_kategori">
								<option value="" disabled selected>--- Pilih Sub Kategori ---</option>								
							</select>
						</div>								
					</div>
				</div>				
			
		</div>
		<div class="modal-footer">
			<button class="btn teal waves-effect" type="submit">Submit</button>			
		</div>
		<?php echo form_close(); ?>
	</div>


<script src="<?php echo base_url();?>assets/js/materialize.js"></script>
<script src="<?php echo base_url();?>assets/js/materialize-tag.js"></script>
<script src="<?php echo base_url();?>assets/js/typeahead.js"></script>

<?php 
	if(isset($msg_kategori)){			
		if(isset($msg_kategori['status'])){
			if($msg_kategori['status']){
				?><script>sweetAlert('Congratulations!', '<?php echo $msg_kategori["msg"];?>', 'success');</script><?php
			}else{
				?><script>sweetAlert('Congratulations!', '<?php echo $msg_kategori["msg"];?>', 'error');</script><?php
			}
		}
		$this->session->unset_userdata('msg_kategori');		
	}
?>

<script>	
	$(document).ready(function(){
		$('.modal-trigger').leanModal();
		$('select').material_select();
		$('.button-collapse').sideNav({
			edge: 'left'
		});

		$("#sub_kategori_event").hide();
		$( "#kategori" )
		.change(function() {
			val_kategori = ""
			$( "#kategori option:selected" ).each(function() {
				val_kategori = $( this ).val();
				if (val_kategori == 0) {
					$("#sub_kategori_event").hide();
				}else{
					$("#sub_kategori_event").show();
				}											
			});
		});

		// change active menu
		var path = window.location.pathname;
		arr_path = path.split("/");
		$(".service a").addClass(function(index, currentClass){
			if(currentClass.search("peralatan") >= 0 && arr_path[1] == "peralatan"){
				return "active";
			}else if (currentClass.search("paket") >= 0 && arr_path[1] == "paket") {
				return "active";
			};
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
		$.getJSON( "<?php echo base_url();?>api/jenis_jasa", function( data ) {
			var jasa = new Bloodhound({
				datumTokenizer: Bloodhound.tokenizers.obj.whitespace('jenis_jasa'),
				queryTokenizer: Bloodhound.tokenizers.whitespace,
				local: data
			});				
			jasa.initialize();

			$('#jenis_service .typeahead').materialtags({
				itemValue: 'id_jenisjasa',
				itemText: 'jenis_jasa',
				freeInput:false,
				typeaheadjs: {
					highlight   : true,
					name: 'jasa',
					displayKey: 'jenis_jasa',					
					source: jasa.ttAdapter()
				}
			});
		});
	});
</script>
<script>
	$(document).ready(function(){
		$.getJSON( "<?php echo base_url();?>api/all-sub-kategori", function( data ) {
			// clear contents
			var $selectDropdown = 
			$("#sub_kategori")
			.empty()
			.html(' ');

			$selectDropdown.append(
				$("<option></option>")
				.attr("value", "")
				.attr("disabled", "")
				.attr("selected", "")
				.text("--- Pilih Kategori ---")
				);

			$.each(data, function (i, item) {
				$selectDropdown.append(
					$("<option></option>")
					.attr("value",item.id_sub_kategori)
					.text(item.name)
					);
			});
			$('select').material_select('update');
		});
	});
</script>
</body>
</html>