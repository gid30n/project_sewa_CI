<br>
	<br>	
	<div class="container">
		<div class="row">
			<div class="col m6 s10 white black-text push-m3 push-s1 hoverable">
				<div class="col s12">
					<img src="<?php echo base_url();?>assets/img/logo/logo2.png" class="responsive-img" alt="">
					<hr>
					<br/>
					<div class="col s12">
						<div class="row">
							<?php echo form_open('process-forgot', array('class' => 'col s12'));?>
						      <div class="row">
						        <div class="input-field col s12">
						          <i class="material-icons prefix">email</i>
						          <input id="icon_prefix" type="email" class="validate" name="email">
						          <label for="icon_prefix">Email</label>
						        </div>						        
						      </div>
						      <div class="col s12 center-align">
						      	<button class=" col s12 btn btn-large waves-effect teal white-text" type="submit">Reset Password</button>
						      </div>
						    <?php echo form_close();?>
						  </div>
					</div>
					<hr>
					<div class="col s12 center box-bawah">
						<a href="login">Back to login</a>											
					</div>					
				</div>				
			</div>
			<div class="col s12 center">
				<h6>Don't have an account ?</h6>
				<a href="signup">Sign Up Now !</a>
			</div>						
		</div>
	</div>