<?

$email = substr(htmlspecialchars(trim($_POST['email'])),0,200);
$aid = substr(htmlspecialchars(trim($_POST['aid'])),0,200);
$source = substr(htmlspecialchars(trim($_POST['source'])),0,200);
$campaign = substr(htmlspecialchars(trim($_POST['campaign'])),0,200);
$promo = substr(htmlspecialchars(trim($_POST['promo'])),0,200);
$tid1 = substr(htmlspecialchars(trim($_POST['tid1'])),0,200);
$tid2 = substr(htmlspecialchars(trim($_POST['tid2'])),0,200);




// send to GetResponse
$campaign_token = '4RTBN';
$url = 'https://app.getresponse.com/add_subscriber.html';

$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, array("campaign_token"=>$campaign_token, "email"=>$email, "name"=>"User"));
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: multipart/form-data', 'Content-Type: multipart/form-data'));
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);




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
	curl_close($ch);
}




// send to eSputnik
/*
$user = 'info@potrzebuje.cash';
$password = '778895qwerty';

$create_contact_url = 'https://esputnik.com/api/v1/contact';
$contact = new stdClass();
$contact->channels = array(array('type'=>'email', 'value' => $email));
$contact->fields = array(
	array('id'=> 62660, 'value' => $aid),
	array('id'=> 62661, 'value' => $source),
	array('id'=> 62662, 'value' => $campaign),
	array('id'=> 62663, 'value' => $promo),
	array('id'=> 59491, 'value' => $tid1),
	array('id'=> 59492, 'value' => $tid2),
);

$contact->groups = array(array('name' => $_SERVER['SERVER_NAME']));
send_request($create_contact_url, $contact, $user, $password);

$message_id = '1108299';
$recipients = array($email);
$send_prepared_message_url = 'https://esputnik.com/api/v1/message/'.$message_id.'/send';

$message = new stdClass();
$message->recipients = $recipients;

send_request($send_prepared_message_url, $message, $user, $password);

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
	curl_close($ch);
	echo($output);
} */
?>