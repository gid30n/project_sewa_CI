
<main>
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="card">						
						<div class="card-content">
							<a href="#!" class="left btn btn-flat">Rincian Penyewaan</a>
							<table class="striped highlight">
								<thead>
									<tr class="col s12">
										<th data-field="no" class="col s1">No</th>
										<th data-field="img" class="col s3">Gambar</th>
										<th data-field="order" class="col s5">Order</th>
										<th data-field="opt" class="col s3">Option</th>
									</tr>
								</thead>
							
								<tbody>
									<?php $total_price = 0; $i = 1; foreach ( $this->cartsewania->contents() as $row) { ?>
										<?php $ads = $this->carts_model->get_ads($row['id']);?>
										<tr class="col s12">
											<td class="col s1"><?php echo $i;  $total_price += $ads['price'];?></td>
											<td class="col s3"><img src="<?php echo base_url().$ads['gallery'][0]['src'];?>" class="materialboxed col s12" style="padding:5%;"></td>
											<td class="col s5"><h5 class="nama_order"><b><?php echo $ads['title'];?></b></h5></td>
											<td class="col s3" style="padding:5%;"><a href="#modal" class="btn waves-effect left col s12 m6 modal-trigger" onclick="setForm('<?php echo $row["rowid"];?>');"><i class="material-icons">edit</i></a><a href="<?php echo base_url("carts/delete/").$row['rowid'];?>" class="btn waves-effect red white-text right col s12 m6" onclick="return confirm('Apakah anda ingin menghapus order <?php echo $ads["title"];?> ?')"><i class="material-icons">delete</i></a></td>
										</tr>
									<?php $i++; } ?>																		
								</tbody>
							</table>
							<h4>Total : <b><?php echo convert_rp($total_price);?></b></h4>														
						</div>
						<div class="card-action">
							<a href="#!" class="btn btn-large"><i class="material-icons left">done</i>Checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- MODAL EDIT -->
		<?php echo form_open(base_url().'carts/edit/', array('id' => 'edit_form'));?>
			<div id="modal" class="modal modal-fixed-footer">
				<div class="modal-content">
					<i class="medium material-icons left">local_post_office</i><h5>Jelaskan Kebutuhan Anda</h5>
					<div class="row divider"></div>
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
								<label for="tamu" class="teal-text col m3">Berapa Banyak Tamunya ? <sup class="red-text">*</sup></label>
								<br class="hide-on-med-and-up">
								<br class="hide-on-med-and-up">
							</div>
							<div class="col m9 s12">
								<select name="tamu" id="tamu">
							      <option value="" disabled selected>--- Pilih---</option>
							      <option value="1">< 25</option>
							      <option value="2">25-50</option>
							      <option value="3">50-100</option>
							      <option value="1337">100-150</option>
							      <option value="">150-200</option>
							      <option value="">200-300</option>
							      <option value="">> 300</option>
							      <option value="">Saya Belum Tahu</option>
							    </select>
							    <input type="text" id="tamu_lainnya" class="validate" name="tamu_lainnya" placeholder="Jumlah Tamu Lainnya">
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
				</div>
				<div class="modal-footer">
					<button type="reset" class="modal-action modal-close waves-effect waves-red btn-flat" value="batal">Batal</button>
					<button type="submit" class="modal-action modal-close waves-effect waves-green btn btn-flatn" value="submit">Submit</button>
				</div>
			</div>
		<?php echo form_close();?>
		<!-- MODAL END -->
	</main>
<script type="text/javascript">
	function setForm(id) {
		document.getElementById("edit_form").action += id;
	}
</script>