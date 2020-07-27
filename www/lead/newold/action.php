<?php

if (!empty($_GET)) {
foreach ($_GET as $key => $value) {
	unset($_GET[$key]);
	$_GET[strtolower($key)] = $value;
}	
}

$aid = $_GET['aid'];
$source = $_GET['source'];
$campaign = $_GET['campaign'];
$promo = $_GET['promo'];
$tid1 = $_GET['tid1'];
$tid2 = $_GET['tid2'];

$name = explode(".", $_SERVER['SERVER_NAME'])[0];

//есть урл с параметрами и кука с предыдущими параметрами/ есть урл с параметрами и нет куки
// url +, cookie- // url +, cookie +
if($aid != '') {
    $add_link= "?aid=" . $aid  . "&source=" . $source . "&campaign=" . $campaign . "&promo=" . $promo . "&tid1=" . $tid1 . "&tid2=" . $tid2;
}

//нет урла но есть кука
// url -, cookie+
if($_COOKIE[$name]) {
    $params = unserialize($_COOKIE[$name]);
    $aid = $params[0];
    $source = $params[1];
    $campaign = $params[2];
    $promo = $params[3];
    $tid1 = $params[4];
    $tid2 = $params[5];

    $add_link= "?aid=" . $aid  . "&source=" . $source . "&campaign=" . $campaign . "&promo=" . $promo . "&tid1=" . $tid1 . "&tid2=" . $tid2;
}

//нет урла и нет куки - дефолтные параметры, которые выдаст менеджер Инна!!!
// url -, cookie-
if(($aid == '') && ($_COOKIE[$name] == '')) {
    $aid = 61970;
    $source = 'info';
    $campaign = 'info';
    $promo = 'info';
    $tid1 = 'info';
    $tid2 = 'info';

    $add_link= "?aid=" . $aid  . "&source=" . $source . "&campaign=" . $campaign . "&promo=" . $promo . "&tid1=" . $tid1 . "&tid2=" . $tid2;
}

//$offer_id = 1586;
//$link = "https://rdr.salesdoubler.com.ua/in/offer/" . $offer_id;
$link = "http://zaimi.site/catalog/";
$clickid = $_GET['clickid'];

setcookie('clickid', $clickid, time()+31536000);


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5T3Z392');</script>
<!-- End Google Tag Manager -->



        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Быстрый кредит наличными на карту</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css?v=14" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T3Z392"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="header__bg">
    <div class="container" align="center">
        <div class="text__one"><a class="rdr" href="https://rdr.salesdoubler.com.ua/in/offer/1509?aid=63223&source=action"><img src="https://kredityvonline.com/images/alex-sale.jpg"></a></div>
            
        </div>
</div>

<div class="container" align="center">
    <h2><b>Акция!</b></h2><br>
    <p style="font-size: 1.6em;">Дарим <b>5 000</b> грн за то, что вы с нами. <br>
        Получи кредит в апреле и прими участие в розыгрыше трех денежных призов.<br>
    
        1 место - <b>2 500</b> грн; <br>
        2 место - <b>1 500</b> грн; <br>
        3 место - <b>1 000</b> грн; <br>      
    </p>
    
    <p align="justify" style="font-size: 1em;"> <b>Условия проведения Акции</b><br>
        - Акция проводится в период с «05» апреля 2018 по «05» мая 2018 включительно.<br>
        - В Акции участвуют клиенты, которые получили первый кредит в организации ООО «АЛЕКСКРЕДИТ» через сайт zaimi.site.<br>
        - Розыгрыш призов проводится 05 мая 2018 г., три первых места избираются с помощью ресурса RANDOM.ORG.<br></p>
    
    <div class="clearfix"></div>
    <div style="box-shadow: 0 1px 0 #C7D300;
    border-top: 1px solid #C7D300 !important;
    background: #C7D300;" class="a-btn">
        <a class="rdr" href="https://rdr.salesdoubler.com.ua/in/offer/1509?aid=63223&source=action"> Участвовать в акции</a>
    </div>
</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js?v=5"></script>
<script type="text/javascript">

    function getLink() {
        return "http://rdr.salesdoubler.com.ua/in/postback/2200/<?php echo $clickid; ?>?trans_id=" + $('input[name="email"]').val() +"&token=bWFya2V0aW5nc2RAc2FsZXNkb3VibGVyLmNvbS51YQ";
    }

    var user_aid = "<?php echo($aid); ?>";
    $('a.rdr').each(function(){
        link1st = $(this).data('href');
        link1st = link1st.replace(/aid=[0-9]{1,9}/, 'aid='+user_aid);
        link = link1st+"<?php echo $add_link ?>";
        link = link.replace(/#/g,'');
        $(this).data('href', link).attr('data-href', link);
    });

    $('a.rdr').click(function() {
        url = $(this).data('href');
        if (url !== undefined) {
            window.open(url);
            return false;
        }
    });

    $('#btn_send').click(function(e) {
        var aid = '<?php echo($aid); ?>';
        var source = '<?php echo($source); ?>';
        var campaign = '<?php echo($campaign); ?>';
        var promo = '<?php echo($promo); ?>';
        var email = $('input[name="email"]').val();
        var tid1 = '<?php echo($tid1); ?>';
        var tid2 = '<?php echo($tid2); ?>';

        var url = '<?php echo $link . $add_link; ?>';

        var emailReg = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

        if (!emailReg.test(email)) {
            $('#error-email').fadeIn(500);
            return false;
        }

        $('#error-email').fadeOut(0);

        dataPOST = {
            aid: aid,
            source: source,
            campaign: campaign,
            promo: promo,
            email: email,
            tid1: tid1,
            tid2: tid2
        };

        $.ajax({
            method : "post",
            url : "mail.php",
            data : dataPOST,
            success : function(data) {}
        });

        $.ajax({
            method : "post",
            url : "send.php",
            data : {url: getLink()},
            success : function(data) {}
        });

        window.open(url,'_blank');

    });
</script>
</body>
</html>
