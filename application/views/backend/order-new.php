		<div class="col s12 l9 right">
				<div class="card white">
					<div class="card-content teal-text">						
						<div class="row">
							<div class="col s12">
								<div class="col s12">
									<h5 class="left"><i class="material-icons">shopping_cart</i> Pesan</h5>				
								</div>								
								<hr class="hide-on-med-and-down">
								<!-- <div class="col m6 s12">
									<p>
      									<input type="checkbox" onclick="checkAll(this)" id="checkAll" />
      									<label for="checkAll">Select: All | </label>
      									<a class="waves-effect waves-light red btn"><i class="material-icons right">close</i>Delete</a>
    								</p>
								</div> -->
								<!-- <div class="col m6 s12">
									<div class="row">
										<div class="input-field">
											<div class="col m2 s3">
												<label for="filter">Search <br>
                      								<a title="clear filter" class="clear-filter" href="#clear">[clear]</a>
                      							</label>		
											</div>
											<div class="col m10 s9">
												<input type="text" id="search" name="search" placeholder="filter">
												<br class="hide-on-med-and-up">
												<br class="hide-on-med-and-up">
											</div>
										</div>
									</div>
								</div> -->
								<div class="row">											
									<?php foreach ($data_order as $row) { ?>
										<div class="col s12 m4">										
											<div class="card">
												<div class="card-image">
													<span class="pricetag teal">New</span>
													<?php if (empty($row['ava'])): ?>
														<img src="<?php echo base_url(); ?>assets/img/ava/1.png">
													<?php else: ?>
														<?php if ($row['jenis_kelamin'] === "Laki - Laki"): ?>
															<img src="<?php echo base_url(); ?>assets/img/ava/1/<?php echo $row['ava']; ?>">
														<?php else: ?>
															<img src="<?php echo base_url(); ?>assets/img/ava/0/<?php echo $row['ava']; ?>">
														<?php endif ?>														
													<?php endif ?>													
													<span class="card-title bening col s12"><b><?php echo $row['nama'];?></b></span>
												</div>
												<div class="card-content black-text">
													<a href="#!" class="black-text"><i class="small material-icons left">perm_contact_calendar</i><?php echo $row['date'];?></a><br>				              
												</div>
												<div class="card-action">
													<ul>
														<li><a href="#!" class="black-text"><?php echo $row['price'];?><span class="new badge" data-badge-caption="Total Item"><b><?php echo $row['total_item'];?></b></span></a><br></li>
														<li><br></li>
														<li><a href="<?php echo base_url(); ?>dashboard-cus/order/detail/<?php echo $row['id'];?>">Detail</a></li>
													</ul>																											
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
		</div>