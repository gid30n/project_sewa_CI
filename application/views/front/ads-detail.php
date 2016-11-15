<main>
		<!-- breadcrumb -->
	    <div class="breadcrumb-wrapper container">
	      	<div class="col s12">
	        	<a href="#" class="breadcrumb"><i class="material-icons breadcrumb-home">home</i></a>
	        	<a href="#" class="breadcrumb"><?php echo $data['kategori'];?></a>
	        	<a href="#" class="breadcrumb"><?php echo $data['sub_kategori'];?></a>
	        	<a href="#" class="breadcrumb"><?php echo $data['super_sub_kategori'];?></a>
	        	<a href="#" class="right back">Back to Results</a>
	      	</div>
	    </div>
		<!-- end of breadcrumb -->

		<div class="container">
			<div class="row">
				<!-- ads details content -->
				<div class="col s12 m9">
					<div class="ads-details-wrapper card white">
						<h2 class="ads-details-title"> <?php echo $data['title'];?>
						<div class="divider"></div>
						<div class="ads-details-info">
							<span class="date"><i class="tiny material-icons valign-mid">access_time</i> <?php echo convert_date($data['date_publish'], "d-m-Y h:i A");?> </span> - <span class="category"><?php echo $data['super_sub_kategori'];?> </span>- <span class="item-location"><i class="tiny material-icons valign-mid">place</i> <?php $lokasi = ""; foreach ($data['lokasi'] as $row) { $lokasi .= $row.", "; }; echo $lokasi; ?> </span>
						</div>
						<div class="ads-details-img">
              				<h1 class="pricetag"><?php echo $data['price'];?></h1>
              					<?php $gallery = $data['gallery'];?>
              					<ul class="bxslider">
              						<?php foreach ($gallery as $row) {?>
              							<li><img src="<?php echo base_url().$row['src'];?>" alt="<?php echo $row['alt'];?>" title="<?php echo $row['title'];?>" /></li>
              						<?php } ?>
              					</ul>
              					<div id="bx-pager">
	              					<?php $i = 0; foreach ($gallery as $row) { ?>
		              						<a class="thumb-item-link" data-slide-index="<?php echo $i;?>" href="<?php echo base_url().$row['src'];?>">
		              							<img src="<?php echo base_url().$row['src'];?>" alt="<?php echo $row['alt'];?>" title="<?php echo $row['title'];?>" class="valign-mid"/>
		              						</a> 
	              					<?php }?>
              					</div>
						</div>
						<div class="ads-details-content">
							<h5 class="list-title ads-details-title"><strong>Ads Details</strong></h5>
							<div class="row">
								<div class="col s12">
									<?php echo $data['descript'];?>					                
								</div>													  														
							</div>
						</div>
					</div>
				</div>
				<!-- end of ads details content -->

				<!-- ads details sidebar -->
				<div class="col s12 m3">
					<div class="ads-details-wrapper card white row">
						<h3 class="ads-details-side-title">Contact Seller</h3>
						<div class="row divider"></div>
                		<h3 class="ads-details-title center-align"><?php echo $data['user'];?></h3>
                		<p class="no-margin center-align">Brand: <strong><?php echo $data['brand'];?></strong></p>
                		<!-- <p class="no-margin center-align">Location: <strong><?php echo $data['brand_loc'];?></strong></p>   -->              		
                		<a class="waves-effect waves-light btn grey col s12 center-align" href="<?php echo base_url().'order/'.$data['slug'];?>"><i class="material-icons left hide-on-med-and-down">email</i>Order</a>		                		
					</div>					
				</div>
				<div class="col s12 m3">
					<div class="ads-details-wrapper card white row">
						<div class="row">
							<div class="card-content">
								<p><strong>Price: </strong><?php echo $data['price'];?></p>
								<p><strong>Type: </strong><?php echo $data['super_sub_kategori'];?></p>
								<p><strong>Location: </strong><?php $lokasi = ""; foreach ($data['lokasi'] as $row) { $lokasi .= $row.", "; }; echo $lokasi; ?></p>
							</div>
						</div>		                		
					</div>					
				</div>
				<!-- end of details content -->
			</div>
		</div>
	</main>