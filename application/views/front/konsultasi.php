	<main>
		<div class="parallax-container" style="height: 500px;">
			<div class="parallax"><img src="http://www.sewania.com/assets/img/kategori/4.jpg" width="50px"></div>
		</div>
		<div class="container">
			<div class="row">				
				<div class="col s12">
					<div class="card">
						<div class="card-content">							
							<h5><b>Konsultasikan acara yang akan anda buat dengan kami, kami akan bantu mencari solusi yang terbaik.</b></h5>
							<div class="divider"></div>
							<?php echo form_open("konsultasi/post"); ?>
								<div class="row">
									<div class="row">										
								        <div class="input-field col m6 s12">
								          <input placeholder="Nama Anda" name="name" id="name" type="text" class="validate">								          
								        </div>
								        <div class="input-field col m6 s12">
								          <input id="tlp" type="text" name="tlp" class="validate" placeholder="No Telphone Yang Dapat Kami Hubungi ">								          
								        </div>
								      </div>
									</div>
									<div class="row">
									<div class="input-field">
										<div class="col s12">
											<label for="acara" class="teal-text left">Acara Seperti Apa ? <sup class="red-text">*</sup></label>
											<br class="hide-large-only">
											<br class="hide-large-only">
										</div>
										<div class="col s12">
											<select name="acara" id="acara">
										      <option value="" disabled selected>--- Pilih Acara ---</option>
										      <option value="1">Pernikahan</option>
										      <option value="2">Pesta Ulang Tahun Anak</option>
										      <option value="3">Pesta Ulang Tahun Remaja</option>
										      <option value="4">Festival</option>
										      <option value="5">Meeting</option>
										      <option value="6">Acara Adat</option>
										      <option value="7">Garden or Beach Party</option>
										      <option value="8">Live Concert</option>
										      <option value="9">Bazzar</option>
										    </select>
										</div>								
									</div>
								</div>
								<div class="row">
									<div class="input-field">
										<div class="col s12">
											<label for="tamu" class="teal-text left">Berapa Banyak Tamunya ? <sup class="red-text">*</sup></label>
											<br class="hide-large-only">
											<br class="hide-large-only">
										</div>
										<div class="col s12">
											<select name="tamu" id="tamu">
										      <option value="" disabled selected>--- Pilih Jumlah Tamu ---</option>
										      <option value="1">Kurang dari 25</option>
										      <option value="2">25-50 </option>
										      <option value="3">50-100</option>
										      <option value="4">100-150</option>
										      <option value="5">150-200</option>
										      <option value="6">200-300</option>
										      <option value="7">Lebih dari 300</option>
										      <option value="8">Belum Tahu</option>										      
										    </select>
										</div>								
									</div>
								</div>
								<div class="row">
								<?php require_once 'tinymce.php';?>
									<div class="input-field">
										<div class="col s12">
											<label for="des_acara" class="teal-text left">Deskripsi Acara <sup class="red-text">*</sup></label>						<br>				
										</div>
										<div class="col s12">
											<br class="hide-large-only">											
											<textarea name="des_acara" id="des_acara" class="materialize-textarea" placeholder="Masukkan deskripsi acara anda secara detail"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="input-field">
										<div class="col s12">
											<label for="start_acara" class="teal-text left" style="word-wrap: break-word">Kapan Acara Berlangsung ? <sup class="red-text">*</sup></label>																
										</div>
										<div class="col s12">
											<br class="hide-large-only">											
											<input type="date" id="start_acara" class="validate datepicker" required="" name="start_acara" placeholder="klik untuk menampilkan kalender">									
										</div>
									</div>
								</div>
								<div class="row">
									<div class="input-field">
										<div class="col s12">
											<label for="daerah" class="teal-text left">Daerah Acara Berlangsung ? <sup class="red-text">*</sup></label>
											<br class="hide-large-only">
											<br class="hide-large-only">
										</div>
										<div class="col s12">
											<select name="daerah" id="daerah">										      									      
										    </select>
										</div>								
									</div>
								</div>
								<div class="row">
									<?php echo $this->recaptcha->render(); ?>
									<br>
									<button type="submit" class="btn waves-effect btn-large right">Submit</button>
								</div>
								<?php echo form_close();?>
							</form>		
						</div>						
					</div>
				</div>				
			</div>
		</div>
	</main>
	
	<?php 
		if(isset($msg_konsultasi)){			
			if(isset($msg_konsultasi['status'])){
				if($msg_konsultasi['status']){
					?><script>sweetAlert('Congratulations!', '<?php echo $msg_konsultasi["msg"];?>', 'success');</script><?php
				}else{
					?><script>sweetAlert('Congratulations!', '<?php echo $msg_konsultasi["msg"];?>', 'error');</script><?php
				}
			}
			$this->session->unset_userdata('msg_konsultasi');
			$this->session->unset_userdata('data_konsultasi');
		}
	?>