
<main>
		<div class="container">		
			<div class="row">
				<div class="col m12 s12 white box">			
					<div class="sign-up-main">
						<div class="row">
							<div class="col m6">
								<img src="<?php echo base_url().$data['gallery'][0]['src'];?>" alt="<?php echo $data['gallery'][0]['alt'];?>" title="<?php echo $data['gallery'][0]['title'];?>" class="responsive-img left">
							</div>
							<div class="col m6">
								<h5><?php echo $data['title'];?></h5>
								<div class="row divider"></div>
								<h5><?php echo $data['price'];?></h5>								
							</div>
						</div>
						<i class="medium material-icons left">local_post_office</i><h5>Jelaskan Kebutuhan Anda</h5>
						<div class="row divider"></div>
						<br>
						<form action="">
							<input type="hidden" name="id_ads" value="<?php echo $this->encryption->encrypt($data['id_ads']);?>">
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="telp" class="teal-text col m3">Telephone/Phone <sup class="red-text">*</sup></label>																	
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">	
										<input type="text" id="telp" class="validate" required="" name="telp" placeholder="0361000000000">									
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="acara" class="teal-text col m3">Acara Seperti Apa ? <sup class="red-text">*</sup></label>
										<br class="hide-on-med-and-up">
										<br class="hide-on-med-and-up">
									</div>
									<div class="col m9 s12">
										<select name="acara" id="acara">
									      <option value="" disabled selected>--- Pilih Tipe Acara---</option>
									      <option value="1">Option 1</option>
									      <option value="2">Option 2</option>
									      <option value="3">Option 3</option>
									      <option value="1337">Lainnya</option>
									    </select>
									    <input type="text" id="acara_lainnya" class="validate" required="" name="acara_lainnya" placeholder="Acara Lainnya">
									</div>								
								</div>
							</div>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="tamu" class="teal-text col m3">Berapa Banyak Tamunya ? <sup class="red-text">*</sup></label>
										<br class="hide-on-med-and-up">
										<br class="hide-on-med-and-up">
									</div>
									<div class="col m9 s12">
										<select name="tamu" id="tamu">
									      <option value="" disabled selected>--- Pilih---</option>
									      <option value="1">Option 1</option>
									      <option value="2">Option 2</option>
									      <option value="3">Option 3</option>
									      <option value="1337">Lainnya</option>
									    </select>
									    <input type="text" id="tamu_lainnya" class="validate" required="" name="tamu_lainnya" placeholder="Jumlah Tamu Lainnya">
									</div>																	
								</div>
							</div>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="alamat" class="teal-text col m3">Alamat/Lokasi Acara <sup class="red-text">*</sup></label>																
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">	
										<input type="text" id="alamat" class="validate" required="" name="alamat" placeholder="Jln. Bla Bal">									
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="start_acara" class="teal-text col m3">Kapan Anda Membutuhkan ? <sup class="red-text">*</sup></label>																
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">	
										<input type="date" id="start_acara" class="validate datepicker" required="" name="start_acara" placeholder="klik untuk menampilkan kalender">									
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="end_acara" class="teal-text col m3">Kapan Anda Mengembalikan ? <sup class="red-text">*</sup></label>																
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">	
										<input type="date" id="end_acara" class="validate datepicker" required="" name="end_acara" placeholder="klik untuk menampilkan kalender">									
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="des_acara" class="teal-text col m3 s12">Hal Yang Perlu Kami Ketahui Tentang Acara Anda ? <sup class="red-text">*</sup></label>										
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">
										<br class="hide-on-med-and-up">
										<textarea name="des_acara" id="des_acara" class="materialize-textarea" placeholder="Masukkan deskripsi acara anda"></textarea>
									</div>
								</div>
							</div>	
							<div class="input-field col s12 center">
								<button type="submit" class="btn btn-large waves-effect">Order</button>		
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