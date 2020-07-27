<?php
    class RotatorAPI
    {
    	const API_TOKEN = 'mE7AJia6qTrXCEbF6Bo31uoF4wSkhHUZ';
    	const API_URL = 'http://api.admin.salesdoubler.net/clicks/stats/';
    	const OFFERS_LIST = array(
    		'1844',
    		'1571',
    		'1727',
    		'250',
    		'1272',
    		'1492',
    		'1509',
    		'1436'
    	);

        public $sessionID = false;

        public function __construct($sessionID = false)
        {
            $this->sessionID = $sessionID;
        }

        public function getOffersIDs()
        {
        	$ids = array();

        	$offers = $this->_getOffersFromAPI();

        	if (!$offers) {
        		return array();
        	}

        	foreach ($offers as $offer) {
        		$ids[] = $offer['offer_group_id'];
        	}

        	return $ids;
        }

        public function _getOffersFromAPI() {
        	if (!$this->sessionID) {
        		return array();
        	}

        	$ch = curl_init();
        	
        	curl_setopt($ch, CURLOPT_URL, $this->_getURL());
        	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        	$headers = $this->_getHeaders();

        	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        	$res = curl_exec($ch);

        	$res = json_decode($res, true);

        	if (!array_key_exists('data', $res)) {
        		return array();
        	}

        	return $res['data'];
        }

        private function _getURL()
        {
        	$urlParams = $this->_getPreparedURLParams();
        	return static::API_URL.'?'.$urlParams;
    	}

    	private function _getHeaders()
        {
        	$headers = array(
            	"Content-Type: application/json",
            	"Access-Token: ".static::API_TOKEN
        	);

        	return $headers;
    	}

    	private function _getPreparedURLParams()
    	{
    		$offerParams = static::OFFERS_LIST;
    		foreach ($offerParams as $offerParamKey => $offerParam) {
    			$offerParams[$offerParamKey] = 'offer_group_id[]='.$offerParam;
    		}

    		$offerParams = implode('&', $offerParams);

    		$sessionParam = 'session_id='.$this->sessionID;

    		$urlParams = $offerParams.'&'.$sessionParam;

    		return $urlParams;
    	}

    	public function debug() {
    		$sessListJSON = file_get_contents(__DIR__.'/data.json');
    		$sessList = json_decode($sessListJSON, true);
    		$sessList[] = $this->sessionID;
    		$sessList = array_unique($sessList);
    		$sessListJSON = json_encode($sessList);
    		file_put_contents(__DIR__.'/data.json', $sessListJSON);
    		return true;
    	}
    }
