<?php
require_once 'ECPMByOffers.php';

    $promo = "undefined";
    if (!empty($_REQUEST['q'])) {
        $promo = substr(htmlspecialchars(trim($_REQUEST['q'])),0,200);
    }
$source = "undefined";
    if (!empty($_REQUEST['utm_source'])) {
        $source = substr(htmlspecialchars(trim($_REQUEST['utm_source'])),0,200);
    }
    
    function gaParseCookie() {
      if (isset($_COOKIE['_ga'])) {
        list($version,$domainDepth, $cid1, $cid2) = split('[\.]', $_COOKIE["_ga"],4);
        if (!empty($cid1) && !empty($cid2)) {
             $contents = array('version' => $version, 'domainDepth' => $domainDepth, 'cid' => $cid1.'.'.$cid2);
             $cid = $contents['cid'];
        } else {
            $cid = getDefaultTid2();
        }
      }
      else $cid = getDefaultTid2();
      return $cid;
    }
    
    function getDefaultTid2() {
        
        $tid2 = "undefined";
        
        $name = explode(".", $_SERVER['SERVER_NAME']);
        $name = $name[0];
        
        if (!empty($_GET['tid2'])) {
            $tid2 = $_GET['tid2'];    
        } else if(!empty($_COOKIE[$name])) {
                $params = unserialize($_COOKIE[$name]);
                $tid2 = $params[5];
        } else {
            $tid2 = gaGenUUID();
        }
        
       return $tid2;
    }
    
    function gaGenUUID() {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                // 32 bits for "time_low"
                mt_rand(0, 0xffff), mt_rand(0, 0xffff),
                // 16 bits for "time_mid"
                mt_rand(0, 0xffff),
                // 16 bits for "time_hi_and_version",
                // four most significant bits holds version number 4
                mt_rand(0, 0x0fff) | 0x4000,
                // 16 bits, 8 bits for "clk_seq_hi_res",
                // 8 bits for "clk_seq_low",
                // two most significant bits holds zero and one for variant DCE1.1
                mt_rand(0, 0x3fff) | 0x8000,
                // 48 bits for "node"
                mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }
    
    $tid2 = gaParseCookie();
    
    $sdHost = 'https://go.salesdoubler.net';
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
   
    <!-- Google Tag Manager  -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5N9MWP6');</script>
<!-- End Google Tag Manager -->
    
    <!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='168643268-9',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->
    
    
<link rel="manifest" href="/manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "1971699d-6d6f-4af3-be8e-73af73e5b9a7",
    });
  });
