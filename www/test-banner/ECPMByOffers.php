<?php

require_once 'Params.php';

function getECPMByOffers($offersCode, $tid1, $affiliateID, $googleAnalyticViewID, $hoursSync) {
        $url  = 'http://api.admin.salesdoubler.net/ecpm/offers/';
//    $url  = 'http://api.sd.test.dev.clients.in.ua/ecpm/offers/';
//    $url  = 'https://sanbox.tools.admin.salesdoubler.net/ecpm/offers/';

        $accessToken = 'mE7AJia6qTrXCEbF6Bo31uoF4wSkhHUZ'; // prod token
//    $accessToken = '9daae899a63428b463b87411940cb9e2'; // dev token
//    $accessToken = '702601a103e074162cfd49e3e1e16024'; // dev sanbox token

    $post = array(
        'offer_codes'    => json_encode($offersCode),
        'sub_id4'        => json_encode($tid1),
        'affiliate_code' => $affiliateID,
        'view_code'      => $googleAnalyticViewID,
        'date'           => $hoursSync,
    );

    $headers     = array(
        'Access-Token: '.$accessToken,
    );
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_SSLVERSION, 6);
    curl_setopt($ch, CURLOPT_USERAGENT,      'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6'  );
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_URL, $url);

    $response = curl_exec($ch);
    $response = json_decode($response, true);

    if (!isCorrectResponse($response)) {
        $response['ECPMByOffers'] = false;
    }

    $result['response'] = $response;

    $errors = false;

    if(curl_errno($ch))
    {
        $errors = 'error: '.curl_error($ch);
    }

    curl_close($ch);

    $result['errors'] = $errors;

    return $result;
}

function isCorrectResponse($response)
{
    return array_key_exists('ECPMByOffers', $response) ||
           array_key_exists('ecmp', array_shift($response["ECPMByOffers"]));
}

function addFileKarts($data, $maps, $defaultKartsName) {
    $kartsNames = array();

    foreach ($data as &$values) {
        $key = $values['offer_group_id'];

        if (array_key_exists($key, $maps)) {
            $name                   = $maps[$key];
            $file                   = 'templates/'.$name.'.php';
            $values['lending_name'] = $name;
            $values['file']         = $file;
            $kartsNames[]           = $name;
        }
    }

    if (count($maps) != count($kartsNames)) {
        addMissingKarts($data, $kartsNames, $maps);
    }

    return addDefaultKarts($data, $defaultKartsName);
}

function addMissingKarts(&$data, $kartsNames, $maps)
{
    foreach ($maps as $kartName) {
        if (!in_array($kartName, $kartsNames)) {
            $file           = 'templates/'.$kartName.'.php';
            $data[]['file'] = $file;
        }
    }

    return true;
}

function addDefaultKarts($data, $defaultKartsName)
{
    foreach ($defaultKartsName as $defaultKartName) {
        $data[]['file'] = 'templates/'.$defaultKartName.'.php';
    }

    return $data;
}

function isDateCreateOld($file, $minutes) {
    $date       = strtotime(date("Y-m-d H:i:s", filectime($file)));

    $currentDate = strtotime(date("Y-m-d H:i:s"));

    $diff = $currentDate - $date;

    $minutesDiff = (int) date('i', $diff);

    return $minutesDiff > $minutes;
}

function getOffersCode($maps)
{
    $offersCode = array_keys($maps);

    return $offersCode;
}

function isUpdateTurnOff($timeOn, $timeOff)
{
    $currentHour = date("H");

    return $timeOff <= $currentHour || $timeOn > $currentHour;
}

function getCustomKarts($maps, $defaultKartsName)
{
    $data = array();

    foreach ($maps as $fileName) {
        $data[]['file'] = 'templates/'.$fileName.'.php';
    }

    return addDefaultKarts($data, $defaultKartsName);
}

$file = 'ECPMByOffers.json';

if (isUpdateTurnOff($timeOn, $timeOff)) {
    $fullData = getCustomKarts($maps, $defaultKartsName);
    return true;
}

if (!isDateCreateOld($file, $minutes)) {
    $fullData = json_decode(file_get_contents($file), true);
    return true;
}

$offersCode = getOffersCode($maps);

$response = getECPMByOffers($offersCode, $tid1, $affiliateID, $googleAnalyticViewID, $hoursSync);

if (!$response["response"]["ECPMByOffers"]) {
    $fullData = json_decode(file_get_contents($file), true);
    return true;
}

$ECPMByOffers = $response["response"]["ECPMByOffers"];

$fullData     = addFileKarts($ECPMByOffers, $maps, $defaultKartsName);

file_put_contents($file, json_encode($fullData));
