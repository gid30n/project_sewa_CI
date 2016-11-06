	<main>
		<div class="container">
			<div class="row">
				<ul class="collapsible white" data-collapsible="expandable">
					<li>
						<div class="collapsible-header"><i class="material-icons">swap_vert</i>Sort by ...</div>
						<div class="collapsible-body">
							<form action="">									
								<div class="row sort teal-text">
									<h5>Search</h5>
									<div class="col m6 s12">
										<input type="text" class="white" name="search" id="search" placeholder="Cari apa yang anda inginkan disini..">
									</div>
									<div class="col m6 s12">
										<select name="sort" id="sorting" class="white">
											<option value="" disabled selected>--- Pilih Tipe Sorting---</option>
											<option value="asc">ASC</option>
											<option value="desc">DESC</option>
										</select>
									</div>
									<h5>Price Range</h5>
									<div class="col s12">
										<div id="slider_price"></div>
										<div class="col m3 s6">
											<input type="number" id="min_price" readonly="" name="min_price">
										</div>
										<div class="col m3 s6">
											<input type="number" id="max_price" readonly="" name="max_price">
										</div>											 											 
									</div>
									<div class="col s12 center-align">
										<button type="submit" class="btn btn-large waves-effect waves-green"><i class="material-icons left">search</i>Search</button>
									</div>										
								</div>
							</form>
						</div>
					</li>
					<li>
						<div class="collapsible-header active"><i class="material-icons">store</i><?php echo $data[0]['sub_kategori'];?></div>
						<div class="collapsible-body">
							<div class="row store">
								<?php foreach ($data as $row) { ?>
									<div class="col s12 m4">
										<div class="card hoverable">
											<div class="card-image waves-effect waves-block waves-light">
												<img class="activator" src="<?php echo base_url().'images/?w=150&h=150&src='.$row['gallery'][0]['src'];?>">
											</div>
											<div class="card-content">
												<span class="card-title activator grey-text text-darken-4"><?php echo $row['title'];?><i class="material-icons right">more_vert</i></span>
												<br>
												<!-- <span class="teal-text">Rating :<i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i></span><br> -->
												<i class="tiny material-icons">room</i><?php $lokasi = ""; foreach($row['lokasi'] as $rw){ $lokasi .=$rw.", ";}; echo $lokasi;?>
												<div class="divider"></div>
												<span><b><?php echo $row['price'];?></b></span>																      
											</div>
											<div class="card-reveal">
												<span class="card-title grey-text text-darken-4"><?php echo $row['title'];?><i class="material-icons right">close</i></span>
												<p style="word-wrap: break-word"><?php echo mb_strimwidth($row['descript'], 0, 250, "..."); ?></p>
												<p><a href="<?php echo base_url();?>ads/<?php echo $row['slug_ads'];?>" class="btn waves-effect">Detail</a></p>
											</div>
										</div>
									</div>
								<?php }; ?>
							</div>									
						</div>								
					</li>					
				</ul>	
			</div>
		</div>
	</main>

	<script>
	$(document).ready(function(){
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('api/search');?>",
			data: { 
				search: "T", 
				min_price: 3000,
				max_price: 1200000,
				sort: "asc",
				'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'
			}
		})
		.done(function( data ) {
			console.log( "Data Saved: " );
			console.log(data);
		});
	});
	</script>