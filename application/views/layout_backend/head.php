<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?php echo $title;?></title>
	<link rel="icon" href="<?php echo base_url();?>assets/img/logo/logo.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css">	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/pace.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	 
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/swal.css">	
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/pace.js"></script>
    <script src="<?php echo base_url();?>assets/js/swal.js"></script>
    <!-- bxSlider CSS file -->
	<link href="<?php echo base_url();?>assets/css/bxslider.css" rel="stylesheet" />

	<!-- tinymce js -->
	<script src="<?php echo base_url();?>assets/js/tinymce/tinymce.dev.js"></script>
	<script src="<?php echo base_url();?>assets/js/tinymce/plugins/table/plugin.dev.js"></script>
	<script src="<?php echo base_url();?>assets/js/tinymce/plugins/paste/plugin.dev.js"></script>
	<script src="<?php echo base_url();?>assets/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
    <script>
	    paceOptions = {
	      elements: true
	    };	    
	</script>  

</head>
<?php 
	$level = $user['admin'];
	if ($level === '-9') {
		echo '<script>	
			$(document).ready(function(){
				var tot_peralatan = 0;
				$.getJSON( "'.base_url().'api/ads/kategori-count/1", function( data ) {
					tot_peralatan += data.count;				 	
					$(" #count_peralatan").html(tot_peralatan);

					var tot_paket = 0;
					$.getJSON( "'.base_url().'api/ads/kategori-count/2", function( data ) {
						tot_paket += data.count;				 	
						$(" #count_paket").html(tot_paket);				
					});
					$(" #total_iklan").html(parseInt(tot_peralatan) + parseInt(tot_paket));			
				});								
			});				
	</script>';
	}
?>