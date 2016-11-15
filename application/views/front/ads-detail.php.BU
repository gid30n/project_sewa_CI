
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
						<h2 class="ads-details-title"> <?php echo $data['title'];?></h2>
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
								<div class="col s12 m8">
					               <?php echo $data['descript'];?>
								</div>
								<div class="col s12 m4">
									<div class="card grey lighten-4">
										<div class="card-content">
											<p><strong>Price: </strong><?php echo $data['price'];?></p>
											<p><strong>Type: </strong><?php echo $data['super_sub_kategori'];?></p>
											<p><strong>Location: </strong><?php $lokasi = ""; foreach ($data['lokasi'] as $row) { $lokasi .= $row.", "; }; echo $lokasi; ?></p>
										</div>
									</div>
                    				<!-- <ul class="list-border">
				                        <li><a href="#"><i class="tiny material-icons valign-mid">person</i> More ads by User </a> </li>
				                        <li><a href="#"><i class="tiny material-icons valign-mid">favorite</i> Save ad </a> </li>
				                        <li><a href="#" > <i class="tiny material-icons valign-mid">share</i> Share ad </a> </li>
				                       	<li><a class="modal-trigger" href="#reportAdvertiser"><i class="tiny material-icons valign-mid">error_outline</i> Report abuse </a> </li>
                    				</ul> -->
								</div>
								<!-- modal report form -->
								<div id="reportAdvertiser" class="modal modal-fixed-footer">
									<form action="">
	    								<div class="modal-content">
	      									<h4 class="ads-details-title"><i class="material-icons valign-mid">error_outline</i> There's something wrong with this ads?</h4>
	      									<div class="row divider"></div>
	  										<div class="row">
										      	<div class="input-field col s12">
										    		<select name="reason" required>
										      			<option value="" disabled selected>Select a reason</option>
										      			<option value="1">Option 1</option>
										      			<option value="2">Option 2</option>
										      			<option value="3">Option 3</option>
										    		</select>
										    		<label for="reason">Reason</label>
										  		</div>
												<div class="input-field col s12">
	  												<input name="email" id="email" type="email" required>
	  												<label for="email">Email</label>
												</div>
												<div class="input-field col s12">
	  												<textarea name="message" id="message" class="materialize-textarea" length="300" maxlength="300" required></textarea>
	  												<label for="message">Message</label>
												</div>
	  										</div>
	    								</div>
	    								<div class="divider"></div>
	    								<div class="modal-footer">
	    									<button type="submit" class="btn waves-effect waves-light">Send Report</button>
	    									<button type="reset" class="modal-action modal-close btn waves-effect waves-light grey">Cancel</button>
	    								</div>
    								</form>
  								</div>
  								<!-- end of modal report form -->

  								
								<!-- <div class="col s12">
									<div class="row divider"></div>
									<a class="waves-effect waves-light btn grey" href="<?php echo base_url().'order/'.$data['slug'];?>"><i class="material-icons left hide-on-med-and-down">email</i>Order</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<!-- end of ads details content -->

				<!-- ads details sidebar -->
				<div class="col s12 m3">
					<div class="ads-details-wrapper card white">
						<h3 class="ads-details-side-title">Contact Seller</h3>
						<div class="row divider"></div>
                		<h3 class="ads-details-title center-align"><?php echo $data['user'];?></h3>
                		<p class="no-margin center-align">Brand: <strong><?php echo $data['brand'];?></strong></p>
                		<p class="no-margin center-align">Location: <strong><?php echo $data['brand_loc'];?></strong></p>
                		<a class="waves-effect waves-light btn grey" href="<?php echo base_url().'order/'.$data['slug'];?>"><i class="material-icons left hide-on-med-and-down">email</i>Order</a>					
					</div>
					<div class="ads-details-wrapper card white">
						<h3 class="ads-details-side-title">Safety Tips for Buyers</h3>
						<div class="row divider"></div>
                		<ul class="list-check">
                    		<li> Meet seller at a public place </li>
                    		<li> Check the item before you buy</li>
                    		<li> Pay only after collecting the item</li>
                  		</ul>
                  		<p class="right-align no-margin"><a href="#">Know more <i class="material-icons valign-mid">chevron_right</i></a></p>
					</div>
				</div>
				<!-- end of details content -->
			</div>
		</div>
	</main>