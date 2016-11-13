
		<?php echo form_open_multipart('/paket/new-ads/post');?>
		<input type="hidden" value="1" name="kategori" >	
		<div class="col s12 l9 right">
			<div class="card white">
				<div class="card-content teal-text">
					<h5><b>Mari Beriklan di Sewania.com!</b></h5>	
					<p>Situs sewa jasa dan barang online, untuk mulai beriklan silahkan isi form dibawah ini dengan informasi yang sesuai dengan layanan yang anda sediakan.</p>
					<div class="divider"></div>
					<div class="container">
						<div class="row">
							<div class="input-field">
								<div class="col m3 s12">
									<label for="j_iklan" class="teal-text">Judul Iklan <sup class="red-text">*</sup></label>					
								</div>
								<div class="col m9 s12">
									<br class="hide-on-med-and-up">
									<input type="text" id="j_iklan" class="validate" required="" name="j_iklan">
								</div>								
							</div>
						</div>
						<div class="row">
							<div class="input-field">
								<div class="col m3 s12">
									<label for="sub_kategori" class="teal-text col m3">Kategori <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<select name="sub_kategori" id="kategori">										      
									</select>											    
								</div>								
							</div>
						</div>
						<div class="row" id="sub_kategori_event">
							<div class="input-field">
								<div class="col m3 s12">
									<label for="super_sub_kategori" class="teal-text col m3">Sub Kategori <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<select name="super_sub_kategori" id="s_kategori">									      
									</select>											    
								</div>								
							</div>
						</div>
						<div class="row">
							<div class="input-field">
								<div class="col m3 s12">
									<label for="j_acara" class="teal-text">Jenis Acara <sup class="red-text">*</sup></label>					
								</div>
								<div class="col m9 s12">
									<br class="hide-on-med-and-up">
									<input type="text" id="j_acara" class="validate" required="" name="j_acara">
								</div>								
							</div>
						</div>
						<div class="row">							
							<?php require_once 'tinymce.php';?>
							<div class="input-field">
								<div class="col m3 s12">
									<label for="d_produk" class="teal-text">Deskripsi Produk <sup class="red-text">*</sup></label>																		
								</div>
								<br><br>
								<div class="col s12">
									<br class="hide-on-med-and-up">
									<textarea name="d_produk" id="d_produk"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="input-field">
								<div class="col m3 s12">
									<label for="harga_produk" class="teal-text hide-on-med-and-up">Harga <sup class="red-text">*</sup></label>					
								</div>
								<div class="col m9 s12">
									<br class="hide-on-med-and-up">
									<span class="prefix">Rp</span><input type="number" id="harga_produk" class="validate" required="" name="harga_produk">
								</div>								
							</div>
						</div>
						<br>									

					</div>
					<div class="row">
						<div class="col s12">
							<h5><b>Jangkauan Layanan</b></h5>
							<p>Pilih lokasi dimana anda beroprasi, Semakin sepesifik lokasi anda semakin tepat customer yang anda dapatkan.</p>
						</div>
						<hr>
						<div class="container">
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="provinsi" class="teal-text">Provinsi <sup class="red-text">*</sup></label>
										<br class="hide-on-med-and-up">
										<br class="hide-on-med-and-up">
									</div>
									<div class="col m9 s12">
										<select name="provinsi" id="provinsi">
										</select>
									</div>								
								</div>
							</div>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="lokasi" class="teal-text">Kota/Kabupaten <sup class="red-text">*</sup></label>					
									</div>
									<div class="col m9 s12" id="lokasi" >
										<br class="hide-on-med-and-up">
										<input type="text" class="validate typeahead" required="" name="lokasi">
									</div>								
								</div>
							</div>
							<div class="row">
								<div class="file-field input-field">
									<div class="btn">
										<span>File</span>
										<input type="file" name="gallerys[]">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text" placeholder="Upload gambar disini">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="file-field input-field">
									<div class="btn">
										<span>File</span>
										<input type="file" name="gallerys[]">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text" placeholder="Upload gambar disini">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="file-field input-field">
									<div class="btn">
										<span>File</span>
										<input type="file" name="gallerys[]">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text" placeholder="Upload gambar disini">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="file-field input-field">
									<div class="btn">
										<span>File</span>
										<input type="file" name="gallerys[]">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text" placeholder="Upload gambar disini">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="file-field input-field">
									<div class="btn">
										<span>File</span>
										<input type="file" name="gallerys[]">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text" placeholder="Upload gambar disini">
									</div>
								</div>
							</div>
							<div class="row center-align">
								<button type="submit" class="btn">Posting</button>
							</div>
						</div>
					</div>	
				</div>					
			</div>
		</div>
		<?php echo form_close();?>
	</div>
</main>

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
<script>
$(document).ready(function(){
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
		// kaukin provinsi
		$.getJSON( "<?php echo base_url();?>api/province", function( data ) {
				// clear contents
				var $selectDropdown = 
				$("#provinsi")
				.empty()
				.html(' ');

				$selectDropdown.append(
					$("<option></option>")
					.attr("value", "")
					.attr("disabled", "")
					.attr("selected", "")
					.text("--- Pilih Provinsi ---")
					);

				$.each(data, function (i, item) {
					$selectDropdown.append(
						$("<option></option>")
						.attr("value",item.id_province)
						.text(item.name)
						);
				});
				$('select').material_select('update');
			});
		// ubah provinsi
		$( "#provinsi" ).change(function(){
			val_provinsi = ""
			$( "#provinsi option:selected" ).each(function(){
				val_provinsi = $(this).val();
				var kabupaten = [];
				$.getJSON( "<?php echo base_url();?>api/region/"+val_provinsi, function( data ) {				
					var cities = new Bloodhound({
						datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
						queryTokenizer: Bloodhound.tokenizers.whitespace,
						local: data
					});
					cities.initialize();

					var elt = $('#lokasi .typeahead');
					elt.materialtags({
						itemValue: 'id_region',
						itemText: 'name',
						typeaheadjs: {
							name: 'cities',
							displayKey: 'name',
							source: cities.ttAdapter()
						}
					});	       
				});
			});
		});

		$('#lokasi .typeahead').on('change', function (event)
		{
			var $element   = $(event.target),
			$container = $element.closest('#lokasi');

			if (!$element.data('materialtags'))
			{
				return;
			}

			var val = $element.val();
			if (val === null)
			{
				val = "null";
			}		        
			$('.lok', $container).val(($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\""));	        
		}).trigger('change');

		// api for kategori and sub kategori
		$.getJSON( "<?php echo base_url();?>api/kategori/2", function( data ) {
				// clear contents
				var $selectDropdown = 
				$("#kategori")
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
		$( "#kategori" ).change(function() {
			id_sub_kategori = ""
			$( "#kategori option:selected" ).each(function() {
				id_sub_kategori = $( this ).val();
			});
			// sasasasas
			if (id_sub_kategori != "") {
				$.getJSON( "<?php echo base_url();?>api/sub-kategori/2/"+id_sub_kategori, function( data ) {
					// clear contents
					var $selectDropdown = 
					$("#s_kategori")
					.empty()
					.html(' ');

					$selectDropdown.append(
						$("<option></option>")
						.attr("value", "")
						.attr("disabled", "")
						.attr("selected", "")
						.text("--- Pilih Sub Kategori ---")
						);

					$.each(data, function (i, item) {
						$selectDropdown.append(
							$("<option></option>")
							.attr("value",item.id_super_sub_kategori)
							.text(item.name)
							);
					});
					$('select').material_select('update');
				});
			};
		})
		.trigger( "change" );
	});
</script>