</script>
    

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Кредит онлайн на любую карту</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400i|Roboto:400,500,700" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">	
    <style>
      body,ul{    font-family: "Helvetica"; !important; margin:0;padding:0}body,button,ul{padding:0}body{-webkit-font-smoothing:antialiased}ul{list-style:none}*{box-sizing:border-box}html{-webkit-tap-highlight-color:transparent}a:active,a:hover,a:link,a:visited{text-decoration:none}.clearfix::after{content:"";display:table;clear:both}.bank-img,main{display:block}:focus{outline:0}input[type=text],input[type=submit],input[type=email]{-webkit-appearance:none}button{border:none}.no-scroll{position:fixed;overflow:hidden;width:100%;height:100%}.container{padding:0 20px}.page-header{background: #9ac264 ;padding:8px 0 70px;overflow:hidden}.page-header .container{position:relative}.page-header-inner{position:relative;z-index:3}.header-circle-2::before{content:"";background-size:contain;position:absolute;bottom:75px;left:-85px;width:290px;height:190px;-webkit-transform:rotate(-10deg);-ms-transform:rotate(-10deg);transform:rotate(-10deg)}.header-circle-1,.header-circle-2{width:400px;height:400px;border-radius:50%;position:absolute}.header-circle-1{background: linear-gradient(to right,#c7d300 0,#83d300 100%);}.header-circle-2{background:#C7D300;top:-95px;right:-125px;z-index:0}.top-page-nav-open{float:left;width:25px;height:25px;cursor:pointer}.top-page-nav-close{position:absolute;width:20px;height:20px;top:5px;right:5px;background-size:15px}.top-page-nav{position:fixed;top:0;left:-90%;background:-webkit-gradient(linear,left top,right top,from(rgba(102,176,255,.975)),to(rgba(255,189,255,.975)));background:-webkit-linear-gradient(left,rgba(102,176,255,.975) 0,rgba(255,189,255,.975) 100%);background:-o-linear-gradient(left,rgba(102,176,255,.975) 0,rgba(255,189,255,.975) 100%);background:linear-gradient(to right,rgba(102,176,255,.975) 0,rgba(255,189,255,.975) 100%);width:90%;height:100%;font:15px Helvetica;font-weight:400;padding:20px 15px;-webkit-transition:left .5s ease;-o-transition:left .5s ease;transition:left .5s ease}.top-page-nav a{display:block;color:#FFF;padding:10px 0;border-bottom:1px solid #FFF}.top-page-nav a:hover{color:#009EE3}.top-page-nav-item:last-child a{border-bottom:none}.top-page-nav.visible{left:0}.page-header-text-top{float:right;margin-top:10px;padding-left:60px;color:#FFF;font:11px/20px Helvetica;font-weight:700;text-transform:uppercase;background-size:50px 50px}.page-header-text-bottom{float:right;width:210px;margin-top:75px;font-size:11px;text-transform:uppercase;text-align:right;line-height:20px;clear:both;font-family:Helvetica;font-weight:400}.page-header-text-top span{font-size:22px}.page-header-text-bottom span{font-family:Helvetica;font-weight:700}.banks{margin-bottom:65px}.bank{border-left: 1px #87e142 solid;     border-top: 1px #87e142 solid; background-color: #d0e3c836;
    border-right: 1px #87e142 solid;padding:25px 0 45px;margin:60px -20px 0;position:relative}.bank:nth-child(odd){}.bank:first-child{margin-top:0}.bank-img{width:65%;margin:0 auto 5px}.bank-img img{width:100%}.bank-properties{width:100%;margin-bottom:30px}.bank-property td:first-child{font:12px SANS-SERIF;font-weight:700;color:#000000;text-transform:uppercase;padding-left:15%;letter-spacing:0.5px}.bank-property td:nth-child(2){font:15px Helvetica;font-weight:400;padding-left:10%}.bank-property td{padding-top:5px;padding-bottom:5px}.bank-features{color: lightseagreen;text-align:center;font:15px ;font-weight:400;margin-bottom:15px}.bank-features .bank-feature{color:#009EE3;display:inline-block;margin-bottom:10px;}.bank-features .bank-feature:hover{text-decoration:none}.bank-feature:last-child{margin-bottom:0}.bank-link{width:205px;height:50px;text-align:center;color:#FFF;background:#C7D300;border-radius:10px;display:block;margin:0 auto;font:17px/50px Helvetica;font-weight:700;text-transform:uppercase;letter-spacing:1px;position:absolute;bottom:-25px;left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.main-text{padding:0 20px 60px}.main-text-item{margin-bottom:30px}.main-text-item:last-child{margin-bottom:0}.main-text-item-title{margin:0 0 15px;font:17px Helvetica;font-weight:700;text-align:center}.main-item-text-hidden,.main-item-text-visible{font:13px/20px Helvetica;font-weight:400;text-align:justify}.main-item-text-hidden{display:none}.main-item-text-hidden.visible{display:block}.main-text-item-more{display:block;width:100%;text-align:center;padding-top:10px;border-top:1px solid #009FE3;font:10px Helvetica;font-weight:700;text-transform:uppercase;color:#009FE3;margin-top:20px;cursor:pointer}.main-text-item-more:hover{text-decoration:underline}.main-text-item-more::before{content:"Подробнее"}.main-text-item-more.selected::before{content:"Скрыть"}@media only screen and (min-width:992px){.container{width:1200px;padding:0;margin:0 auto}.header-circle-1,.header-circle-2{width:645px;height:645px}.header-circle-1{right:230px;top:-485px}.header-circle-2{right:-70px;top:-480px}.header-circle-2::before{bottom:10px;left:-425px;width:360px;height:190px}.page-header-text-top{margin:20px 425px 0 0;font-size:14px;background-size:65px 65px;padding-left:85px;line-height:26px}.page-header-text-top span{font-size:28px}.page-header-text-bottom{margin:-85px 100px 0 0}.banks{display:flex;flex-wrap:wrap;align-items:stretch}.bank{width:23.97%;margin-right:0;margin-left:0;padding-top:0}.bank-img img{height:85px;-o-object-fit:contain;object-fit:contain}.bank:nth-child(odd){margin: 60px 10px 0; background:#FFF; background-color: #d0e3c836;}}
    
        
        

   
        h3 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit;
            font-family: "Helvetica", sans-serif;
        }
        
        h3 {
            margin-top: 20px;
            margin-bottom: 10px
        }
        
        h3 {
            font-size: 24px
        }
        
        p {
            margin: 0 0 10px;
            font-family: "Helvetica", sans-serif;
        }
        
        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            font-family: "Helvetica", sans-serif;
        }
        
        .form-control:focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
        }
        
        .form-control::-moz-placeholder {
            color: #999;
            opacity: 1
        }
        
        .form-control:-ms-input-placeholder,
        .form-control::-webkit-input-placeholder {
            color: #999
        }
        
        .form-control::-ms-expand {
            border: 0;
            background-color: transparent
        }
        
        .btn {
            display: inline-block;
            margin-bottom: 0;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }
        
        .btn:active:focus,
        .btn:focus {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }
        
        .btn:focus,
        .btn:hover {
            color: #333;
            text-decoration: none
        }
        
        .btn:active {
            outline: 0;
            background-image: none;
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
        }
        
        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc
        }
        
        .btn-default:focus {
            color: #333;
            background-color: #e6e6e6;
            border-color: #8c8c8c
        }
        
        .btn-default:hover {
            color: #333;
            background-color: #e6e6e6;
            border-color: #adadad
        }
        
        .btn-default:active {
            color: #333;
            background-color: #e6e6e6;
            border-color: #adadad;
            background-image: none
        }
        
        .btn-default:active:focus,
        .btn-default:active:hover {
            color: #333;
            background-color: #d4d4d4;
            border-color: #8c8c8c
        }
        
        .input-group {
            position: relative;
            display: table;
            border-collapse: separate
        }
        
        .input-group .form-control {
            position: relative;
            z-index: 2;
            float: left;
            width: 100%;
            margin-bottom: 0
        }
        
        .input-group .form-control:focus {
            z-index: 3
        }
        
        .input-group-addon,
        .input-group-btn {
            display: table-cell
        }
        
        .input-group .form-control {
            display: table-cell
        }
        
        .input-group .form-control:not(:first-child):not(:last-child) {
            -webkit-border-radius: 0;
            border-radius: 0
        }
        
        .input-group-addon,
        .input-group-btn {
            width: 1%;
            white-space: nowrap;
            vertical-align: middle
        }
        
        .input-group-addon {
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1;
            color: #555;
            text-align: center;
            -webkit-border-radius: 4px;
            border-radius: 4px
        }
        
        .input-group-addon:first-child {
            -webkit-border-bottom-right-radius: 0;
            border-bottom-right-radius: 0;
            -webkit-border-top-right-radius: 0;
            border-top-right-radius: 0;
            border-right: 0
        }
        
        .input-group-btn {
            position: relative;
            font-size: 0;
            white-space: nowrap
        }
        
        .input-group-btn:last-child>.btn {
            -webkit-border-bottom-left-radius: 0;
            border-bottom-left-radius: 0;
            -webkit-border-top-left-radius: 0;
            border-top-left-radius: 0
        }
        
        .input-group-btn:last-child>.btn {
            z-index: 2;
            margin-left: -1px
        }
        
        .input-group-btn>.btn {
            position: relative
        }
        
        .input-group-btn>.btn:active,
        .input-group-btn>.btn:focus,
        .input-group-btn>.btn:hover {
            z-index: 2
        }
        
        .panel {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid transparent;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
        }
        
        .panel-body {
            padding: 15px
        }
        
        .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            -webkit-border-top-right-radius: 3px;
            border-top-right-radius: 3px;
            -webkit-border-top-left-radius: 3px;
            border-top-left-radius: 3px
        }
        
        .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px;
            color: inherit
        }
        
        .panel-primary {
            border-color: #337ab7
        }
        
        .panel-primary>.panel-heading {
            color: #fff;
            background-color: #337ab7;
            border-color: #337ab7
        }
        
        .panel-body:after,
        .panel-body:before {
            content: " ";
            display: table
        }
        
        .panel-body:after {
            clear: both
        }
        
        .pull-right {
            float: right!important
        }
        
        @-ms-viewport {
            width: device-width
        }
        
        #subscribed-fixed {
            display: none;
            position: fixed;
            bottom: -20px;
            right: 15px;
            width: 290px
        }
        
        #subscribed-fixed .form-control {
            width: 170px
        }
        
        #subscribed-fixed .panel {
            border: 1px solid #009acf
        }
        
        #subscribed-fixed .panel-heading {
            cursor: pointer;
            background: #009acf;
            border-bottom: none
        }
        
        #subscribed-fixed .panel-body {
            margin-top: -10px;
            background: #009acf;
            color: #fff
        }
        
        @media (min-width:768px) {
            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }
            .form-inline .input-group {
                display: inline-table;
                vertical-align: middle
            }
            .form-inline .input-group .form-control,
            .form-inline .input-group .input-group-addon,
            .form-inline .input-group .input-group-btn {
                width: auto
            }
            .form-inline .input-group>.form-control {
                width: 100%
            }
        }
        
        @media print {
            * {
                background: 0 0!important;
                color: #000!important;
                -webkit-box-shadow: none!important;
                box-shadow: none!important;
                text-shadow: none!important
            }
            h3,
            p {
                orphans: 3;
                widows: 3
            }
            h3 {
                page-break-after: avoid
            }
        }
      
  </style>
