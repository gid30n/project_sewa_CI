<main>
		<div class="container">
			<div class="row">
				<div class="col m12 s12 white box">			
					<div class="sign-up-main">
						<i class="medium material-icons left">person_add</i><h5>Account Detail</h5>
						<hr>
						<br>
						<form action="<?php echo base_url();?>signup/validation" method="post">
							<div class="input-field col s12">
								<div class="col m3 s12">
									<label for="first_name" class="teal-text">Nama Depan <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<input type="text" id="first_name" class="validate" required="" name="first_name" placeholder="John" value="<?php if(isset($data['first_name'])){ echo $data['first_name']; } ?>">
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
							</div>
							<div class="input-field col s12">
								<div class="col m3 s12">
									<label for="last_name" class="teal-text">Nama Belakang <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<input type="text" id="last_name" class="validate" required="" name="last_name" placeholder="Smith" value="<?php if(isset($data['last_name'])){ echo $data['last_name']; } ?>">
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
							</div>
							<div class="input-field col s12">
								<div class="col m3 s12">
									<label for="acc_email" class="teal-text">Email <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<input type="email" id="acc_email" class="validate" required="" name="acc_email" placeholder="johnsmith@email.com" value="<?php if(isset($data['acc_email'])){ echo $data['acc_email']; } ?>">
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
							</div>
							<div class="input-field col s12">
								<div class="col m3 s12">
									<label for="acc_pass" class="teal-text">Password <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<input type="password" id="acc_pass" class="validate" required="" name="acc_pass" placeholder="************">
								</div>
							</div>
							<div class="input-field col s12">
								<div class="col m3 s12">
									<label for="re-acc_pass" class="hide-on-small-only teal-text">Re-Password <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<input type="password" id="re-acc_pass" class="validate" required="" name="re-acc_pass" placeholder="************">
									<span class="grey-text"><sup class="red-text">*</sup> Password at least have 5 character</span>
									<br>
									<br>
									<br>
								</div>
							</div>
							<div class="col s12">
								<i class="medium material-icons left">work</i><h5>Profil Usaha</h5>
								<hr>								
							</div>
							<div class="input-field col s12">
								<div class="col m3 s12">
									<label for="brand_name" class="teal-text">Nama Brand <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<input type="text" id="brand_name" class="validate" required="" name="brand_name" placeholder="Sewania" value="<?php if(isset($data['brand_name'])){ echo $data['brand_name']; }?>">
								</div>								
							</div>
							<div class="input-field col s12">
								<div class="col m3 s12">
									<label for="jenis_service" class="teal-text">Jenis Jasa <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<textarea name="jenis_service" id="jenis_service" class="materialize-textarea" placeholder="Masukkan jenis services yang anda berikan"><?php if(isset($data['type_service'])){ echo $data['type_service']; }?></textarea>
								</div>
							</div>
							<div class="input-field col s12">
								<div class="col m3 s12">
									<label for="alamat_usaha" class="teal-text">Alamat Usaha<sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<input type="text" id="alamat_usaha" class="validate" required="" name="alamat_usaha" placeholder="Jln. Bla bla" value="<?php if(isset($data['address'])){ echo $data['address']; }?>">
								</div>								
							</div>
							<div class="input-field col s12">
								<div class="col m3 s12">
									<label for="provinsi" class="teal-text">Provinsi <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<select id="provinsi" name="provinsi" value="<?php if(isset($data['province'])){ echo $data['province']; }?>">
								      <option value="" disabled selected>--- Pilih Provinsi ---</option>
								    </select>
								</div>								
							</div>
							<div class="input-field col s12">
								<div class="col m3 s12">
									<label for="kabupaten" class="teal-text">Kabupaten <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<select id="kabupaten" name="kabupaten" value="<?php if(isset($data['region'])){ echo $data['region']; }?>">
								      <option value="" disabled selected>--- Pilih Kabupaten ---</option>
								    </select>
								</div>								
							</div>
							<div class="input-field col s12">
								<div class="col m3 s12">
									<label for="des_usaha" class="teal-text">Deskripsi Usaha <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<textarea name="des_usaha" id="des_usaha" class="materialize-textarea" placeholder="Masukkan deskripsi usaha anda"><?php if(isset($data['descript'])){ echo $data['descript']; } ?></textarea>
								</div>
							</div>
							<div class="col s12">
								<p>
							      <input type="checkbox" id="term" name="term" />
							      <label for="term">I have read and agree to the <a href="#termcond" class="modal-trigger"> Terms & Conditions </a></label>
							    </p>
								<br>
							</div>
							<div class="input-field col s12 center">
								<button class="btn btn-large waves-effect">Register</button>
								<br>
								<br>
								<br>
							</div>							
						</form>					
					</div>
				</div>
			</div>
		</div>	
	</main>
	
	<!-- Modal Structure -->
	<div id="termcond" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4>Terms & Conditions</h4>
			<p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quas, tempora enim voluptates commodi quae ea, neque incidunt ipsum nobis qui, culpa vero hic dolorem fuga itaque consequuntur numquam aliquam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit saepe, nobis aperiam laboriosam, dignissimos minima itaque nemo ipsum alias labore assumenda nostrum beatae totam eius debitis expedita, quo porro, iusto? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores rem sequi minima quia, facilis quos obcaecati omnis, eum itaque libero? Illo tenetur, unde esse fugiat iste officiis dolor sapiente quibusdam!</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Close</a>
		</div>
	</div>

	<script>
		$(document).ready(function(){
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
		$( "#provinsi" )
		.change(function() {
			id_province = ""
			$( "#provinsi option:selected" ).each(function() {
				id_province += $( this ).val();
			});
			$.getJSON( "<?php echo base_url();?>api/region/"+id_province, function( data ) {
				// clear contents
				var $selectDropdown = 
				$("#kabupaten")
				.empty()
				.html(' ');

				$selectDropdown.append(
					$("<option></option>")
					.attr("value", "")
					.attr("disabled", "")
					.attr("selected", "")
					.text("--- Pilih Kabupaten ---")
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
		})
		.trigger( "change" );
	});
	</script>