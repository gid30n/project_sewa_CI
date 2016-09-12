<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('check_valid_email_with_mailgun'))
{
    function check_valid_email_with_mailgun($email)
    {

    	$mgClient = new \Mailgun\Mailgun('pubkey-77ee9768adcec0e355a6a922dd5e988d');

		# Issue the call to the client.
    	$result = $mgClient->get("address/validate", array('address' => $email));
		# is_valid is 0 or 1
    	$isValid = $result->http_response_body->is_valid;
    	return $isValid;
    }   
}