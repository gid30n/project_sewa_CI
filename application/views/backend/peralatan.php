
			<div class="col s12 l9 right">
				<div class="card white">
					<div class="card-content teal-text">						
						<div class="row">
							<div class="col s12">
								<div class="col s12">
									<h5 class="left"><i class="material-icons">shopping_cart</i> Pesan</h5>									
									<a href="<?php echo base_url();?>peralatan/new-ads" class="btn right col l6 m6 s2"><i class="material-icons left">add</i><span class="hide-on-small-only">Tambah Perlengkapan Pesta</span></a>
								</div>								
								<hr class="hide-on-med-and-down">
								<div class="col m6 s12">
									<p>
      									<input type="checkbox" onclick="checkAll(this)" id="checkAll" />
      									<label for="checkAll">Select: All | </label>
      									<a class="waves-effect waves-light red btn"><i class="material-icons right">close</i>Delete</a>
    								</p>
								</div>
								<div class="col m6 s12">
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
								</div>
								<div class="row" id="konten-peralatan">
									<?php foreach ($data as $row) { ?>
									<div class="col s12 m4">
										<div class="card hoverable">
										    <div class="card-image waves-effect waves-block waves-light">
										      <img class="activator" src="<?php echo base_url().'images/w150_h150_at__?src='.$row['gallery'][0]['src'];?>">
										    </div>
										    <div class="card-content">
										      <span class="card-title activator grey-text text-darken-4 truncate"><?php echo $row['title'];?><i class="material-icons right">more_vert</i></span>
										      <!-- <p><span class="teal-text">Rating :<i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i><i class="tiny material-icons">star</i></span>	</p> Ratingnya the next iyah abang-abang -->
										      <p></p>
										      <i class="tiny material-icons">room</i><?php $lokasi = ""; foreach($row['lokasi'] as $rw){ $lokasi .=$rw.", ";}; echo $lokasi;?>
										      <div class="divider"></div>
										      <span><b><?php echo $row['price'];?></b></span>																      
										    </div>
										    <div class="card-action">
											    <div class="row">
											    	<div class="col s12">
														<p>
													      <input type="checkbox" id="check2<?php $n = $this->encryption->encrypt($row['id_ads']); echo $n; ?>" name="selected[]"/>
													      <label for="check2<?php echo $n; ?>">Pilih</label>
													    </p>
													</div>
													<a href="#!" class="btn teal white-text col s5 btn-mar waves-effect"><i class="material-icons left">edit</i>Edit</a>
													<a href="#!" class="btn red white-text col s6 btn-mar waves-effect"><i class="material-icons left">delete</i>Delete</a>
													<a href="#!" class="btn orange white-text col s12 btn-mar waves-effect"><i class="material-icons left">share</i>Share</a>
											    </div>													    											
										    </div>
										    <div class="card-reveal">
										    	<div class="row">
										    		<div class="col s12">
										    			  <span class="card-title grey-text text-darken-4"><?php echo $row['title'];?><i class="material-icons right">close</i></span>
													      <p style="word-wrap: break-word"><?php echo mb_strimwidth($row['descript'], 0, 250, "...");?></p>
													      <p><a href="ads-detail" class="btn waves-effect">Detail</a></p>			
										    		</div>		
										    	</div>										      
										    </div>
										  </div>
									</div>
									<?php }; ?>
									<!-- <div class="col s12 center-align">
										<ul class="pagination">
											<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
											<li class="active teal"><a href="#!">1</a></li>
											<li class="waves-effect"><a href="#!">2</a></li>
											<li class="waves-effect"><a href="#!">3</a></li>
											<li class="waves-effect"><a href="#!">4</a></li>
											<li class="waves-effect"><a href="#!">5</a></li>
											<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
										</ul>
									</div> -->
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</main>
	<?php 
	if(isset($msg_peralatan)){
		if(isset($msg_peralatan['status'])){
			if($msg_peralatan['status']){
				?><script>sweetAlert('Congratulations!', '<?php echo $msg_peralatan["msg"];?>', 'success');</script><?php
			}else{
				?><script>sweetAlert('Ups!', '<?php echo $msg_peralatan["msg"];?>', 'error');</script><?php
			}
		}
		$this->session->unset_userdata('msg_peralatan');
	}
	?>
<script type="text/javascript">
 $(document).ready(function() {
 var total_record = 3;
 var total_groups;
 $.getJSON( "<?php echo base_url(	); ?>api/ads/kategori-count/1", function( data ) {
 	total_groups = data.count;  
 });
 $(window).scroll(function() {       
     if($(window).scrollTop() + $(window).height() == $(document).height()){
        if(total_record < total_groups){
           	loading = true; 
           	$('.loader_image').show(); 
           	$.getJSON('<?php echo site_url() ?>api/ads/kategori/1/'+total_record+"/"+total_groups,
             	function(data){ 
                 	if (data != "") {                              
                     	$("#konten-peralatan").append('<div class="col s12 m4"><div class="card hoverable"><div class="card-image waves-effect waves-block waves-light"><img class="activator" src=""></div><div class="card-content"><span class="card-title activator grey-text text-darken-4 truncate"><i class="material-icons right">more_vert</i></span><p></p><i class="tiny material-icons">room</i><div class="divider"></div><span><b></b></span>																      </div><div class="card-action"><div class="row"><div class="col s12"><p><input type="checkbox" id="check2" name="selected[]"/><label for="check2>Pilih</label></p></div><a href="#!" class="btn teal white-text col s5 btn-mar waves-effect"><i class="material-icons left">edit</i>Edit</a><a href="#!" class="btn red white-text col s6 btn-mar waves-effect"><i class="material-icons left">delete</i>Delete</a><a href="#!" class="btn orange white-text col s12 btn-mar waves-effect"><i class="material-icons left">share</i>Share</a></div>													    											</div><div class="card-reveal"><span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><p></p><p><a href="ads-detail" class="btn waves-effect">Detail</a></p></div></div></div>');                 
                     	$('.loader_image').hide();                  
                     	total_record++;
                 }
            });     
        }
     }
 });
 });
 </script>