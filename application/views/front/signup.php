<main>
		<div class="container">		
			<div class="row">
				<div class="col m12 s12 white box">			
					<div class="sign-up-main">
						<i class="medium material-icons left">person_add</i><h5>Account Detail</h5>
						<hr>
						<br>
						<?php echo form_open('signup/validation');?>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="first_name" class="teal-text">Nama Depan <sup class="red-text">*</sup></label>																	
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">	
										<input type="text" id="first_name" class="validate" required="" name="first_name" placeholder="John" value="<?php if(isset($data['first_name'])){ echo $data['first_name']; } ?>">									
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field">							
									<div class="col m3 s12">
										<label for="last_name" class="teal-text">Nama Belakang <sup class="red-text">*</sup></label>
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">
										<input type="text" id="last_name" class="validate" required="" name="last_name" placeholder="Smith" value="<?php if(isset($data['last_name'])){ echo $data['last_name']; } ?>">																	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="acc_email" class="teal-text">Username <sup class="red-text">*</sup></label>									
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">
										<input type="text" id="acc_user" class="validate" required="" name="acc_user" placeholder="Sewania" value="<?php if(isset($data['acc_user'])){ echo $data['acc_user']; } ?>">																		
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="acc_email" class="teal-text">Email <sup class="red-text">*</sup></label>									
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">
										<input type="email" id="acc_email" class="validate" required="" name="acc_email" placeholder="johnsmith@email.com" value="<?php if(isset($data['acc_email'])){ echo $data['acc_email']; } ?>">																		
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="acc_pass" class="teal-text">Password <sup class="red-text">*</sup></label>									
										
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">
										<input type="password" id="acc_pass" class="validate" required="" name="acc_pass" placeholder="************" value="<?php if(isset($data['acc_pass'])){ echo $data['acc_pass']; } ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="re-acc_pass" class="teal-text">Re-Password <sup class="red-text">*</sup></label>					
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">
										<input type="password" id="re-acc_pass" class="validate" required="" name="re-acc_pass" placeholder="************" value="<?php if(isset($data['re_acc_pass'])){ echo $data['re_acc_pass']; } ?>">
										<span class="grey-text"><sup class="red-text">*</sup> Password at least have 5 character</span>
									</div>
								</div>								
							</div>																								
							<div class="col s12">
								<?php echo $this->recaptcha->render(); ?>
								<br>
								<p>
							      <input type="checkbox" id="term" name="term" />
							      <label for="term">I have read and agree to the <a href="<?php echo base_url(); ?>term"> Terms & Conditions </a></label>
							    </p>
								<br>
							</div>							
							<div class="input-field col s12 center">
								<button type="submit" class="btn btn-large waves-effect">Register</button>		
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
		if(isset($msg_signup)){
			if(isset($msg_signup['status'])){
				if($msg_signup['status']){
					?><script>sweetAlert('Congratulations!', '<?php echo $msg_signup["msg"];?>', 'success');</script><?php
				}else{
					?><script>sweetAlert('Congratulations!', '<?php echo $msg_signup["msg"];?>', 'error');</script><?php
				}
			}
			$this->session->unset_userdata('msg_signup');
			$this->session->unset_userdata('data_signup');
		}
	?>
