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
		<a href="#!" class="btn"><i class="material-icons left">done</i>Validasi Order</a>
			<table class="responsive-table">
				<thead>
					<tr>
						<th data-field="no">No</th>						
						<th data-field="tgl">Tanggal</th>
						<th data-field="item-paket">Order</th>
						<th data-field="jum_item">QTY</th>
						<th data-field="status">Status</th>
						<th data-field="ops">Options</th>
					</tr>
				</thead>

				<tbody>
					<?php $data_order = $this->order_model->get_all_order();?>
					<?php $i = 1; foreach ($data_order as $row) { ?>
						<tr>
							<td><?php echo $i;?></td>							
							<td><?php echo convert_date($row['date_order'], 'd/m/Y');?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['name'];?></td>
							<td>Sedang di Proses</td>
							<td class="hide-on-large-only">
								<button class="btn orange waves-effect col s2"><i class="material-icons left">info</i></button>
								<button class="btn red waves-effect col s2"><i class="material-icons left">cancel</i></button>
								<button class="col s2 btn teal waves-effect"><i class="material-icons left">done</i></button>
							</td>
							<td class="hide-on-med-and-down">
								<button class="col s12 btn orange waves-effect"><i class="material-icons left">info</i>Detail</button>
								<button class="col s12 btn red waves-effect"><i class="material-icons left">cancel</i>Cancel</button>
								<button class="col s12 btn teal waves-effect"><i class="material-icons left">done</i>Validasi</button>
							</td>
						</tr>
					<?php $i++; } ?>																					
				</tbody>
			</table>
		</div>					
	</div>
</div>
</div>
</main>