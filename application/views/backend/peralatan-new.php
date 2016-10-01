<main>
		<div class="row">
			<div class="col s12 m3 left hide-on-med-and-down">
				<div class="card white">
					<div class="card-content teal-text">						
						<ul class="collapsible z-depth-0" data-collapsible="expandable">
							<li>
								<div class="collapsible-header active"><b>Dashboard</b></div>
								<div class="collapsible-body">									
									<ul class="collection with-header">
										<a href="account-home" class="collection-item waves-effect"><i class="material-icons left">home</i>My Profile</a>
										<div class="divider"></div>
										<a href="#!" class="collection-item waves-effect"><i class="material-icons left">close</i>Logout</a>
									</ul>									
								</div>
							</li>
							<li>
								<div class="collapsible-header active"><b>Services</b></div>
								<div class="collapsible-body">
									<ul class="collection with-header">										
										<a href="#!" class="collection-item waves-effect"><i class="material-icons left">shopping_cart</i>Pesan<span class="new badge teal white-text">99</span></a>
										<a href="<?php echo base_url();?>peralatan" class="collection-item waves-effect"><i class="material-icons left">beach_access</i>Peralatan Pesta<span class="new badge" data-badge-caption="item">400</span></a>
										<a href="<?php echo base_url();?>paket" class="collection-item waves-effect"><i class="material-icons left">work</i>Paket Pesta<span class="new badge" data-badge-caption="paket">4</span></a>
									</ul>									
								</div>
							</li>
							<li>
								<div class="collapsible-header"><b>Other</b></div>
								<div class="collapsible-body">
									<ul class="collection with-header">
										<a href="#delete_account" class="collection-item modal-trigger waves-effect"><i class="material-icons left">close</i>Delete this account</a>
									</ul>
								</div>
							</li>
						</ul>
					</div>					
				</div>
			</div>			
			<div class="col s12 l9 right">
				<div class="card white">
					<div class="card-content teal-text">
						<h5><b>Mari Beriklan di Sewania.com!</b></h5>	
						<p>Situs sewa jasa dan barang online, untuk mulai beriklan silahkan isi form dibawah ini dengan informasi yang sesuai dengan layanan yang anda sediakan.</p>
						<div class="divider"></div>
							<div class="container">
								<form action="">
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
												<label for="kategori" class="teal-text col m3">Kategori <sup class="red-text">*</sup></label>
												<br class="hide-on-med-and-up">
												<br class="hide-on-med-and-up">
											</div>
											<div class="col m9 s12">
												<select name="kategori" id="kategori">										      
											    </select>											    
											</div>								
										</div>
									</div>
									<div class="row" id="sub_kategori_event">
										<div class="input-field">
											<div class="col m3 s12">
												<label for="s_kategori" class="teal-text col m3">Sub Kategori <sup class="red-text">*</sup></label>
												<br class="hide-on-med-and-up">
												<br class="hide-on-med-and-up">
											</div>
											<div class="col m9 s12">
												<select name="s_kategori" id="s_kategori">									      
											    </select>											    
											</div>								
										</div>
									</div>
									<div class="row">
										<div class="input-field">
											<div class="col m3 s12">
												<label for="d_produk" class="teal-text">Deskripsi Produk <sup class="red-text">*</sup></label>																		
											</div>
											<div class="col m9 s12">
												<br class="hide-on-med-and-up">
												<textarea name="d_produk" id="d_produk" class="materialize-textarea"></textarea>
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
													<label for="lokasi" class="teal-text">Kota/Kabupaten <sup class="red-text">*</sup></label>					
												</div>
												<div class="col m9 s12">
													<br class="hide-on-med-and-up">
													<input type="text" id="lokasi" class="validate" required="" name="lokasi">
												</div>								
											</div>
										</div>
										<div class="row">
											<div class="file-field input-field">
										      <div class="btn">
										        <span>File</span>
										        <input class="file-upload" type="file" multiple>
										      </div>
										      <div class="file-path-wrapper" style="display : inline-block">
										        <input class="file-path validate" type="text" placeholder="Upload gambar disini">
										      </div>
										      <a href="#" style="display: inline-block;"><i class="material-icons left" style="margin-top: -50px;">close</i></a>
										    </div>
										</div>
										<div class="row center-align">
											<button type="submit" class="btn">Posting</button>
										</div>
									</div>
								</div>								
							</form>						
					</div>					
				</div>
			</div>
		</div>
	</main>
	<script>
	$(document).ready(function(){

		// for add on file upload
		// $(".file-upload").change(function(){
		// 	console.log($(this).val());
		// });

		// api for kategori and sub kategori
		$.getJSON( "<?php echo base_url();?>api/kategori/1", function( data ) {
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
			if (id_sub_kategori != "") {
				$.getJSON( "<?php echo base_url();?>api/sub-kategori/1/"+id_sub_kategori, function( data ) {
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