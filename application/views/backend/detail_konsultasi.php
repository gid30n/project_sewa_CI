			<div class="col s12 l9 right">
				<div class="row">
					<div class="col s12">
						<div class="card">
							<div class="card-content">								
								<?php foreach ($data as $row): ?>
									<h5 class="col s6 left"><b>Detail Konsultasi</b></h5>
									<?php if ($row['status'] === "0"): ?>
										<a href="<?php echo base_url("dashboard/konsultasi/update/").$row['id_konsult']; ?>" class=" col s6 btn waves-effect right"><i class="material-icons left">done</i>Konsultasi Sudah Dilakukan</a><br><br>
									<?php endif ?>													
									<h5>Nama	: <?php echo $row['name']; ?></h5>
									<h6>No telphone : <b><?php echo $row['no_telp']; ?></b></h6>
									<h6>Melakukan konsultasi pada : <?php echo $row['tgl_konsultasi']; ?> dan akan mengadakan acara pada tanggal : <b><?php echo $row['start']; ?></b></h6>
									<h6>Acara yang akan dibuat yaitu 
										<?php 
											if ($row['tamu'] === "1") {
												echo "<b>Pernikahan</b>";
											}elseif ($row['tamu'] === "2") {
												echo "<b>Pesta Ulang Tahun Anak</b>";
											}elseif ($row['tamu'] === "3") {
												echo "<b>Pesta Ulang Tahun Remaja</b>";
											}elseif ($row['tamu'] === "4") {
												echo "<b>Festival</b>";
											}elseif ($row['tamu'] === "5") {
												echo "<b>Meeting</b>";
											}elseif ($row['tamu'] === "6") {
												echo "<b>Acara Adat</b>";
											}elseif ($row['tamu'] === "7") {
												echo "<b>Garden or Beach Party</b>";
											}elseif ($row['tamu'] === "8") {
												echo "<b>Live Concert</b>";
											}else{
												echo "<b>Bazzar</b>";
											}
										?>
										 dan akan mengundang : 
										 <?php 
											if ($row['tamu'] === "1") {
												echo '<b>Kurang dari 25 Orang</b>';
											}elseif ($row['tamu'] === "2") {
												echo '<b>25-50 Orang</b>';
											}elseif ($row['tamu'] === "3") {
												echo '<b>50-100 Orang</b>';
											}elseif ($row['tamu'] === "4") {
												echo '<b>100-150 Orang</b>';
											}elseif ($row['tamu'] === "5") {
												echo '<b>150-200 Orang</b>';
											}elseif ($row['tamu'] === "6") {
												echo '<b>200-300 Orang</b>';
											}elseif ($row['tamu'] === "7") {
												echo '<b>Lebih dari 300 Orang</b>';
											}else{
												echo '<b>Belum Diketahui</b>';
											}
										?>
										 di laksankan di : <b><?php echo $row['lokasi'][0]; ?></b>
									</h6>
									<div class="row">
									<?php require_once 'tinymce.php';?>
										<div class="input-field">
											<div class="col s12">
												<h6><b>Deskripsi Acara : </b></h6>																					
											</div>
											<div class="col s12">
												<br class="hide-large-only">											
												<textarea name="des_acara" id="des_acara" class="materialize-textarea" placeholder="Masukkan deskripsi acara anda secara detail" disabled=""><?php echo $row['descript']; ?></textarea>
											</div>
										</div>
									</div>	
								<?php endforeach ?>														
							</div>							
						</div>
					</div>
				</div>
			</div>			