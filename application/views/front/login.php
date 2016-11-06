<br>
<br>	
<div class="container">
	<div class="row">
		<div class="col m6 s10 white black-text push-m3 push-s1 hoverable">
			<div class="col s12">
				<img src="assets/img/logo/logo2.png" class="responsive-img" alt="">
				<hr>
				<div class="col s12">
					<div class="row">
						<?php echo form_open('valid', array("class" => "col s12"));?>
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">account_circle</i>
									<?php if (!empty($dt_username)) {
										echo '<input id="icon_prefix" type="text" class="validate" name="uname" value="'.$dt_username.'">';
									}else{
										echo '<input id="icon_prefix" type="text" class="validate" name="uname">';
									}
									?>									
									<label for="icon_prefix">Username</label>
								</div>
								<div class="input-field col s12">
									<i class="material-icons prefix">lock</i>
									<?php if (!empty($dt_password)) {
										echo '<input id="icon_prefix" type="password" class="validate" name="upass" value="'.$dt_password.'">';
									}else{
										echo '<input id="icon_prefix" type="password" class="validate" name="upass">';
									}
									?>									
									<label for="icon_telephone">Password</label>
								</div>
							</div>
							<div class="col s12 center-align">
								<button class=" col s12 btn btn-large waves-effect teal white-text" type="submit">Login</button>
							</div>
						<?php echo form_close();?>
					</div>
				</div>
				<hr>
				<div class="col s12 valign-wrapper">
					<div class="col s6 left valign">
						<p>
							<input type="checkbox" id="remember" />
							<label for="remember">Keep me logged in</label>
						</p>
					</div>
					<div class="col s6 valign">
						<a href="forgot-pass" class="waves-effect right">Lost your password ?</a>
					</div>						
				</div>					
			</div>				
		</div>
		<div class="col s12 center">
			<h6>Don't have an account ?</h6>
			<a href="signup">Sign Up Now !</a>
		</div>						
	</div>
</div>

<?php  
	if (!empty($dt_username) && !empty($dt_brand)) {
?>
	<script>swal({   title: "Terima Kasih ",   text: "<img src='assets/img/ico/msg_vendor.png' class='responsive-img' />", html: true });</script>	
<?php 
	}elseif (!empty($dt_username) && empty($dt_brand)) {		
?>
	<script>swal({   title: "Terima Kasih ",   text: "<img src='assets/img/ico/msg_user.png' class='responsive-img' />", html: true });</script>
<?php	
	}
?>

<?php
if(isset($msg_login)){
	if(isset($msg_login['status'])){
		if($msg_login['status']){
			?><script>sweetAlert('Congratulations!', '<?php echo $msg_login["msg"];?>', 'success');</script><?php
			if($msg_login['admin'] === "-9"){
				?><script>
				function redirect(){
					window.location = "<?php echo base_url();?>dashboard"
				}
				setTimeout(redirect, 2000);
				</script><?php
			}else{
				?><script>
				function redirect(){
					window.location = "<?php echo base_url();?>"
				}
				setTimeout(redirect, 2000);
				</script><?php
			}
		}else{
			?><script>sweetAlert('Ups!', '<?php echo $msg_login["msg"];?>', 'error');</script><?php
		}
	}
	$this->session->unset_userdata('msg_login');
}else{
	$user = $this->session->userdata("user");
	if (isset($user)) {
		if($user['admin'] !== "-9"){
			redirect('dashboard-cus','refresh');
		}else{
			redirect('dashboard','refresh');
		}	
	}
}
?>