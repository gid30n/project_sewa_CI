<script>
function deletes(){
	var item_ads = $(".item-ads");
	var _slugs = []
	for(var i=0; item_ads[i]; ++i){
		if(item_ads[i].checked){
			_slugs.push(item_ads[i].value);
		}
	}
	$.ajax({
		method: "POST",
		url: "<?php echo base_url('peralatan/deletes');?>",
		data: { 
			slugs : _slugs,
			'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'
		}
	})
	.done(function( data ) {
		window.location = "<?php echo base_url('peralatan');?>";
	});
}
</script>
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
      									<a class="waves-effect waves-light red btn" onclick="deletes()"><i class="material-icons right">close</i>Delete</a>
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
											<input type="hidden" class="id-ads" value="<?php echo $row["id_ads"];?>">
										    <div class="card-image waves-effect waves-block waves-light">
										      <img class="activator" src="<?php echo base_url().'images/?w=150&h=150&src='.$row['gallery'][0]['src'];?>">
										    </div>
										    <div class="card-content">
										      <span class="card-title activator grey-text text-darken-4 truncate" style="word-wrap: break-word"><?php echo $row['title'];?></span>
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
													      <input type="checkbox" id="check<?php $n = rand(); echo $n; ?>" class="item-ads" value="<?php echo $row['slug'];?>"/>
													      <label for="check<?php echo $n;?>">Pilih</label>
													    </p>
													</div>
													<a href="#!" class="btn teal white-text col s5 btn-mar waves-effect"><i class="material-icons left">edit</i>Edit</a>
													<a href="<?php echo base_url('peralatan/delete/').$row['slug'];?>" class="btn red white-text col s6 btn-mar waves-effect"><i class="material-icons left">delete</i>Delete</a>
													<a href="#!" class="btn orange white-text col s12 btn-mar waves-effect"><i class="material-icons left">share</i>Share</a>
											    </div>													    											
										    </div>
										    <div class="card-reveal">
										    	<div class="row">
										    		<div class="col s12">
										    			  <span class="card-title grey-text text-darken-4"><?php echo $row['title']; ?><i class="material-icons right">close</i></span>
													      <p style="word-wrap: break-word"><?php echo mb_strimwidth($row['descript'], 0, 250, "..."); ?></p>
													      <p><a href="<?php echo base_url();?>ads/<?php echo $row['slug'];?>" class="btn waves-effect">Detail</a></p>			
										    		</div>		
										    	</div>										      
										    </div>
										  </div>
									</div>
									<?php }; ?>
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
<?php
	$level = $user['admin']; 
	if($level === '-9'){
?>
<script type="text/javascript">
$(document).ready(function() {
	 var total_record = 4;
	 var total_groups;
	 var last_id;
	 $.getJSON( "<?php echo base_url(	); ?>api/all/ads/kategori-count/1", function( data ) {
	 	total_groups = data.count;
	 	last_id = data.last_id;
	 });
	 $(window).scroll(function() {       
	     if($(window).scrollTop() + $(window).height() == $(document).height()){
	        if(total_record < total_groups){
	           	loading = true; 
	           	$('.loader_image').show(); 
	           	$.getJSON('<?php echo site_url() ?>api/all/ads/kategori/1/'+total_record+"/3",
	             	function(data){ 
	                 	if (data != "") {                 		
	                 		for (var i = 0; i < data.length; i++) { 
	                 			if(last_id == data[i].id_ads){
	                 				break;
	                 			}else{
	                 				gallery = data[i].gallery;             			                 			
		                 			$("#konten-peralatan").append(
		                 				'<div class="col s12 m4">'+
		                 				'<input type="hidden" class="id-ads" value="'+data[i].id_ads+'">'+
											'<div class="card hoverable">'+
											    '<div class="card-image waves-effect waves-block waves-light">'+
											      '<img class="activator" src="'+'<?php echo base_url("images/?w=150&h=150&src="); ?>'+gallery[0].src+'">'+
											    '</div>'+
											    '<div class="card-content">'+
											      '<span class="card-title activator grey-text text-darken-4 truncate" style="word-wrap: break-word">'+data[i].title+'</span>'+
											      '<br><i class="tiny material-icons">room</i>'+data[i].lokasi+
											      '<div class="divider"></div>'+
											      '<span><b>'+data[i].price+'</b></span>'+																      
											    '</div>'+
											    '<div class="card-action">'+
												    '<div class="row">'+
												    	'<div class="col s12">'+
															'<p>'+
														      '<input type="checkbox" id="check'+data[i].id_ads+'"/>'+
														      '<label for="check'+data[i].id_ads+'">Pilih</label>'+
														    '</p>'+
														'</div>'+
														'<a href="#!" class="btn teal white-text col s5 btn-mar waves-effect"><i class="material-icons left">edit</i>Edit</a>'+
														'<a href="<?php echo base_url("peralatan/delete/").$row["slug"];?>" class="btn red white-text col s6 btn-mar waves-effect"><i class="material-icons left">delete</i>Delete</a>'+
														'<a href="#!" class="btn orange white-text col s12 btn-mar waves-effect"><i class="material-icons left">share</i>Share</a>'+
												    '</div>'+													    											
											    '</div>'+
											    '<div class="card-reveal">'+
											      '<span class="card-title grey-text text-darken-4 truncate">'+data[i].title+'<i class="material-icons right">close</i></span>'+
											      '<p style="word-wrap: break-word"><?php echo mb_strimwidth("'+data[i].descript+'",0,250, "...."); ?></p>'+
											      '<p><a href="<?php echo base_url();?>ads/'+data[i].slug+'" class="btn waves-effect">Detail</a></p>'+
											    '</div>'+
											  '</div>'+
										'</div>'
		                 			);	
	                 			}                  
	                 		}                 		  		                	                     
	                     	total_record += 3;
	                    }                
	            	});     
	        }
	     }
	 });
 });
 </script>
 <?php } ?>