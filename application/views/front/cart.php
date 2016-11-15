<main>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card">						
					<div class="card-content">
						<div class="row">
							<div class="col s12">
								<ul class="tabs">
									<li class="tab col s3"><a class="active teal-text" href="#cart">Cart</a></li>
									<li class="tab col s3"><a class="active teal-text" href="#checkout">Checkout</a></li>									
								</ul>
							</div>
							<div id="cart" class="col s12">	
								<br>								
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
										<?php $rowid = ""; $total_price = 0; $i = 1; foreach ( $this->cartsewania->contents() as $row) { ?>
										<?php $ads = $this->carts_model->get_ads($row['id']);?>										
										<tr class="col s12">										
											<td class="col s1"><?php echo $i;  $total_price += $ads['price'];?></td>
											<td class="col s3"><img src="<?php echo base_url().$ads['gallery'][0]['src'];?>" class="materialboxed col s12" style="padding:5%;"></td>
											<td class="col s5"><h5 class="nama_order"><b><?php echo $ads['title'];?></b></h5></td>
											<td class="col s3" style="padding:5%;"><a href="#edit" class="btn waves-effect left col s12 m6 modal-trigger" onclick="setForm('<?php $rowid = $row['rowid']; echo $row["rowid"];?>');"><i class="material-icons">edit</i></a><a href="<?php echo base_url("carts/delete/").$row['rowid'];?>" class="btn waves-effect red white-text right col s12 m6" onclick="return confirm('Apakah anda ingin menghapus order <?php echo $ads["title"];?> ?')"><i class="material-icons">delete</i></a></td>
										</tr>
										<?php $i++; } ?>																
									</tbody>
								</table>
								<h5>Total : <b><?php echo convert_rp($total_price);?></b></h5>
								<sup><b>Klik Tab Checkout Untuk Melanjutkan Proses Order.</b></sup>					
								<div class="row divider"></div>									
							</div>
							<div id="checkout" class="col s12">
								<h5><b>Data Customer</b></h5>
								<div class="row divider"></div>
								<?php echo form_open(); ?>
									<div class="col s12 m3">
										<h6>Nama</h6>
									</div>
									<div class="col s12 m9">
										<input type="text" id="cus_nama" name="cus_nama" placeholder="Masukan Nama Anda" class="validate" required="">
									</div>
									<div class="col s12 m3">
										<h6>No Telephone</h6>
									</div>
									<div class="col s12 m9">
										<input type="text" id="cus_telp" name="cus_telp" placeholder="Masukan No Yang Dapat Kami Hubungi" class="validate" required="">
									</div>
									<div class="col s12 m3">
										<h6>Email</h6>
									</div>
									<div class="col s12 m9">
										<input type="email" id="cus_email" name="cus_email" placeholder="Masukan Email Anda" class="validate" required="">
									</div>
									<div class="col s12 m3">
										<h6>Alamat</h6>
									</div>
									<div class="col s12 m9">
										<textarea name="cus_alamat" id="cus_alamat" placeholder="Masukan Alamat Anda" class="validate materialize-textarea" required=""></textarea>											
									</div>
									<div class="col s12 m3">
										<h6>Hal Yang Perlu Kami Ketahui <sup class="grey-text">*kosongkan jika tidak ada</sup></h6>
									</div>
									<div class="col s12 m9">
										<textarea name="cus_descript" id="cus_descript" placeholder="Masukan Alamat Anda" class="materialize-textarea" required=""></textarea>											
									</div>
									<div class="col m6 s12">
										<?php echo $this->recaptcha->render(); ?>
									</div>
									<div class="col m6 s12">
										<button class="btn waves-effect col s12" type="submit"><i class="material-icons left">send</i>Send Order</button>
									</div>
								<?php echo form_close(); ?>
							</div>							
						</div>																					
					</div>						
				</div>
			</div>
		</div>
	</div>		
</main>
<!-- Modal Structure -->
<div id="edit" class="modal">
	<div class="modal-content">
		<h4>Edit Jumlah Item</h4>
		<?php echo form_open(base_url().'carts/edit/'.$rowid, array('id' => 'edit_form')); ?>		
			<div class="col s12">
				<input type="number" placeholder="Jumlah item" name="jum_item" id="jum_item" class="validate" required="" value="<?php echo $this->cartsewania->get_item($rowid)['jum_item'];  ?>">
			</div>		
	</div>
	<div class="modal-footer">		
		<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Cancel</a>
		<button type="submit" class="btn waves-effect waves-green">Change</button>
		<?php form_close(); ?>
	</div>
</div>