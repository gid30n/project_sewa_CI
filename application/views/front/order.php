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