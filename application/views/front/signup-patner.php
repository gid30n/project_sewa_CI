<main>
		<div class="container">
			<div class="row">
				<div class="col m12 s12 white box">			
					<div class="sign-up-main">
						<i class="medium material-icons left">person_add</i><h5>Account Detail</h5>
						<hr>
						<br>
						<?php echo form_open('signup-patner/validation');?>
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
									<label for="acc_user" class="teal-text">Username <sup class="red-text">*</sup></label>									
								</div>
								<div class="col m9 s12">
									<br class="hide-on-med-and-up">
									<input type="text" id="acc_user" class="validate" required="" name="acc_user" placeholder="Sewania" value="<?php if(isset($data['acc_user'])){ echo $data['acc_user']; } ?>">																		
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
									<label for="acc_tlp" class="teal-text">Telephone <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<input type="text" id="acc_tlp" class="validate" required="" name="acc_tlp" placeholder="08XXXXXXXXXX" value="<?php if(isset($data['acc_tlp'])){ echo $data['acc_tlp']; } ?>">
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
									<label for="kabupaten" class="teal-text">Kabupaten/Kota <sup class="red-text">*</sup></label>
									<br class="hide-on-med-and-up">
									<br class="hide-on-med-and-up">
								</div>
								<div class="col m9 s12">
									<select id="kabupaten" name="kabupaten" value="<?php if(isset($data['region'])){ echo $data['region']; }?>">
								      <option value="" disabled selected>--- Pilih Kabupaten/Kota ---</option>
								    </select>
								</div>								
							</div>
							<div class="input-field col s12">
							<?php require_once 'tinymce.php';?>
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
								<br><br>
								<?php echo $this->recaptcha->render(); ?>
								<br>
								<p>
							      <input type="checkbox" id="term" name="term" />
							      <label for="term">I have read and agree to the <a href="<?php echo base_url(); ?>term"> Terms & Conditions </a></label>
							    </p>
								<br>
							</div>
							<div class="input-field col s12 center">
								<button class="btn btn-large waves-effect">Register</button>
								<br>
								<br>
								<br>
							</div>	
						<?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>	
	</main>
	
	<?php 
		if(isset($msg_signup_patner)){			
			if(isset($msg_signup_patner['status'])){
				if($msg_signup_patner['status']){
					?><script>sweetAlert('Congratulations!', '<?php echo $msg_signup_patner["msg"];?>', 'success');</script><?php
				}else{
					?><script>sweetAlert('Ups!', '<?php echo $msg_signup_patner["msg"];?>', 'error');</script><?php
				}
			}
			$this->session->unset_userdata('msg_signup_patner');
			$this->session->unset_userdata('data_signup_patner');
		}
	?>

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
				id_province = $( this ).val();
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
					.text("--- Pilih Kabupaten/Kota ---")
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