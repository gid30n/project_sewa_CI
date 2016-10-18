<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('convert_date'))
{
    function convert_date($date, $format)
    {

    	$new_date = new DateTime($date);
    	return $new_date->format($format);
    }   
}

if ( ! function_exists('convert_rp')){
	function convert_rp($value){
		return "Rp " . number_format($value,2,',','.');
	}
}