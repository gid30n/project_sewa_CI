<main>
	<div class="row">
		<ul class="collapsible white" data-collapsible="expandable">
			<li>
				<div class="collapsible-header"><i class="material-icons">swap_vert</i>Sort by ...</div>
				<div class="collapsible-body">							
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
							<button class="btn btn-large waves-effect waves-green" onclick="pencarian();"><i class="material-icons left">search</i>Search</button>
						</div>										
					</div>							
				</div>
			</li>
			<li>
				<div class="collapsible-header active"><i class="material-icons">store</i>Tenda</div>
				<div class="collapsible-body">
					<div class="row store" id="content-data">
						<?php foreach ($data as $d): ?>						
							<div class="col s12 m4">
								<div class="card hoverable">
								    <div class="card-image waves-effect waves-block waves-light">
								      <a href="<?= base_url("ads/").$d['slug_ads']; ?>"><img height="250" class="activator" src="<?= base_url().$d['gallery'][0]['src']; ?>"></a>
								    </div>
								    <div class="card-content">
								      <a href="<?= base_url("ads/").$d['slug_ads']; ?>"><span class="card-title activator grey-text text-darken-4">a<?= $d['title']; ?><!-- <i class="material-icons right">more_vert</i> --></span></a>
								      <br>
								      <!-- <span class="teal-text">Rating :<i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i></span><br> -->
								      <i class="tiny material-icons">room</i>
								      <?php $lokasi = ""; ?>
								      <?php foreach ($d['lokasi'] as $l): ?>
								      <?php $lokasi .= $l.",";?>
								      <?php endforeach ?>
								      <?= $lokasi; ?>
								      <div class="divider"></div>
								      <span><b><?= $d['price']; ?></span>																      
								    </div>
								    <!-- <div class="card-reveal">
								      <span class="card-title grey-text text-darken-4"><?= $d['title']; ?><i class="material-icons right">close</i></span>
								      <p class="truncate"></p>
								      <p><a href="ads-detail" class="btn waves-effect">Detail</a></p>
								    </div> -->
								  </div>
							</div>
						<?php endforeach ?>												
					</div>									
				</div>								
			</li>
		</ul>	
	</div>
</main>

	<script>
		function pencarian(){
			var input_search = $('#search').val();
			var input_sorting = $('#sorting').val();
			var input_minprice = $('#min_price').val();
			var input_maxprice = $('#max_price').val();
			
			if (input_search.length != 0) {
				if (input_sorting.length != 0) {
					if (input_minprice.length != 0) {
						if (input_maxprice.length != 0) {
							
							$.ajax({
								method: "POST",
								url: "<?php echo base_url('api/search'); ?>",
								data: {
									search: input_search,
									min_price: input_minprice,
									max_price: input_maxprice,
									sort:input_sorting,
									'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'
								}								
							}).done(function( data ){
								console.log(data);
							});
						}
					}
				}
			}
		}	
	</script>