</head>
<body>
    
    <!-- Google Tag Manager (noscript)  -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N9MWP6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
    <img width="1" height="1" style="width:1px;height:1px;position:absolute;" src="https://inv-nets.admixer.net/retgroups.js?subs=c81fe76f-517a-4c83-9f2d-89c269b4e02a&group=1000000043&exact=1&ts=[TIMESTAMP]"/>
	
    
    <div class="wrapper">
		<header class="page-header" id="headers">
			<div class="container">
				<div class="page-header-inner clearfix">
				<div class="page-header-text-top">
					<span>ЗАЙМ НА КАРТУ —</span><br/>
					онлайн оформление<br/> кредитов и займов 24/7!
				</div>
				<div class="page-header-text-bottom">
					<span>Рекомендуем заполнить максимальное<br/> количество заявок</span>
					тем самым вы увеличите свои шансы на получение кредита до 100%
				</div>
				
				</div>
				<div class="header-circle-1"></div>
			<div class="header-circle-2"></div>
			</div>
		</header>
		<main>
			<div class="container">
                <div class="banks">
                    
                    <div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditplus" class="bank-img"><img id="creditplus" src="images/miloan.jpg" alt="vasha"></a>
    <div class="bank-features">
        <b>Под 0 процентов!</b>
    </div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 10000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 0%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>

    <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="vasha" target="_blank" class="bank-link">Получить займ</a>
