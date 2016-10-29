
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
										<th data-field="opt" class="col s3">Option</th4
									</tr>
								</thead>
							
								<tbody>
									<?php $total_price = 0; $i = 1; foreach ( $this->cartsewania->contents() as $row) { ?>
										<?php $ads = $this->carts_model->get_ads($row['id']);?>
										<tr class="col s12">
											<td class="col s1"><?php echo $i;  $total_price += $ads['price'];?></td>
											<td class="col s3"><img src="<?php echo base_url().$ads['gallery'][0]['src'];?>" class="materialboxed col s12" style="padding:5%;"></td>
											<td class="col s5"><h5 class="nama_order"><b><?php echo $ads['title'];?></b></h5></td>
											<td class="col s3" style="padding:5%;"><a href="#!" class="btn waves-effect left col s12 m6"><i class="material-icons">edit</i></a><a href="<?php echo base_url("carts/remove/").$row['rowid'];?>" class="btn waves-effect red white-text right col s12 m6"><i class="material-icons">delete</i></a></td>
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
	</main>