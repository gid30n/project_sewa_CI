<main>		
	<div class="container">		
		<div class="row">
			<div class="col m12 s12 white box">			
				<div class="sign-up-main">
					<div class="row">
						<div class="col m6">
							<img src="<?php echo base_url().$data['gallery'][0]['src'];?>" alt="<?php echo $data['gallery'][0]['alt'];?>" title="<?php echo $data['gallery'][0]['title'];?>" class="responsive-img left">
						</div>
<<<<<<< HEAD
						<i class="medium material-icons left">local_post_office</i><h5>Jelaskan Kebutuhan Anda</h5>
						<div class="row divider"></div>
						<br>
						<?php echo form_open(base_url().'order/add');?>
							<input type="hidden" name="id_ads" value="<?php echo $this->encryption->encrypt($data['id_ads']);?>">
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="telp" class="teal-text col m3">Nama Lengkap <sup class="red-text">*</sup></label>																	
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">	
										<input type="text" class="validate" required="" name="nama" placeholder="Mickel Jordan">									
									</div>
								</div>
							</div>
							<div class="row">
								<div class="input-field">
									<div class="col m3 s12">
										<label for="telp" class="teal-text col m3">Email <sup class="red-text">*</sup></label>																	
									</div>
									<div class="col m9 s12">
										<br class="hide-on-med-and-up">	
										<input type="email" class="validate" required="" name="email" placeholder="jordan.mickle@example.com">									
									</div>
								</div>
							</div>
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
									      <option value="Pernikahan">Pernikahan</option>
									      <option value="Pesta Ulang Tahun Anak">Pesta Ulang Tahun Anak</option>
									      <option value="Pesta Ulang Tahun Remaja">Pesta Ulang Tahun Remaja</option>
									      <option value="Festival">Festival</option>
									      <option value="Meeting/Perusahaan">Meeting/Perusahaan</option>
									      <option value="Acara Adat">Acara Adat</option>
									      <option value="Garden or Beach Party">Garden or Beach Party</option>
									      <option value="Live Konser">Live Konser</option>
									      <option value="Bazzar">Bazzar</option>
									      <option value="other">Lainnya</option>
									    </select>
									    <input type="text" id="acara_lainnya" class="validate" name="acara_lainnya" placeholder="Acara Lainnya">
=======
						<div class="col m6">
							<h5><?php echo $data['kategori']; ?>: <span><?php echo $data['sub_kategori']; ?></span></h5> 
							<h6><?php echo $data['title']; ?></h6>
							<div class="row divider"></div>
							<h5><?php echo $data['price']; ?></h5>


							<!-- kalau dia berupa perelatan tampilin jumlah item -->
							<?php echo form_open(base_url().'order/add'); ?>
								<input type="hidden" name="id_ads" value="<?php echo $this->encryption->encrypt($data['id_ads']);?>">
								<p><?php echo mb_strimwidth($data['descript'],0,250, "...."); ?></p>
								<?php if ($data['kategori'] === "Peralatan Pesta"): ?>
									<div class="col s12">
										<input type="number" placeholder="Jumlah item" name="jum_item" id="jum_item" class="validate" required="">
>>>>>>> a4353d1d3abddda67130b40d896364cc1aa9f607
									</div>								
								<?php endif ?>								
							<!-- kalau emang tanggal bikin masalah pas ada order, ini view dia masukin tanggal pas setiap order
								<div class="col m3 s12">
									<label for="">Tgl Sewa <sup class="red-text">*</sup></label>
								</div>
								<div class="col m9 s12">
									<input type="date" class="datepicker" placeholder="Tanggal Sewa" id="tgl_sewa" name="tgl_sewa" required="">
								</div>
								<div class="col m3 s12">
									<label for="">Tgl Kembali <sup class="red-text">*</sup></label>
								</div>
								<div class="col m9 s12">
									<input type="date" class="datepicker" placeholder="Tanggal Kembali" id="tgl_kembali" name="tgl_kembali" required="">
								</div> -->
								<div class="col s12">
									<button class="btn waves-effect right" type="submit"><i class="material-icons left">shopping</i>Add To Cart</button>
								</div>
							<?php echo form_close(); ?>
						</div>
					</div>								
				</div>
			</div>
		</div>
	</div>	
</main>