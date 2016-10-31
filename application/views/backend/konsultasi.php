			<div class="col s12 l9 right">
				<div class="row">
					<div class="col s12">
						<div class="card">
							<div class="card-content">
							<?php 
								if ($kondisi === "Baru") {
									echo '<h5><b>Konsultasi Baru</b></h5>';
								}else{
									echo '<h5><b>History Konsultasi</b></h5>';
								}
							?>							

								<div class="row">
									<?php foreach ($data as $row) { ?>																		
									<div class="col s12 m6">
										<div class="card teal">
											<div class="card-content white-text">
												<span class="card-title"><b class="truncate left"><?php echo $row['name']; ?></b> <b class="right"><?php echo $row['tgl_konsultasi']; ?></b></span>
												<br>
												<p class="center-align truncate"><?php echo mb_strimwidth($row['descript'], 0, 250, "..."); ?></p>
											</div>
											<div class="card-action">
												<a href="<?php echo base_url("dashboard/konsultasi/details/").$row['id_konsult']; ?>">Detail</a>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>

							</div>							
						</div>
					</div>
				</div>
			</div>