</div> 
         

                    <div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-img"><img  id="svgroshi" src="images/shvidko-groshi-min.png
" alt="Moneyveo"></a>
    <div class="bank-features">
        <b>Под 2 процента!</b>
    </div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 5000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 2%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>
        </tr>

        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>

    <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-link">Получить займ</a>
</div>
               <div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="mycredit" target="_blank" class="bank-img"><img id="mycredit" src="images/mycredit.svg" alt="creditkasa"></a>

    <div class="bank-features">
        <b>Под 0 процентов!</b></div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 10000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 0%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>
    <a href="<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>"  id="mycredit" target="_blank" class="bank-link">Получить займ</a>
</div>    
         
    <div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/1492?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/creditkasa.jpg" alt="creditkasa"></a>

    <div class="bank-features">
        <b>Под 0 процентов!</b>

    </div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 10000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 0%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>

        </tr>
        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>

    <a href="<?php echo $sdHost;?>/in/offer/1492?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
</div>   
                      

                    
                    <div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="alexcredit" class="bank-img"><img id="alexcredit" src="images/alexcredit.jpg" alt="Alex"></a>
    <div class="bank-features">
        <b>Под 0 процентов!</b>
    </div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 10000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 0%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>

    <a href="<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="alexcredit" target="_blank" class="bank-link">Получить займ</a>
</div>  
                    
                    
<div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/1571?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="dinero" class="bank-img"><img id="dinero" src="images/dinero.png" alt="Dinero"></a>
    <div class="bank-features">
        <b>Под 0 процентов!</b>

    </div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 15000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 0%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>

        </tr>
        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>

    <a href="<?php echo $sdHost;?>/in/offer/1571?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="dinero" target="_blank" class="bank-link">Получить займ</a>
</div>                      
     
                    
                              
                    
    <div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/250?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/moneyveo.png" alt="Moneyveo"></a>
    <div class="bank-features">
        <b>Под 0 процентов!</b>
    </div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 15000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 0%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>
    <a href="<?php echo $sdHost;?>/in/offer/250?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
</div>     
       
    <div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/1556?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="forza" class="bank-img"><img id="forza" src="images/cashinsky.png" alt="forza"></a>

    <div class="bank-features">
        <b>Под 0 процентов!</b>

    </div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 10000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 0%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>

        </tr>
        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>

    <a href="<?php echo $sdHost;?>/in/offer/1556?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="forza" target="_blank" class="bank-link">Получить займ</a>
</div>     
                    
                    
    <div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditplus" class="bank-img"><img id="creditplus" src="images/miloan.jpg" alt="vasha"></a>
    <div class="bank-features">
        <b>Под 0 процентов!</b>
    </div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 10000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 0%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>

    <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="vasha" target="_blank" class="bank-link">Получить займ</a>
</div>  
                    

               
                
      
                          
 
                    
                     
                    
           
        
                    
                    
<div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-img"><img  id="svgroshi" src="images/shvidko-groshi-min.png
" alt="Moneyveo"></a>
    <div class="bank-features">
        <b>Под 2 процента!</b>
    </div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 5000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 2%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>
        </tr>

        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>

    <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-link">Получить займ</a>
