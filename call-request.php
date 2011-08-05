<?php
	// Include the Twilio PHP library
	require 'Services/Twilio.php';

	// Twilio REST API version
	$version = "2010-04-01";

	// Set our Account SID and AuthToken
	$sid = 'AC8c3a6fbc4ae12cd2f955fcfae1f24c3e';
	$token = 'c90f28ebb22dd45ab9e3af74fc347071';
	
	// A phone number you have previously validated with Twilio
	$phonenumber = '8017846911';
	
	// Instantiate a new Twilio Rest Client
	$client = new Services_Twilio($sid, $token, $version);

	try {
		// Initiate a new outbound call
		$call = $client->account->calls->create(
			$phonenumber, // The number of the phone initiating the call
			'4352770057', // The number of the phone receiving call
			'https://raw.github.com/monokrome/twilio-fun/master/index.xml'
		);
		echo 'Started call: ' . $call->sid;
	} catch (Exception $e) {
		echo 'Error: ' . $e->getMessage();
	}
