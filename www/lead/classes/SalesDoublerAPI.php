<?php
class SalesDoublerAPI extends MediaBuyingAPI
{
    const REMOTE_PATH_LEAD   = "/leads/sgroshi/";
    const ACCESS_TOKEN_LEAD = "3ad6b127429236ce83c3f00f66baef6d";

    public function send()
    {
        parent::send();

        $post = $this->_getPreparedRequest();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->_getURL());
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $headers = $this->_getHeaders();

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $output = curl_exec($ch);
        file_put_contents(getcwd().'/res.json', $output);
        curl_close($ch);

        return true;
    }

    private function _getHeaders()
    {
        $headers = array(
            "Content-Type: application/json",
            "Access-Token: ".static::ACCESS_TOKEN_LEAD
        );

        return $headers;
    }

    private function _getURL()
    {
        return static::REMOTE_DOMAIN.static::REMOTE_PATH_LEAD;
    }

    private function _getPreparedRequest()
    {
        $ip = isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:'';
        $ip = isset($_SERVER['HTTP_CLIENT_IP'])?$ip.' '.$_SERVER['HTTP_CLIENT_IP']:$ip;
        $post = array(
            "aid" => "65264",
            "affice_code" => "65264",
            "mobile_phone" => $this->_getPhone(),
            "amount"       => $this->_getMoney(),
            "utm_source"   => $this->get("utm_source"),
            "utm_campaign" => $this->get("utm_campaign"),
            "utm_term"     => $this->get("utm_term"),
            "utm_medium"   => $this->get("utm_medium"),
            "utm_content"  => $this->get("utm_content"),
            "date_visit"   => date('Y-m-d H:i:s'),
            "ip"           => $ip
        );
        $name = $this->_getName();
        if(count($name)>2){
            $post["first_name"] = $name[2];
            $post["middle_name"] = $name[1];
            $post["last_name"] = $name[0];
        } elseif(count($name)>1){
            $post["first_name"] = $name[1];
            $post["last_name"] = $name[0];
        } else {
            $post["first_name"] = $name[0];
        }
        return $post;
    }
    private function _getPhone()
    {
        $phone = trim(str_replace(array('(', ")", " ", "-", "+380"), "", $this->get('phone')));
        return "+380{$phone}";
    }

    private function _getName()
    {
        $name = $this->_getCyrillicName($this->get('name'));
        $name = mb_convert_case($name, MB_CASE_TITLE);
        $name = preg_replace('/\s+/',' ',$name);
        $name = preg_replace('/(^\s)|(\s$)/','',$name);
        $name = explode(' ',$name);
        return $name;
    }

    private function _getMoney()
    {
        $money = $this->get('money');

        return str_replace(' ', '', $money);
    }

    private function _getCyrillicName($str)
    {
        $translit = array(
            'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'yo',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'j',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'x',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'shh',
            'ь' => '\'',  'ы' => 'y',   'ъ' => '\'\'',
            'э' => 'e\'',   'ю' => 'yu',  'я' => 'ya',
            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'YO',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'J',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'X',   'Ц' => 'C',
            'Ч' => 'CH',  'Ш' => 'SH',  'Щ' => 'SHH',
            'Ь' => '\'',  'Ы' => 'Y\'',   'Ъ' => '\'\'',
            'Э' => 'E\'',   'Ю' => 'YU',  'Я' => 'YA',

        );

        return strtr($str, array_flip($translit));
    }
}