<?php
class MediaBuying
{
    private $_device = 'pc';
    private $_city = NULL;
    
    const REMOTE_URL = 'https://api.mediabuyingteem.top/'.
                       'conversions_statistics/';
    const ACCESS_TOKEN = '702601a103e074162cfd49e3e1e16024';
    
    public function __construct($device = 'pc', $city = NULL)
    {
        $this->_device = $device;
        $this->_city   = $city;
    }
    
    public function send()
    {
        $post = $this->_getPreparedRequest();
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => static::REMOTE_URL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $post,
            CURLOPT_HTTPHEADER => array(
                'Access-Token: '.static::ACCESS_TOKEN,
                'cache-control: no-cache'
            ),
        ));

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        if (!array_key_exists('content', $response)) {
            return [];
        }

        return $response['content'];
    }

    private function _getPreparedRequest()
    {
        $post = array(
            "device"  => $this->_device
        );

        if ($this->_city != NULL) {
            $post['city'] = $this->_city;
        }
        
        return $post;
    }

    private function _getHeaders()
    {
        $headers = array(
            "Content-Type: application/json",
            "Access-Token: ".static::ACCESS_TOKEN
        );

        return $headers;
    }
}