<?php

$email = $_POST['email']; 

$user = 'provisioning@salesdoubler.com.ua';
$password = 'u*8W56gN7L1c';

$subscribe_contact_url = 'https://esputnik.com/api/v1/contacts';

$json_contact_value = new stdClass();
$contact = new stdClass();
$contact->channels = array(
    array(
        'type'=>'email',
        'value' => $email
    )
);
$json_contact_value->contacts = array($contact);
$json_contact_value->groupNames = array('kredityvonline.com');	// группы, в которые будет помещен контакт
$json_contact_value->dedupeOn = 'email';
$json_contact_value->contactFields = array('email');
$json_contact_value->eventKeyForNewContacts = 'newContact';
send_request($subscribe_contact_url, $json_contact_value, $user, $password);

function send_request($url, $json_value, $user, $password) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json_value));
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_USERPWD, $user.':'.$password);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	print_r($output);
	curl_close($ch);
}

?>