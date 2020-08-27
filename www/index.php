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
$gclid = "undefined";
if (!empty($_REQUEST['gclid'])) {
$gclid = substr(htmlspecialchars(trim($_REQUEST['gclid'])),0,200);
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
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Кредит онлайн на карту без отказа | Кредиты онлайн круглосуточно | Взять деньги на карту срочно в долг | Займ
    онлайн 24/7</title>
  <meta name="description"
    content="Взять кредит онлайн на карту без отказов, без поручителей, с любой кредитной историей. Деньги на карту онлайн круглосуточно без проверок. Моментальный займ без процентов, без отказа, без проверок. Кредити онлайн на картку" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <!-- Google Tag Manager  -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5N9MWP6');</script>
  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
  <!-- End Google Tag Manager -->
  <script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(function () {
      OneSignal.init({
        appId: "ab257bca-486f-4bd7-8262-6a10693e8735",
      });
    });
  </script>
</head>

<body>
  <!-- Google Tag Manager (noscript)  -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N9MWP6" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="wrapper">
    <header class="page-header" id="headers">
    </header>
    <main>
      <div class="container c">
        <h1 class="zag">Деньги в кредит на любые нужды с 99% одобрением. Только проверенные компании.</h1>
        <div class="banks">
          <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/creditplus.png"
                alt="Moneyveo"></a>
            <div class="bank-features">
              <b>Кредит под 0,01%" для всех новых клиентов</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 17.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 20.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
          </div>
          <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="#" target="_blank" id="dinero" class="bank-img"><img src="images/ccloan.png" alt=""></a>
            <div class="bank-features">
              <b>0% на 30 дней</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 10.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 20.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="#" id="dinero" target="_blank" class="bank-link">Получить займ</a>
          </div>
          <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              target="_blank" id="creditkasa" class="bank-img"><img id="alexcredit" src="images/alexcredit.png"
                alt="alexcredit"></a>
            <div class="bank-features">
              <b>Получите до 3000 грн со 100% * скидкой на свой первый кредит</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 3.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 12.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
          </div>
           <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              target="_blank" id="moneyveo" class="bank-img"><img id="svhidkogroshi" src="images/schvidko.jpeg"
                alt="groshi"></a>
            <div class="bank-features">
              <b>для повторных клиентов под 1%.</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 10.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 20.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
          </div>
          <!--  -->
         
          
          <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/miloan.png"
                alt="miloan"></a>
            <div class="bank-features">
              <b>100 грн в подарок за 1 оформленный кредит !</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 12.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 15.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
          </div>
          <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/2507?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/kf.svg"
                alt="Moneyveo"></a>
            <div class="bank-features">
              <b>Кредит под 0,01%" для всех новых клиентов</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 8.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 8.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
          </div>
            <div class="bank m" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1711?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#"  target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/e-groshi.png" alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div>
            <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/credit7.png"
                alt="miloan"></a>
            <div class="bank-features">
              <b>100 грн в подарок за 1 оформленный кредит !</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 8.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 15.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
          </div>
          <div class="bank  m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/2217?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/money4u.png"
                alt="Moneyveo"></a>
            <div class="bank-features">
              <b>Кредит под 0,01%" для всех новых клиентов</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 5000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 7000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
          </div>
           <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/mycredit.png"
                alt="miloan"></a>
            <div class="bank-features">
              <b>100 грн в подарок за 1 оформленный кредит !</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 12.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 15.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
          </div>
          
           
        <!--  <div class="bank  m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1727?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1727?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
                target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/cashberry.jpg"
              alt="creditkasa"></a>
              <div class="bank-features">
                <b>0,01% в день на перший кредит!</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 5.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 5.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1727?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
           
          

          
			 <!-- <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1706?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/mywallet.jpg"
              alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
            <div class="bank m" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1712?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#"  target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/moneyveo.png" alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div>
         
         <!--  <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/1928?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              target="_blank" id="moneyveo" class="bank-img"><img id="svhidkogroshi" src="images/coshelek.png"
                alt="groshi"></a>
            <div class="bank-features">
              <b>для повторных клиентов под 1%.</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 8.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 8.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="<?php echo $sdHost;?>/in/offer/1928?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
          </div> -->
			
          <!-- <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/1200?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/GlobalCredit.png"
                alt="miloan"></a>
            <div class="bank-features">
              <b>0,01% на 1 кредит</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 8.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 15.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
          </div> -->
          
          
          
          <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
                target="_blank" id="moneyveo" class="bank-img"><img id="svhidkogroshi" src="images/schvidko.jpeg"
              alt="groshi"></a>
              <div class="bank-features">
                <b>для повторных клиентов под 1%.</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div>
            
           <!--  <div class="bank m" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="creditkasa" class="bank-img"><img id="alexcredit" src="images/alexcredit.png" alt="alexcredit"></a>
              <div class="bank-features">
                <b>Получите до 3000 грн со 100% * скидкой на свой первый кредит</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 3.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 12.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
         <!-- -->
          
            <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/creditplus.png"
                alt="Moneyveo"></a>
            <div class="bank-features">
              <b>Кредит под 0,01%" для всех новых клиентов</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 17.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 20.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
          </div>
          <!-- 

          

          <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="#" target="_blank" id="dinero" class="bank-img"><img src="images/ccloan.png" alt=""></a>
            <div class="bank-features">
              <b>0% на 30 дней</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 10.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 20.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="#" id="dinero" target="_blank" class="bank-link">Получить займ</a>
          </div> -->

          



















          <!--  -->
          <!--  -->



          <!-- <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/2507?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/kf.svg"
                alt="Moneyveo"></a>
            <div class="bank-features">
              <b>Кредит под 0,01%" для всех новых клиентов</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 8.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 8.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
          </div> -->
          <!-- <div class="bank m" style="cursor: pointer;"
            onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/creditplus.png"
                alt="Moneyveo"></a>
            <div class="bank-features">
              <b>Кредит под 0,01%" для всех новых клиентов</b>
            </div>
            <table class="bank-properties">
              <tr class="bank-property">
                <td>
                  Первый кредит:
                </td>
                <td>
                  До 17.000 грн.
                </td>
              </tr>
              <tr class="bank-property">
                <td>
                  Max Сумма:
                </td>
                <td>
                  До 20.000 грн.
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
                  Возраст:
                </td>
                <td>
                  от 18 лет
                </td>
              </tr>
            </table>
            <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
          </div> -->
          <!-- <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="dinero" class="bank-img"><img src="images/ccloan.png" alt=""></a>
              <div class="bank-features">
                <b>0% на 30 дней</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="dinero" target="_blank" class="bank-link">Получить займ</a>
            </div> -->




          <!--  -->
          <!--   -->

          <!--  -->
          <!--  <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1200?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/GlobalCredit.png"
              alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 8.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->



          <!-- 
            <div class="bank  m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/2217?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/money4u.png"
              alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 5000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 7000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->




          <!--  -->
          <!-- <div class="bank  m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
                target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/credit7.png"
              alt="creditkasa"></a>
              <div class="bank-features">
                <b>0,01% в день на перший кредит!</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 10.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->








          <!-- <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/creditplus.png"
              alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/2507?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/kf.svg"
              alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 8.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 8.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div>
             -->
          <!-- <div class="bank  m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/2217?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/money4u.png"
              alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 5000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 7000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  -->
          <!--  -->
          <!--  -->












          <!--  <div class="bank m" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/2591?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#"  target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/cly.png" alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 6.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 6.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->




          <!-- <div class="bank m" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#"  target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/monetka.svg" alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->

          <!--  -->

          <!--  -->
          <!--  -->
          <!--  -->
          <!-- <div class="bank m" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1711?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#"  target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/e-groshi.png" alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--   -->
          <!--  <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/miloan.png"
              alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div>
            <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/creditplus.png"
              alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--   -->


          <!--              -->
          <!--  
             -->
          <!-- 
            <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/2514?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="dinero" class="bank-img"><img src="images/forza.png" alt=""></a>
              <div class="bank-features">
                <b>0% на 30 дней</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="dinero" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- <div class="bank m" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1411?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1411?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="dinero" class="bank-img"><img src="images/vasha.png" alt=""></a>
              <div class="bank-features">
                <b>Для повторных клиентов - до 20000 грн под 0.01%</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Процент:
                  </td>
                  <td>
                    от 1%
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1411?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="dinero" target="_blank" class="bank-link">Получить займ</a>
            </div>
             -->

          <!-- <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
                target="_blank" id="moneyveo" class="bank-img"><img id="svhidkogroshi" src="images/alexcredit.png"
              alt="groshi"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 3.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 12.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->






          <!--   -->

          <!--   -->


          <!-- <div class="bank m" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="creditkasa" class="bank-img"><img id="alexcredit" src="images/alexcredit.png" alt="alexcredit"></a>
              <div class="bank-features">
                <b>Получите до 3000 грн со 100% * скидкой на свой первый кредит</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 3.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 12.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  -->





          <!--   -->
          <!-- 
            
            
             -->

          <!-- 
            
             -->
          <!--  -->


          <!--  -->
          <!-- <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="dinero" class="bank-img"><img src="images/ccloan.png" alt=""></a>
              <div class="bank-features">
                <b>0% на 30 дней</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="dinero" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--   -->



          <!-- <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="dinero" class="bank-img"><img src="images/ccloan.png" alt=""></a>
              <div class="bank-features">
                <b>0% на 30 дней</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="dinero" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/miloan.png"
              alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  -->





          <!--  -->

          <!--  -->







          <!-- <div class="bank  m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
                target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/credit7.png"
              alt="creditkasa"></a>
              <div class="bank-features">
                <b>0,01% в день на перший кредит!</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 10.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div>
            
            
             -->

          <!-- 
             -->
          <!-- 
            
             -->


          <!-- 
             -->



          <!-- 
            
            
            
            
             <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1712?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/mazila.jpg"
              alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- 
             -->

          <!-- 
            <div class="bank  m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
                target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/credit7.png"
              alt="creditkasa"></a>
              <div class="bank-features">
                <b>0,01% в день на перший кредит!</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 10.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div>
            <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/miloan.png"
              alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div>
             -->
          <!--  -->
          <!--
            <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/creditplus.png"
              alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->


          <!--  <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/miloan.png"
              alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div>
            <div class="bank  m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
                target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/credit7.png"
              alt="creditkasa"></a>
              <div class="bank-features">
                <b>0,01% в день на перший кредит!</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 10.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
                target="_blank" id="moneyveo" class="bank-img"><img id="svhidkogroshi" src="images/schvidko.jpeg"
              alt="groshi"></a>
              <div class="bank-features">
                <b>для повторных клиентов под 1%.</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- 
            <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/creditplus.png"
              alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/miloan.png"
              alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div>
            
            -->
          <!-- 1 -->

          <!-- 2 -->

          <!-- 3 -->

          <!-- 4 -->

          <!-- 5 -->


          <!-- <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/creditplus.png"
              alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- 6 -->
          <!-- <div class="bank  m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
                target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/credit7.png"
              alt="creditkasa"></a>
              <div class="bank-features">
                <b>0,01% в день на перший кредит!</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 10.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"
              id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="dinero" class="bank-img"><img src="images/ccloan.png" alt=""></a>
              <div class="bank-features">
                <b>для повторных клиентов под 1%.</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="dinero" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- 8 -->
          <!--  <div class="bank  m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1712?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/dinero.png"
              alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- 9 -->

          <!-- <div class="bank m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1492?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="dinero" class="bank-img"><img src="images/creditkasa.png" alt=""></a>
              <div class="bank-features">
                <b>для повторных клиентов под 1%.</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="dinero" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#"  target="_blank" id="dinero" class="bank-img"><img src="images/schvidko.jpeg" alt=""></a>
              <div class="bank-features">
                <b>для повторных клиентов под 1%.</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#"  id="dinero" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- 10 -->

          <!--  -->
          <!-- <div class="bank  m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/creditplus.png"
              alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- <div class="bank  m" style="cursor: pointer;"
              onclick="window.open('<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#" target="_blank" id="dinero" class="bank-img"><img src="images/ccloan.png" alt=""></a>
              <div class="bank-features">
                <b>для повторных клиентов под 1%.</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#" id="dinero" target="_blank" class="bank-link">Получить займ</a>
            </div> -->


          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1704?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#"  target="_blank" id="moneyveo" class="bank-img"><img id="svhidkogroshi" src="images/creditkasa.png" alt="groshi"></a>
              <div class="bank-features">
                <b>0% на 30 дней</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Процент:
                  </td>
                  <td>
                    от 1%
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div>
            
            -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="moneyveo" class="bank-img"><img id="svhidkogroshi" src="images/ccloan.png" alt="groshi"></a>
              <div class="bank-features">
                <b>0% на 30 дней</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  -->
          <!--  -->
          <!--  -->
          <!--  -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1704?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#"  target="_blank" id="moneyveo" class="bank-img"><img id="svhidkogroshi" src="images/creditkasa.png" alt="groshi"></a>
              <div class="bank-features">
                <b>0% на 30 дней</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Процент:
                  </td>
                  <td>
                    от 1%
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#"  target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/creditplus.png" alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div>
            
            <div class="bank" style="cursor: pointer;" onclick="window.open('https://www.prtslinprtslink.com/in/offer/2561?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#"  target="_blank" id="dinero" class="bank-img"><img id="creditplus" src="images/safezaim.jpg" alt="creditplus"></a>
              <div class="bank-features">
                <b>До 10000 грн под 0,01%</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 12.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#"  id="creditplus" target="_blank" class="bank-link">Получить займ</a>
            </div>
            
            
            
            
            
             -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/250?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/250?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/cashinky.png" alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/250?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div>
            -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/miloan.png" alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/cashinsky.png" alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div>
            
            <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/250?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/250?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/moneyveo.png" alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/250?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  <div class="bank" style="cursor: pointer;" onclick="window.open('https://go.salesdoubler.net/in/offer/2551?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="#"  target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/Logo.png" alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="#"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1704?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1704?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/creditkasa.jpg" alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1704?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1492?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1492?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/creditkasa.png" alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1492?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/250?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/250?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="moneyveo" class="bank-img"><img id="moneyveo" src="images/moneyveo.png" alt="Moneyveo"></a>
              <div class="bank-features">
                <b>Кредит под 0,01%" для всех новых клиентов</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 17.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 20.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/250?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1914?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1914?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="moneyveo" class="bank-img"><img id="credit7" src="images/monetka.svg" alt="credit7"></a>
              <div class="bank-features">
                <b>Первый кредит всего под 0.01%</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 7.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 7.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1914?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="moneyveo" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/miloan.png" alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="dinero" class="bank-img"><img id="creditplus" src="images/creditplus.png" alt="creditplus"></a>
              <div class="bank-features">
                <b>До 10000 грн под 0,01%</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 12.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="creditplus" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  -->
          <!-- <div class="bank m" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/miloan.png" alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  -->
          <!--  -->
          <!--  <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/miloan.png" alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div>
            -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1704?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="https://go.salesdoubler.net/in/offer/1704?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="dinero" class="bank-img"><img id="dinero" src="images/creditkasa.png" alt="Dinero"></a>
              <div class="bank-features">
                <b>0% на 30 дней</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 15.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 23.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="https://go.salesdoubler.net/in/offer/1704?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="dinero" target="_blank" class="bank-link">Получить займ</a>
            </div> -->
          <!--  <div class="bank " style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/miloan.png" alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div>
            -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="creditkasa" class="bank-img"><img id="mycredit" src="images/mycredit.png" alt="mycredit"></a>
              <div class="bank-features">
                <b>СТАНЬ ЧЕМПИОНОМ И ВЫИГРАЙ ПРИЗЫ НА 30 000 ГРН</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 6.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 12.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="mycredit" target="_blank" class="bank-link">Получить займ</a>
            </div>            -->
          <!--  -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="creditkasa" class="bank-img"><img id="miloan" src="images/miloan.png" alt="miloan"></a>
              <div class="bank-features">
                <b>100 грн в подарок за 1 оформленный кредит !</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 12.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div>
            -->
          <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php //echo $sdHost;?>/in/offer/1960?aid=63223&source=adwords&campaign=<?php //echo $gclid;?>&promo=<?php //echo $promo;?>&tid1=UA-113174594-1&tid2=<?php //echo $tid2;?>');">
              <a href="<?php //echo $sdHost;?>/in/offer/1960?aid=63223&source=adwords&campaign=<?php //echo $gclid;?>&promo=<?php //echo $promo;?>&tid1=UA-113174594-1&tid2=<?php //echo $tid2;?>"  target="_blank" id="creditkasa" class="bank-img"><img id="gofingo" src="images/gofingo_logo.png" alt="gofingo"></a>
              <div class="bank-features">
                <b>Под 0 процентов!</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 7.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 10.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php //echo $sdHost;?>/in/offer/1960?aid=63223&source=adwords&campaign=<?php //echo $gclid;?>&promo=<?php //echo $promo;?>&tid1=UA-113174594-1&tid2=<?php //echo $tid2;?>"  id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
            </div>       -->
          <!--   <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <a href="<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  target="_blank" id="dinero" class="bank-img"><img id="creditplus" src="images/creditplus.png" alt="creditplus"></a>
              <div class="bank-features">
                <b>До 10000 грн под 0,01%</b>
              </div>
              <table class="bank-properties">
                <tr class="bank-property">
                  <td>
                    Первый кредит:
                  </td>
                  <td>
                    До 10.000 грн.
                  </td>
                </tr>
                <tr class="bank-property">
                  <td>
                    Max Сумма:
                  </td>
                  <td>
                    До 15.000 грн.
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
                    Возраст:
                  </td>
                  <td>
                    от 18 лет
                  </td>
                </tr>
              </table>
              <a href="<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>"  id="creditplus" target="_blank" class="bank-link">Получить займ</a>
            </div>
            
            -->
        </div>
        <div class="main-text">
          <div class="main-text-item">
            <h2 class="main-text-item-title">Требования к заёмщику</h2>
            <div class="main-text-item-text">
              <div class="main-item-text-visible">
                Наличие гражданства Украины (требуется паспорт гражданина). Необходимо, чтобы заёмщику было как минимум
                18 полных лет.
                Кредитная история не учитывается при предоставлении займа
              </div>
            </div>
          </div>
          <div class="main-text-item">
            <h2 class="main-text-item-title">Условия получения займа</h2>
            <div class="main-text-item-text">
              <div class="main-item-text-visible">
                Процент за пользование займом (процентная ставка) находится в пределах от 120 до 916 процентов годовых.
                Если происходит нарушение сроков выплаты, то начисляется неустойка, размер которой равен приблизительно
                0,1% от суммы просрочки в день.
              </div>
              <div class="main-item-text-visible">
                Все кредиты, которые представлены на сайте выдаются на срок от 65 до 365 дней.
              </div>
              <div class="main-item-text-visible">
                Кредиты, займы бывают разными - по своей сути это мгновенная рассрочка. Помимо наших проверенных
                партнеров, которые выдают займы, существует до сих пор или существовало множество других популярных МФО
                организаций. До сих пор многие из них актуальны в интернете, чтобы взять онлайн кредит на карту. Среди
                таких запросов: ccloan (сслоан, сслоун), е гроши (є гроші кредит, э гроши займ), еврогроши (евро гроши),
                ваші гроші (твои гроши кредиты, твої гроші займы), gotivo4ka (gotivochka кредит), мега гроші
                (мегагроши), моней 24, манибум и перечислять их можно до безконечноти….
              </div>
            </div>
          </div>
          <div class="main-text-item" id="nav-link-1">
            <h2 class="main-text-item-title">Пример расчета займа</h2>
            <div class="main-text-item-text">
              <div class="main-item-text-visible">
                <ul>
                  <li>Soscredit.ua - при взятии в долг 500 грн. на 3 месяцев с продлением, комиссия 445,5 грн., общие
                    затраты на займ составляют 945.50 грн., APR 482%.</li>
                  <li>Miloan.ua - при взятии в долг 3000 грн. на 3 месяцев с продлением, комиссия 3510 грн., общие
                    затраты на займ составляют 6510 грн., APR 619%.</li>
                  <li>Mycredit.ua - при взятии в долг 3000 грн. на 3 месяцев с продлением, комиссия 2671 грн., общие
                    затраты на займ составляют 5671 грн., APR 481%.</li>
                  <li>Topcredit.org.ua - при взятии в долг 1000 грн. на 3 месяцев с продлением, комиссия 1325 грн.,
                    общие затраты на займ составляют 2325 грн., APR 693%.</li>
                  <li>Vashagotivochka.ua - при взятии в долг 5000 грн. на 3 месяцев с продлением, комиссия 9000 грн.,
                    общие затраты на займ составляют 14000 грн., APR 916%.</li>
                  <li>KF.ua - при взятии в долг 10000 грн. на 6 месяцев, комиссия 8775.90 грн., общие затраты на займ
                    составляют 18775.9 грн., APR 259%.</li>
                </ul>
              </div>
              <div class="main-item-text-hidden">
                <ul>
                  <li>Bistrozaim.ua - при взятии в долг 10000 грн. на 3 месяцев, комиссия 18000 грн., общие затраты на
                    займ составляют 28000 грн., APR 915%.</li>
                  <li>Creditkasa.com.ua - при взятии в долг 4000 грн. на 3 месяцев, комиссия 5610 грн., общие затраты на
                    займ составляют 9610 грн., APR 730%.</li>
                  <li>Alexcredit.com.ua - при взятии в долг 5000 грн. на 3 месяцев с продлением, комиссия 5864 грн.,
                    общие затраты на займ составляют 10864 грн., APR 620%.</li>
                  <li>Cashinsky.ua - при взятии в долг 1000 грн. на 3 месяцев, комиссия 1661.70 грн., общие затраты на
                    займ составляют 2661.70 грн., APR 851%.</li>
                  <li>Dinero.com.ua - при взятии в долг 3000 грн. на 3 месяцев, комиссия 2610 грн., общие затраты на
                    займ составляют 5610 грн., APR 471%.</li>
                  <li>Moneyveo.ua - при взятии в долг 1000 грн. на 3 месяцев с продлением, комиссия 1512 грн., общие
                    затраты на займ составляют 2512 грн., APR 605%</li>
                  <li>Cashup.com.ua - при взятии в долг 3000 грн. на 3 месяцев, комиссия 235 грн., общие затраты на займ
                    составляют 7050 грн., APR 705%.</li>
                  <li>Sgroshi.com.ua - при взятии в долг 3000 грн. на 3 месяцев, комиссия 5040 грн., общие затраты на
                    займ составляют 8040 грн., APR 860%.</li>
                </ul>
              </div>
              <a href="#" class="main-text-item-more"></a>
            </div>
          </div>
          <div class="main-text-item" id="nav-link-2">
            <h2 class="main-text-item-title">Последствия, наступающие при неуплате заемных средств</h2>
            <div class="main-text-item-text">
              <div class="main-item-text-visible">
                Если кредитор не уплачивает кредитной организации сумму кредита и проценты за использование кредита в
                оговоренный срок, кредитная организация начисляет неустойку за просрочку выплаты по кредиту. Обычно,
                кредитные организации предоставляют дополнительно 3 рабочих дня, чтобы кредитор смог внести очередной
                платеж, либо выплатить сумму кредита полностью, на случай непредвиденной задержки, связанной с
                безналичным переводом денежных средств. Если кредитная организация не получает оговоренный в договоре
                платеж в срок, она связывается с кредитором и напоминает о последствиях, наступающих при неуплате. Если
                длительное время не удается связаться с кредитором и платежи по кредиту не поступают, кредитная
                организация начислит денежный штраф, размер которого обычно равен 0,1% от суммы кредита, точный размер
                штрафов за просрочку следует уточнять при подписании договора на оказание кредитных услуг.
              </div>
              <div class="main-item-text-hidden">
                Следует помнить, что в случае несоблюдения сроков погашения кредита, данные о долге могут быть переданы
                в реестр должников и далее в коллекторские организации. Настоятельно рекомендуется вносить платежи
                вовремя, при возникновении непредвиденных ситуация, связанных с внесением платежей, немедленно
                связываться с кредитной организацией, предоставившей кредит. О сроках внесения платежей можно узнать при
                подписании договора на оказание кредитных услуг в каждой конкретной организации. В случае погашения
                кредита в срок (или раньше срока, если это предусмотрено договором), Вы формируете себе положительную
                кредитную история, которая поможет Вам в дальнейшем при получении кредитов на более крупные суммы. Сайт
                не оказывает финансовых услуг и не взымает денежные средства за предоставленную информацию.
              </div>
              <a href="#" class="main-text-item-more"></a>
            </div>
          </div>
          <div class="main-text-item" id="nav-link-3">
            <h2 class="main-text-item-title">Пример расчета займа</h2>
            <div class="main-text-item-text">
              <div class="main-item-text-visible">
                <ul>
                  <li>Кредит Маркет онлайн. Займ на карту от Сredit Plus ООО «АВЕНТУС УКРАИНА»; ЕГРПОУ 41078230; г.
                    Киев, ул. Сурикова 3А </li>
                  <li>Кредит на карту без проверки кредитной истории от SOS Credit ООО «СОС Кредит Холдинг Б.В.»; ЕГРПОУ
                    39487128; г. Киев, ул. Красногвардейская, 1В</li>
                  <li>Кредит онлайн на карту без отказа банк кредит от ШвидкоГрошіООО «ПОТРЕБИТЕЛЬСКИЙ ЦЕНТР»; ЕГРПОУ
                    37356833; г. Киев, ул. Саксаганского, 133-А</li>
                  <li>Кредитмаркет деньги на карту без звонков в CreditOn ООО «ДЖЕНЕСИС ФИНАНС»; ЕГРПОУ 16103275; г.
                    Киев, пр. Степана Бандеры, 8</li>
                  <li>Кредиты онлайн на банковскую карту от БыстроЗайм ООО «СЛУЖБА МГНОВЕННОГО КРЕДИТОВАНИЯ»; ЕГРПОУ
                    38839217; г. Запорожье, ул. Сорок лет Советской Украины, 39-А</li>
                  <li>Кредит онлайн на карту круглосуточно Украина в Miloan ООО «МИЛОАН»; ЕГРПОУ 16103409; г. Киев, ул.
                    В. Черновола, 12</li>
                  <li>Взять кредит онлайн на карту мгновенно от компании Море Грошей ООО «КРЕДИТНОЕ УЧРЕЖДЕНИЕ «КРЕДИТ
                    КОМЕРЦ»; ЕГРПОУ 76554984; г. Киев, ул. Радищева, 12</li>
                  <li>Онлайн кредит на на карточку. Займ онлайн на карту от ЕвроГрошiООО «КРЕДИТНОЕ УЧРЕЖДЕНИЕ
                    «ЕВРОПЕЙСКАЯ КРЕДИТНАЯ ГРУППА»; ЕГРПОУ 40203427; г. Киев, ул. Хорива, 1А</li>
                  <li>Кредити гроші онлайн. Кредити готівкою без відказу від компанії Pozichka ООО «ИНФИНАНС»; ЕГРПОУ
                    76539881; г. Киев, ул. Жилянская, 41</li>
                  <li>Кредити швидко. Гроші в кредит до зарплати от CashMe ООО «ФИНАНСОВАЯ КОМПАНИЯ «НИКО КАПИТАЛ»;
                    ЕГРПОУ 99857342; г. Киев, ул. Антоновича, д. 176</li>
                  <li>Кредит на карту срочно без отказа в ГотiвочкаООО «СМАРТ ФИНЭКСПЕРТ»; ЕГРПОУ 65437751; г. Николаев,
                    ул. Декабристов, 38А</li>
                  <li>Быстрый кредит онлайн на карту Украина от KLT CreditООО «КЛТ КРЕДИТ»; ЕГРПОУ 40076206; г. Киев,
                    пр. Соборности (Воссоединения), 15</li>
                  <li>Онлайн кредит на карту без отказа круглосуточно в Credit UpООО «ВЕЛЛФИН»; ЕГРПОУ 39952398; г.
                    Киев, ул. Героев Севастополя, 48</li>
                  <li>Кредит на карту онлайн без отказа в Idea BankCash PointООО «КЭШ ПОИНТ»; ЕГРПОУ 98533217; г. Львов,
                    ул. Газовая, 17</li>
                  <li>Моментальный займ на карту без проверок Credit 365ООО «АИА ФИНАНС ГРУПП»; ЕГРПОУ 55439877; г.
                    Киев, ул. Михайловская, 15/1</li>
                  <li>Кредит онлайн на карту без отказа. Микрозайм от Alex CreditООО «АЛЕКСКРЕДИТ»; ЕГРПОУ 41346335; г.
                    Днепр, ул. Стартовая, 9-А</li>
                  <li>Кредит онлайн на карту с плохой кредитной историей от MyCreditOOO «1БЕЗОПАСНОЕ АГЕНТСТВО
                    НЕОБХОДИМЫХ КРЕДИТОВ»; ЕГРПОУ 39861924; г. Киев, бул. Тараса Шевченко, 11 </li>
                  <li>Cashup.com.ua - г. Киев, ул. Еспланадна, 34/2, оф.18, служба поддержки: +38-(097)-571-78-78,
                    +38-(095)-571-78-78, +38-(073)-571-78-78, +38-(044)-227-52-70 </li>
                  <li>Sgroshi.com.ua - ул. Академика Ефремова (Командарма Уборевича) 1, служба поддержки: 0-800-50-10-20
                    (звонок бесплатный) </li>
                  <li>Наш адресг. Киев, ул. Лебедева-Кумача 7В</li>
                </ul>
              </div>
              <div class="main-item-text-hidden">
                <ul>
                  <li>Cashinsky.ua - 03083, г. Киев, проспект Науки, д. 50, служба поддержки: support@cashinsky.com.ua,
                    +38(044)-364-06-46</li>
                  <li>Moneyveo.ua - 01015, г. Киев, ул. Лейпцигская, дом 15 Б, первый этаж, служба поддержки:
                    support@moneyveo.ua, 0-800-21-9393 (бесплатно с любых телефонов по Украине), KS +38(096)-320-9393,
                    MTS +38(050)-320-9393, Life +38(093)-320-9393</li>
                  <li>Dinero.com.ua - 04116, г. Киев, ул. Старокиевская, 10-Г, служба поддержки: info@dinero.com.ua,
                    067-326-2233, 073-326-2233, 050-326-2233</li>
                  <li>Sgroshi.com.ua - ул. Академика Ефремова (Командарма Уборевича) 1, служба поддержки: 0-800-50-10-20
                    (звонок бесплатный)</li>
                  <li>Cashup.com.ua - г. Киев, ул. Еспланадна, 34/2, оф.18, служба поддержки: +38-(097)-571-78-78,
                    +38-(095)-571-78-78, +38-(073)-571-78-78, +38-(044)-227-52-70</li>
                </ul>
              </div>
              <a href="#" class="main-text-item-more"></a>
            </div>
          </div>
          <div class="main-text-item" id="nav-link-3">
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
  <a href="#" class="bank-link"
    style="position:relative; left: auto; transform: none; margin-bottom: 50px; bottom: 10px;">Наверх</a>
  <div class="b-popup" style="display: none;">
    <div class="b-popup-content">
      <span class="close"></span>
      <div class="p-text">Чтобы получить лучшее предложение, оставьте свой номер телефона</div>
      <div class="offers">
        <div class="offers-itm"
          onclick="window.open('https://go.salesdoubler.net/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
          <div class="logo-offer">
            <img id="alexcredit" src="images/alexcredit.png" alt="alexcredit">
          </div>
          <div class="sum-offer">
            <img src="img/ico-grn.png" alt="">
            <p>12.000</p>
          </div>
          <div class="button-offer"
            onclick="window.open('https://go.salesdoubler.net/in/offer/1509?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <p>Получить займ</p>
          </div>
        </div>
        <div class="offers-itm"
          onclick="window.open('https://go.salesdoubler.net/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
          <div class="logo-offer">
            <img id="svhidkogroshi" src="images/creditplus.png" alt="groshi">
          </div>
          <div class="sum-offer">
            <img src="img/ico-grn.png" alt="">
            <p>15.000</p>
          </div>
          <div class="button-offer"
            onclick="window.open('https://go.salesdoubler.net/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <p>Получить займ</p>
          </div>
        </div>
        <div class="offers-itm"
          onclick="window.open('https://go.salesdoubler.net/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
          <div class="logo-offer">
            <img id="svhidkogroshi" src="images/schvidko.jpeg" alt="groshi">
          </div>
          <div class="sum-offer">
            <img src="img/ico-grn.png" alt="">
            <p>20.000</p>
          </div>
          <div class="button-offer"
            onclick="window.open('https://go.salesdoubler.net/in/offer/1272?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <p>Получить займ</p>
          </div>
        </div>

        <!--  <div class="offers-itm" onclick="window.open('https://go.salesdoubler.net/in/offer/1986?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <div class="logo-offer">
              <img src="images/ccloan.png" alt="">
            </div>
            <div class="sum-offer">
              <img src="img/ico-grn.png" alt=""><p>20.000</p>
            </div>
            <div class="button-offer" onclick="window.open('https://go.salesdoubler.net/in/offer/1986?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
              <p>Получить займ</p>
            </div>
          </div> -->
        <div class="offers-itm"
          onclick="window.open('https://go.salesdoubler.net/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
          <div class="logo-offer">
            <img id="miloan" src="images/credit7.png" alt="miloan">
          </div>
          <div class="sum-offer">
            <img src="img/ico-grn.png" alt="">
            <p>15.000</p>
          </div>
          <div class="button-offer"
            onclick="window.open('https://go.salesdoubler.net/in/offer/2099?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <p>Получить займ</p>
          </div>
        </div>
        <div class="offers-itm"
          onclick="window.open('https://go.salesdoubler.net/in/offer/2217?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
          <div class="logo-offer">
            <img id="moneyveo" src="images/money4u.png" alt="Moneyveo">
          </div>
          <div class="sum-offer">
            <img src="img/ico-grn.png" alt="">
            <p>20.000</p>
          </div>
          <div class="button-offer"
            onclick="window.open('https://go.salesdoubler.net/in/offer/2217?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-113174594-1&tid2=<?php echo $tid2;?>');">
            <p>Получить займ</p>
          </div>
        </div>

        <div class="sm_form">
          <form action="/smartmoney/" method="post">
            <input name="first_name" type="text" placeholder="Имя">
            <input class="forPhone" name="phone" type="text" placeholder="+380">
            <input type="submit" class="submitButton" disabled="" value="Введите данные">
          </form>
        </div>
      </div>
    </div>
  </div>

  <a href="http://bit.ly/2HlaV3m" target="_blank" class="viber_chat"></a>
  <script src="/js/jquery.min.js"></script>
  <script src="/js/script.js"></script>
  <script src="/js/maskinput.min.js"></script>
  <script defer async src="/js/visit_site.js"></script>
  <script>
    $(function () {
      $(".forPhone").mask("+380 (99) 999-99-99");
    })
  </script>
  <script>
    $(function () {
      $(".forPhone").keyup(function () {
        let phone_length = $(".forPhone").val().length;
        // console.log(phone_length);
        if (phone_length == 19) {
          $(".submitButton").prop("disabled", false);
          $(".submitButton").val("Отправить");
        } else {
          $(".submitButton").prop("disabled", true);
          $(".submitButton").val("Заполните форму");
        }
      });
      $(".bank a").click(function (e) {
        e.preventDefault();
      });
    });
  </script>
</body>

</html>