</div>          
           
                 
                    
           <div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="mycredit" target="_blank" class="bank-img"><img id="mycredit" src="images/mycredit.svg" alt="creditkasa"></a>

    <div class="bank-features">
        <b>Под 0 процентов!</b></div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 10000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 0%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>
    <a href="<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>"  id="mycredit" target="_blank" class="bank-link">Получить займ</a>
</div>           
         
                    
<div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/1571?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="dinero" class="bank-img"><img id="dinero" src="images/dinero.png" alt="Dinero"></a>
    <div class="bank-features">
        <b>Под 0 процентов!</b>

    </div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 15000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 0%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>

        </tr>
        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>

    <a href="<?php echo $sdHost;?>/in/offer/1571?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="dinero" target="_blank" class="bank-link">Получить займ</a>
</div>                     
                    
          <!-- <div class="bank">
    <a href="<?php echo $sdHost;?>/in/offer/1736?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditlife" class="bank-img"><img id="dinero" src="images/creditlife.png
" alt="creditlife"></a>
    <div class="bank-features">
        <b>Под 0 процентов!</b>

    </div>
    <table class="bank-properties">
        <tr class="bank-property">
            <td>
                Сумма:
            </td>
            <td>
                До 10000 грн.
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Процент:
            </td>
            <td>
                от 0%
            </td>
        </tr>
        <tr class="bank-property">
            <td>
                Возвраст:
            </td>
            <td>
                от 18 лет
            </td>

        </tr>
        <tr class="bank-property">
            <td>
                Срок:
            </td>
            <td>
                от 62 до 365 дней
            </td>
        </tr>
    </table>

    <a href="<?php echo $sdHost;?>/in/offer/1736?aid=63223&source=<?php echo $source;?>&campaign=buttonlink&promo=<?php echo $promo;?>&tid1=&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="dinero" target="_blank" class="bank-link">Получить займ</a>
</div>  
              -->      
                    
                </div>
				<div class="main-text">
					<div class="main-text-item">
						<h2 class="main-text-item-title">Требования к заёмщику</h2>
						<div class="main-text-item-text">
							<div class="main-item-text-visible">
								Наличие гражданства Украины (требуется паспорт гражданина). Необходимо, чтобы заёмщику было как минимум 18 полных лет.
Кредитная история не учитывается при предоставлении займа
							</div>
							
						</div>
					</div>
					<div class="main-text-item"  >
						<h2 class="main-text-item-title">Условия получения займа</h2>
						<div class="main-text-item-text">
							<div class="main-item-text-visible">
								Процент за пользование займом (процентная ставка) находится в пределах от 120 до 916 процентов годовых. Если происходит нарушение сроков выплаты, то начисляется неустойка, размер которой равен приблизительно 0,1% от суммы просрочки в день.

							</div>
							
						</div>
					</div>
					<div class="main-text-item"  id="nav-link-1">
						<h2 class="main-text-item-title">Пример расчета займа</h2>
						<div class="main-text-item-text">
							<div class="main-item-text-visible">
								<ul>
                                  <li>Soscredit.ua - при взятии в долг 500 грн. на 3 месяцев с продлением, комиссия 445,5 грн., общие затраты на займ составляют 945.50 грн., APR 482%.</li>
                                  <li>Miloan.ua - при взятии в долг 3000 грн. на 3 месяцев с продлением, комиссия 3510 грн., общие затраты на займ составляют 6510 грн., APR 619%.</li>
                                  <li>Mycredit.ua - при взятии в долг 3000 грн. на 3 месяцев с продлением, комиссия 2671 грн., общие затраты на займ составляют 5671 грн., APR 481%.</li>
                                  <li>Topcredit.org.ua - при взятии в долг 1000 грн. на 3 месяцев с продлением, комиссия 1325 грн., общие затраты на займ составляют 2325 грн., APR 693%.</li>
                                  <li>Vashagotivochka.ua - при взятии в долг 5000 грн. на 3 месяцев с продлением, комиссия 9000 грн., общие затраты на займ составляют 14000 грн., APR 916%.</li>
                                  <li>KF.ua - при взятии в долг 10000 грн. на 6 месяцев, комиссия 8775.90 грн., общие затраты на займ составляют 18775.9 грн., APR 259%.</li>

								</ul>

							</div>
							<div class="main-item-text-hidden">
							<ul>
                              <li>Bistrozaim.ua - при взятии в долг 10000 грн. на 3 месяцев, комиссия 18000 грн., общие затраты на займ составляют 28000 грн., APR 915%.</li>
                              <li>Creditkasa.com.ua - при взятии в долг 4000 грн. на 3 месяцев, комиссия 5610 грн., общие затраты на займ составляют 9610 грн., APR 730%.</li>
                              <li>Alexcredit.com.ua - при взятии в долг 5000 грн. на 3 месяцев с продлением, комиссия 5864 грн., общие затраты на займ составляют 10864 грн., APR 620%.</li>
                              <li>Cashinsky.ua - при взятии в долг 1000 грн. на 3 месяцев, комиссия 1661.70 грн., общие затраты на займ составляют 2661.70 грн., APR 851%.</li>
                              <li>Dinero.com.ua - при взятии в долг 3000 грн. на 3 месяцев, комиссия 2610 грн., общие затраты на займ составляют 5610 грн., APR 471%.</li>
                              <li>Moneyveo.ua - при взятии в долг 1000 грн. на 3 месяцев с продлением, комиссия 1512 грн., общие затраты на займ составляют 2512 грн., APR 605%</li>

