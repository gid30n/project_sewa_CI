<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php 
	$url = $_SERVER['REQUEST_URI']; 
	$hasil = explode("/", $url);		
	if ($hasil[1] == "ads") {					
?>		
	<meta name="google-site-verification" content="" />
        <meta name="robots" content="index, follow">
	<meta name="description" content="<?=  trim(preg_replace('/<[^>]*>/', ' ', $data['descript'])); ?>">
	<meta name="keywords" content="sewania,<?= $data['kategori'].", ".$data['sub_kategori'].", ".$data['super_sub_kategori'];?>">
        <meta name="author" content="<?= $data['user']; ?>"> 
	<meta name='coverage' content='Worldwide'>
	<meta name='distribution' content='Global'>
        <meta name="og:url" content="<?= base_url().$url; ?>">
	<meta property="og:title" content="Sewania.com | <?= $data['kategori']."| ".$data['title']; ?>" />
	<meta property="og:image" content="<?= base_url().$data["gallery"][0]['src'];?>" />
	<meta property="og:type" content="website">
	<meta property="og:description" content="<?=  trim(preg_replace('/<[^>]*>/', ' ', $data['descript'])); ?>" />
	<meta property="og:site_name" content="Sewania">
	<meta name="news_keywords" content="sewania,<?= $data['kategori'].", ".$data['sub_kategori'].", ".$data['super_sub_kategori']; ?>">
<?php
	}else{
?>
	<meta name="google-site-verification" content="" />
        <meta name="robots" content="index, follow">
	<meta name="description" content="Sewania.com dalah Rental Marketplace untuk mencari perlengkapan Pesta dan Paket Pesta, Kami adalah tempat terbaik untuk membangu Pesta Impian Anda.">
	<meta name="keywords" content="sewania"> 
	
	<meta property="og:title" content="Sewania.com | Paket Pesta | Perlengkapan Pesta" />
	<meta property="og:image" content="<?= base_url();?>assets/img/logo/logo.png" />
	<meta property="og:type" content="website">
	<meta property="og:description" content="Sewania.com dalah Rental Marketplace untuk mencari perlengkapan Pesta dan Paket Pesta, Kami adalah tempat terbaik untuk membangu Pesta Impian Anda" />
	<meta property="og:site_name" content="Sewania">
<?php
	}
?>
	<title><?php echo $title;?></title>
	<link rel="icon" href="<?php echo base_url();?>assets/img/logo/logo.png" type="image/png" sizes="16x16">
	<!-- css cdn	 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/9.1.0/nouislider.min.css" />
	<!-- css endcdn -->
	<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css">	 -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/pace.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/swal.min.css">	 -->
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nouislider.min.css"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize-tags.min.css">
   
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
    <!-- js cdn	 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>     
	<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>	
	<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
    <!-- js endcdn -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-lazyimage-master/demo.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/knockouts-3.4.js"></script>
    <script src="<?php echo base_url();?>assets/js/pace.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/js/swal.min.js"></script> -->   
	<script>
	  webshims.setOptions('waitReady', false);
	  webshims.setOptions('forms-ext', {types: 'date'});
	  webshims.polyfill('forms forms-ext');
	</script> 
    <!-- bxSlider CSS file -->
	<link href="<?php echo base_url();?>assets/css/bxslider.min.css" rel="stylesheet" />
    <script>	
	    paceOptions = {
	      elements: true
	    };
	</script>           
</head>