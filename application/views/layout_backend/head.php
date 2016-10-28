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
	    var tot_peralatan = 0;
		$.getJSON( "<?php echo base_url(); ?>api/ads/kategori-count/1", function( data ) {
			tot_peralatan += data.count;
		 	document.getElementById("count_peralatan").innerHTML = tot_peralatan;				
		});

		var tot_paket = 0;
		$.getJSON( "<?php echo base_url(); ?>api/ads/kategori-count/2", function( data ) {
			tot_paket += data.count;
			console.log(tot_paket);
		 	document.getElementById("count_paket").innerHTML = tot_paket;				
		});

		//total_ads_user	
		document.getElementById("total_iklan").innerHTML = parseInt(document.getElementById("count_paket").textContent) + parseInt(document.getElementById("count_peralatan").textContent);	
	</script>  
</head>