<li>Cashup.com.ua - при взятии в долг 3000 грн. на 3 месяцев, комиссия 235 грн., общие затраты на займ составляют 7050 грн., APR 705%.</li>
                                <li>Sgroshi.com.ua - при взятии в долг 3000 грн. на 3 месяцев, комиссия 5040 грн., общие затраты на займ составляют 8040 грн., APR 860%.</li>

							</ul>

							</div>
							<a href="#" class="main-text-item-more"></a>
						</div>
					</div>
					
					<div class="main-text-item"  id="nav-link-2">
						<h2 class="main-text-item-title">Последствия, наступающие при неуплате заемных средств</h2>
						<div class="main-text-item-text">
							<div class="main-item-text-visible">
								Если кредитор не уплачивает кредитной организации сумму кредита и проценты за использование кредита в оговоренный срок, кредитная организация начисляет неустойку за просрочку выплаты по кредиту. Обычно, кредитные организации предоставляют дополнительно 3 рабочих дня, чтобы кредитор смог внести очередной платеж, либо выплатить сумму кредита полностью, на случай непредвиденной задержки, связанной с безналичным переводом денежных средств. Если кредитная организация не получает оговоренный в договоре платеж в срок, она связывается с кредитором и напоминает о последствиях, наступающих при неуплате. Если длительное время не удается связаться с кредитором и платежи по кредиту не поступают, кредитная организация начислит денежный штраф, размер которого обычно равен 0,1% от суммы кредита, точный размер штрафов за просрочку следует уточнять при подписании договора на оказание кредитных услуг.

							</div>
							<div class="main-item-text-hidden">
							Следует помнить, что в случае несоблюдения сроков погашения кредита, данные о долге могут быть переданы в реестр должников и далее в коллекторские организации. Настоятельно рекомендуется вносить платежи вовремя, при возникновении непредвиденных ситуация, связанных с внесением платежей, немедленно связываться с кредитной организацией, предоставившей кредит. О сроках внесения платежей можно узнать при подписании договора на оказание кредитных услуг в каждой конкретной организации. В случае погашения кредита в срок (или раньше срока, если это предусмотрено договором), Вы формируете себе положительную кредитную история, которая поможет Вам в дальнейшем при получении кредитов на более крупные суммы. Сайт не оказывает финансовых услуг и не взымает денежные средства за предоставленную информацию.
							</div>
							<a href="#" class="main-text-item-more"></a>
						</div>
					</div>
					
					<div class="main-text-item"  id="nav-link-3">
						<h2 class="main-text-item-title">Пример расчета займа</h2>
						<div class="main-text-item-text">
							<div class="main-item-text-visible">
								<ul>
                <li>Кредит Маркет онлайн. Займ на карту от Сredit Plus ООО «АВЕНТУС УКРАИНА»; ЕГРПОУ 41078230; г. Киев, ул. Сурикова 3А </li>
                <li>Кредит на карту без проверки кредитной истории от SOS Credit ООО «СОС Кредит Холдинг Б.В.»; ЕГРПОУ 39487128; г. Киев, ул. Красногвардейская, 1В</li>
                <li>Кредит онлайн на карту без отказа банк кредит от ШвидкоГрошіООО «ПОТРЕБИТЕЛЬСКИЙ ЦЕНТР»; ЕГРПОУ 37356833; г. Киев, ул. Саксаганского, 133-А</li>
                <li>Кредитмаркет деньги на карту без звонков в CreditOn ООО «ДЖЕНЕСИС ФИНАНС»; ЕГРПОУ 16103275; г. Киев, пр. Степана Бандеры, 8</li>
                <li>Кредиты онлайн на банковскую карту от БыстроЗайм ООО «СЛУЖБА МГНОВЕННОГО КРЕДИТОВАНИЯ»; ЕГРПОУ 38839217; г. Запорожье, ул. Сорок лет Советской Украины, 39-А</li>
                <li>Кредит онлайн на карту круглосуточно Украина в Miloan ООО «МИЛОАН»; ЕГРПОУ 16103409; г. Киев, ул. В. Черновола, 12</li>
                <li>Взять кредит онлайн на карту мгновенно от компании Море Грошей ООО «КРЕДИТНОЕ УЧРЕЖДЕНИЕ «КРЕДИТ КОМЕРЦ»; ЕГРПОУ 76554984; г. Киев, ул. Радищева, 12</li>
                <li>Онлайн кредит на на карточку. Займ онлайн на карту от ЕвроГрошiООО «КРЕДИТНОЕ УЧРЕЖДЕНИЕ «ЕВРОПЕЙСКАЯ КРЕДИТНАЯ ГРУППА»; ЕГРПОУ 40203427; г. Киев, ул. Хорива, 1А</li>
                <li>Кредити гроші онлайн. Кредити готівкою без відказу від компанії Pozichka ООО «ИНФИНАНС»; ЕГРПОУ 76539881; г. Киев, ул. Жилянская, 41</li>
                <li>Кредити швидко. Гроші в кредит до зарплати от CashMe ООО «ФИНАНСОВАЯ КОМПАНИЯ «НИКО КАПИТАЛ»; ЕГРПОУ 99857342; г. Киев, ул. Антоновича, д. 176</li>
                <li>Кредит на карту срочно без отказа в ГотiвочкаООО «СМАРТ ФИНЭКСПЕРТ»; ЕГРПОУ 65437751; г. Николаев, ул. Декабристов, 38А</li>
                <li>Быстрый кредит онлайн на карту Украина от KLT CreditООО «КЛТ КРЕДИТ»; ЕГРПОУ 40076206; г. Киев, пр. Соборности (Воссоединения), 15</li>
                <li>Онлайн кредит на карту без отказа круглосуточно в Credit UpООО «ВЕЛЛФИН»; ЕГРПОУ 39952398; г. Киев, ул. Героев Севастополя, 48</li>
                <li>Кредит на карту онлайн без отказа в Idea BankCash PointООО «КЭШ ПОИНТ»; ЕГРПОУ 98533217; г. Львов, ул. Газовая, 17</li>
                <li>Моментальный займ на карту без проверок Credit 365ООО «АИА ФИНАНС ГРУПП»; ЕГРПОУ 55439877; г. Киев, ул. Михайловская, 15/1</li>
                <li>Кредит онлайн на карту без отказа. Микрозайм от Alex CreditООО «АЛЕКСКРЕДИТ»; ЕГРПОУ 41346335; г. Днепр, ул. Стартовая, 9-А</li>
                <li>Кредит онлайн на карту с плохой кредитной историей от MyCreditOOO «1БЕЗОПАСНОЕ АГЕНТСТВО НЕОБХОДИМЫХ КРЕДИТОВ»; ЕГРПОУ 39861924; г. Киев, бул. Тараса Шевченко, 11 </li>
                <li>Cashup.com.ua - г. Киев, ул. Еспланадна, 34/2, оф.18, служба поддержки: +38-(097)-571-78-78, +38-(095)-571-78-78, +38-(073)-571-78-78, +38-(044)-227-52-70 </li>
                <li>Sgroshi.com.ua - ул. Академика Ефремова (Командарма Уборевича) 1, служба поддержки: 0-800-50-10-20 (звонок бесплатный) </li>
                <li>Наш адресг. Киев, ул. Лебедева-Кумача 7В</li>
            </ul>
							</div>
							<div class="main-item-text-hidden">
							<ul>
                              <li>Cashinsky.ua - 03083, г. Киев, проспект Науки, д. 50, служба поддержки: support@cashinsky.com.ua,  +38(044)-364-06-46</li>
                              <li>Moneyveo.ua - 01015, г. Киев, ул. Лейпцигская, дом 15 Б, первый этаж, служба поддержки: support@moneyveo.ua, 0-800-21-9393 (бесплатно с любых телефонов по Украине), KS +38(096)-320-9393, MTS +38(050)-320-9393, Life +38(093)-320-9393</li>
                              <li>Dinero.com.ua - 04116, г. Киев, ул. Старокиевская, 10-Г, служба поддержки: info@dinero.com.ua,  067-326-2233, 073-326-2233, 050-326-2233</li>
                                <li>Sgroshi.com.ua - ул. Академика Ефремова (Командарма Уборевича) 1, служба поддержки: 0-800-50-10-20 (звонок бесплатный)</li>
                                <li>Cashup.com.ua - г. Киев, ул. Еспланадна, 34/2, оф.18, служба поддержки: +38-(097)-571-78-78, +38-(095)-571-78-78, +38-(073)-571-78-78, +38-(044)-227-52-70</li>

							</ul>

							</div>
							<a href="#" class="main-text-item-more"></a>
						</div>
					</div>
					
					<div class="main-text-item"  id="nav-link-3">
						<h2 class="main-text-item-title">Генеральная лицензия</h2>
						<div class="main-text-item-text">
							<div class="main-item-text-visible">
								<ul>
                                  <li>Soscredit.ua - №163</li>
                                  <li>Miloan.ua - №2843</li>
                                  <li>Mycredit.ua - №146</li>
                                  <li>Topcredit.org.ua - №137</li>
                                  <li>Vashagotivochka.ua - №84</li>
                                  <li>KF.ua - №41</li>
                                  <li>Cashup.com.ua - №782</li>
                                  <li>Sgroshi.com.ua - №78</li>
                                  <li>Bistrozaim.ua - №118</li>
                                  <li>Creditkasa.com.ua - №116</li>
                                  <li>Alexcredit.com.ua - №930</li>
                                  <li>Cashinsky.ua - №917</li>
                                  <li>Moneyveo.ua - №888</li>
                                  <li>Dinero.com.ua - №41350844</li>
                                  <li>Наш адрес - г. Киев ул. Лебедева - Кумача 7В</li>
								</ul>

							</div>
						</div>
					</div>
					
				</div>
			</div>
		</main>
	</div>
  
    <a href="#" class="bank-link" style="position:relative; left: auto; transform: none; margin-bottom: 50px; bottom: 10px;">Наверх</a>
  
  
  
      <!--<div id="subscribed-fixed">
        <div class="panel panel-primary" style="border-radius:5px 5px 0 0;border-bottom:0;">
            <div class="panel-heading">
                <div class="pull-right"><i class="fa fa-angle-down"></i></div>
                <h3 class="panel-title">Подпишись на обновления</h3></div>
            <div class="panel-body panel-primary">
                <p><span style="letter-spacing:-0.5px;">Хочешь получать лучшие предложение по кредитам под 0%? Оставь свою электронную почту</span></p>
                <div id="response"></div>

                <form class="form-inline" method="post" action="/catalog/sputnik.php">
                    <div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<input type="hidden" name="aff_id" id="aff_id" value="">
					<input required class="form-control" type="email" id="email" name="email" placeholder="Введите адрес э-почты">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">Ok</button>
					</span>
				</div>
                </form>

            </div>
        </div>
    </div>-->
  
  
  
  
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
   $(document).ready(function(){function e(){$(".top-page-nav").removeClass("visible"),$("html, body").removeClass("no-scroll")}$(".top-page-nav-open").on("click",function(){$(".top-page-nav").addClass("visible"),$("html, body").addClass("no-scroll")}),$(".top-page-nav-close").on("click",function(){e()}),$(".top-page-nav-list a[href*=\\#]").on("click",function(t){t.preventDefault(),$("html,body").animate({scrollTop:$(this.hash).offset().top},1e3),e()}),$(".main-text").on("click",".main-text-item-more",function(e){e.preventDefault(),$(this).toggleClass("selected").siblings(".main-item-text-hidden").toggleClass("visible")})
                               $("#subscribed-fixed .panel-heading").click(function() {
		$("#subscribed-fixed .panel-body").toggle();
		 $(this).find('i').toggleClass('fa-angle-down fa-angle-up')
	});
	
	
	
	
	var x = $(window).width();
	if(x>767) {
		$('#subscribed-content').hide();
	} else {
		$('#subscribed-content').show();
	}


$(document).scroll(function() {
	var x = $(window).width();
	var y = $(this).scrollTop();
	if(x>767) {
		$('#subscribed-content').hide();
		if (y > 200) {
			$('#subscribed-fixed').slideDown();
		} else {
			$('#subscribed-fixed').slideUp();
		}
	} else {
		$('#subscribed-fixed').hide();
		$('#subscribed-content').show();
	}

});
                               });
                               
                               
                               
// add CID to tid2
function getCID()
{
    var match = document.cookie.match('(?:^|;)\\s*_ga=([^;]*)');
    var raw = (match) ? decodeURIComponent(match[1]) : null;
if (raw)
{
match = raw.match(/(\d+\.\d+)$/);
}
var gacid = (match) ? match[1] : null;
if (gacid)
{
    return(gacid);
}
}

var url = new URL(window.location.href);
var promo1 = url.searchParams.get("promo");
var promo2 = url.searchParams.get("q");

if(promo1 !== null) { promo = promo1; }
if(promo2 !== null) { promo = promo2; }
if(!promo1 && !promo2) {
    promo = '';
}

var cid = getCID();

/* $('a.bank-link, a.bank-img, a.bank-feature').each(function(){
   uri = $(this).attr('href');
   uri = uri+ "&tid1=UA-113174594-3&tid2="+cid;
   uri = uri+ "&promo="+promo;
   $(this).attr('href', uri);
}); */                               
                               

  </script>
</body>
</html>