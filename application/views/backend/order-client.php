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
			<table class="responsive-table">
				<thead>
					<tr>
						<th data-field="no">No</th>
						<th data-field="nama">Atas Nama</th>
						<th data-field="tgl">Tanggal</th>
						<th data-field="item-paket">Order</th>
						<th data-field="jum_item">QTY</th>
						<th data-field="status">Status</th>
						<th data-field="ops">Options</th>
					</tr>
				</thead>

				<tbody>
																					
				</tbody>
			</table>
		</div>					
	</div>
</div>
</div>
</main>