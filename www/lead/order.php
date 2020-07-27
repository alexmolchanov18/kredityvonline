<?php

function getIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function apiWebvorkV1NewLead($post, $ip, $offerId, $counter = 0)
{
    $token = 'M15aN0uDUMAzd1zUXGDax4Sgf8YBsppoc'; // Заменяем на свой из кабинета

    $url = 'http://api.webvork.com/v1/new-lead?token=' . rawurlencode($token)
        . '&ip=' . rawurlencode($ip)
        . '&offer_id=' . rawurlencode($offerId)
        . '&name=' . rawurlencode($post['name'])
        . '&phone=' . rawurlencode($post['phone'])
		. '&site=' . rawurlencode($post['site'])

    $json = file_get_contents($url);
    $data = json_decode($json, 1);

    if ($data['status'] != 'ok') {
        if ($counter < 5) {
            sleep(1);
            return apiWebvorkV1NewLead($post, $ip, $offerId, ++$counter);
        } else {
            return false;
        }
    }

    if ($data['status'] == 'ok') {
        return true;
    }
}

apiWebvorkV1NewLead($_POST, getIp(), 4);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test</title>

    <style>
        :root {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        *, ::after, ::before {
            -webkit-box-sizing: inherit;
            box-sizing: inherit;
            margin: 0;
            padding: 0
        }

        body, html {
            height: 100%;
            font-family: -apple-system, BlinkMacSystemFont, 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            background: #f4fbf4;
            overflow-x: hidden;
        }

        img {
            display: block;
            max-width: 100%
        }



        .page {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            height: auto;
            min-height: 100vh;
            padding-left: calc(1rem + 1vw);
            padding-right: calc(1rem + 1vw);
            text-align: center;
        }

        .ss-thank-ico {
            width: 105px;
            margin: 0 auto;
        }

        .ss-title {
            font-size: 76px;
            color: #333333;
            text-transform: uppercase;
            margin: 24px 0;
            line-height: 0.8;
            font-weight: 700;
        }

        .ss-pretitle {
            font-size: 18px;
            color: #7a7a7a;
            margin: 0;
        }

        .page__footer{
            -webkit-box-flex: 0;
            -webkit-flex: none;
            -ms-flex: none;
            flex: none
        }

        .page__content {
            -webkit-box-flex: 1;
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
            padding: 100px 0 20px;

        }

        .footer {
            padding-top: calc(3rem + 1vw);
            padding-bottom: calc(1rem + 1vw);
            font-size: .85rem;
            text-align: center;
        }




    </style>

</head>
<body class="page">

    <main class="page__content">

        <img src="img/ss-thank-ico.svg" alt="thanks" class="ss-thank-ico">
        <h1 class="ss-title">LA<br>RINGRAZIAMO!</h1>

        <p class="ss-pretitle">Il suo ordine è stato ricevuto ed è in fase di elaborazione.<br/>
            Il nostro responsabile La contatterà per chiarire i dettagli.
        </p>

    </main>

    <div class="page__footer">
        <footer class="footer">

            <p>© <script type="text/javascript">var mdate = new Date(); document.write(mdate.getFullYear());</script></p>
        </footer>
    </div>
</body>
</html>
