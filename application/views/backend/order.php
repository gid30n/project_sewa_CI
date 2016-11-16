<div class="col s12 l9 right">
	<div class="card white">
		<div class="card-content teal-text">						
			<div class="row">
				<div class="col m6 s12">
					<h5>Selamat Datang : <?php echo $user['first_name']." ".$user['last_name'];?></h5>
					<p>last logged in at: <?php echo convert_date($user['last_login'],"d-m-Y g:i A")." ".date('T');?></p>
				</div>
				<div class="col m6 s12">																							
					<div class="col l4 12 s12 right">
						<div class="card blue-grey darken-1">
							<div class="card-content white-text center-align">											
								<i class="material-icons medium">apps</i>
								<div class="divider"></div>
								<p>ADS : <b id="total_iklan"></b></p>
							</div>										
						</div>
					</div>																					
				</div>
			</div>
		</div>					
	</div>
</div>
<div class="col s12 l9 right">
	<div class="card white">
		<div class="card-content">
		<?php if($user['admin'] === "-9"){ ?>
			<a href="<?php echo base_url("dashboard/order/validation/").$data_detail[0]['id_order'];?>" class="btn right"><i class="material-icons left">done</i>Validasi Order</a>
		<?php }else{ ?>
			<a href="<?php echo base_url("dashboard-cus/order/validation/").$data_detail[0]['id_order'];;?>" class="btn right"><i class="material-icons left">done</i>Validasi Order</a>
		<?php };?>
		<div class="col s12">
			<div class="col s3">
				<h6>Nama	</h6>
			</div>
			<div class="col s9">
				<?php echo $data_detail[0]['nama'];?>
			</div>
			<hr>			
			<div class="col s3">
				<h6>Alamat	</h6>
			</div>
			<div class="col s9">
				<?php echo $data_detail[0]['alamat'];?>
			</div>		
			<hr>
			<div class="col s3">
				<h6>No Telp	</h6>
			</div>
			<div class="col s9">
				<?php echo $data_detail[0]['no_telp'];?>
			</div>
			<hr>
			<div class="col s3">
				<h6>Email	</h6>
			</div>
			<div class="col s9">
				<?php echo $data_detail[0]['email'];?>
			</div>
			<hr>
			<div class="col s3">
				<h6>Deskripsi </h6>
			</div>
			<div class="col s9">
				<p align="justify"><?php echo $data_detail[0]['ket'];?></p>
			</div>
			<hr>
			<div class="col s3">
				<h6>Tgl Order </h6>
			</div>
			<div class="col s9">
				<p align="justify"><?php echo convert_date($data_detail[0]['date_order'], "d-m-Y H:i:s");?></p>
			</div>
			<hr>
			<div class="col s3">
				<h6>Status	</h6>
			</div>			
			<div class="col s9">
				<?php if ($data_detail[0]['status_order'] === "new"): ?>					
					<i class="material-icons medium teal-text">fiber_new</i>
				<?php endif ?>				
			</div>																					
		</div>
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<table class="responsive-table">
							<thead>
								<tr>
									<th data-field="no">No</th>						
									<th data-field="tgl">Tanggal</th>
									<th data-field="item-paket">Order</th>
									<th data-field="jum_item">QTY</th>
									<th data-field="status">Harga</th>
									<th data-field="ops">Options</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; foreach ($data_detail as $row) { ?>
									<tr>
										<td><?php echo $i;?></td>
										<td><?php echo convert_date($row['date_order'], "d/m/Y H:i:s");?></td>
										<td><a href="<?php echo base_url('ads/').$row['slug'];?>" target="_blank"><?php echo $row['title'];?></a></td>
										<td><?php echo $row['jum_item'];?></td>
										<td><?php echo convert_rp($row['price']);?></td>
										<td><a href="<?php echo base_url('dashboard-cus/order/delete/').$row['id_ads'].'/'.$row['id_order'];?>" class="btn red"><i class="material-icons">delete</i></a></td>
									</tr>
								<?php $i++; }; ?>
							</tbody>
						</table>
					</div>					
				</div>
			</div>
			<div class="col s12">
				<a href="#!" class="btn col s12"><?php $total = 0; foreach ($data_detail as $row) {
					$total += $row['price']*$row['jum_item'];
				}; echo "Total : <b>".convert_rp($total)."</b>";?>				</a>				
			</div>				
		</div>					
		</div>					
	</div>
</div>
</div>
</main>