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
            <div class="text__one">Быстрый подбор кредита онлайн и наличными</div>
        <div class="text__two"><b>0% онлайн кредит новому клиенту!</b></div>
            
        </div>
</div>

<div class="container" align="center">
    <h2><b>Благодарим за выбор zaimi.site</b></h2><br><br>
    <p style="font-size: 1.6em;">Мы уже отправили Вам электронное письмо с наиболее выгодными предложениями от лучших кредитных организаций Украины. Пожалуйста, проверьте Ваш почтовый ящик или Вы можете подобрать кредит самостоятельно на нашем сайте.</p><br><br>
    
    
    <div class="clearfix"></div>
    <div style="box-shadow: 0 1px 0 #C7D300;
    border-top: 1px solid #C7D300 !important;
    background: #C7D300;" class="a-btn">
        <a class="rdr" href="http://zaimi.site/catalog/" data-href="<?php echo $link; ?>" >Выбрать лучшее<br> предложение самостоятельно</a>
    </div>
</div>

<div class="header__bg" style="margin-top: 30px;">
    <div class="container">
        <div class="col-md-7 col-sm-7 col-xs-12" style="padding-left: 0px; padding-top: 50px;">
            <div class="text__five">Как происходит оформление кредита</div>
            <div class="text__sex">
Обычно, чтобы получить кредит, мы вынуждены обращаться в банк и сообщать цель кредита. В
целом, это означает обращаться в учреждение, что не предполагает скорости или удобства в
обслуживании. Под удобством подразумевается, что заявка на получение кредита может
оформляться через Интернет, по телефону или любым другим способом, при условии, что
этот способ легкодоступный и не требует много времени и усилий. Именно поэтому небанковский
кредит намного лучший вариант. Подавайте заявку на быстрый кредит не выходя из
дома и получайте деньги на карту сразу как ваша заявка на получение кредита будет
рассмотрена. Это легко и удобно.
Чтобы подать заявку на займ, взвесьте ваши потребности, далее выберите сумму и срок выплаты
кредита, после чего подтвердите вашу заявку.
            </div>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12" align="center">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img src="images/icon_1.png" style="margin: 30px 0px 15px;">
                <div class="text__seven">Быстро</div>
                <div class="text__sex">10 минут и деньги уже у вас на счету.</div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img src="images/icon_2.png" style="margin: 30px 0px 15px;">
                <div class="text__seven">Просто</div>
                <div class="text__sex">Без очередей и мороки с бумагами.</div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img src="images/icon_3.png" style="margin: 30px 0px 15px;">
                <div class="text__seven">Прозрачно</div>
                <div class="text__sex">Никаких дополнительных платежей.</div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img src="images/icon_4.png" style="margin: 30px 0px 15px;">
                <div class="text__seven">Безопасно</div>
                <div class="text__sex">Ваши данные надежно защищены.</div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding-bottom: 40px; padding-top: 20px;">
    <div class="text__five" style="color: #343233;">Требования к заемщику</div>
    <div class="text__sex" style="color: #343233;">
Наличие гражданства (нужен паспорт гражданина). Заемщику должно исполниться
18 лет. Кредитная история не учитывается при вопросе предоставления займа.
    </div>
    <div class="text__five" style="color: #343233;">Условия получения кредита</div>
    <div class="text__sex" style="color: #343233;">
Процент за пользование займом (процентная ставка) находится в пределах от 120 до 700
годовых. В случае нарушения сроков выплаты начисляется штраф, размер которого
составляет около 0,1% от просроченной суммы в день.
    </div>
    <div class="text__five" style="color: #343233;">Образец расчета кредита</div>
    <div class="text__sex" style="color: #343233;">
Клиент берет займ размером 1000 на срок 90 дней процентом за пользование кредитом от
0% до 60% в месяц. Сумма, которую предстоит вернуть, составит от 1000 до 1600.
    </div>
    <div class="text__five" style="color: #343233;">Последствия неуплаты заемных денег</div>
    <div class="text__sex" style="color: #343233;">
Если кредитор не платит кредитной организации сумму кредита и проценты за пользование
кредитом в условленный срок, кредитная организация начисляет штраф за просрочку
выплаты по кредиту. Обычно, кредитные организации предоставляют дополнительно 3 рабочих дня, чтобы
кредитор мог внести очередной платеж или выплатить кредитную сумму полностью, на случай
непредвиденной задержки, связанной с безналичным переводом средств. В случае, если
кредитная организация не получает указанный в договоре платеж вовремя, она связывается с
кредитором и напоминает о последствиях неуплаты. В случае, если с кредитором не удается связаться
длительное время и кредитные платежи не поступают, кредитная организация насчитывает денежный
штраф, размер которого в норме равна 0,1% от суммы кредитования. Точный размер штрафов за
просрочки необходимо определять при подписании договора на предоставление кредитных услуг.
Необходимо помнить, что в случае несоблюдения сроков выплаты кредита, данные о долге
могут быть переданы в реестр должников и, в дальнейшем, к коллекторских организаций.

Настоятельно рекомендуется вносить платежи вовремя, а при возникновении непредвиденных
ситуаций, связанных с внесения платежей, немедленно связываться с кредитной организацией, которая
выдала кредит. О сроках внесения платежей можно узнать при подписании договора на
предоставление кредитных услуг в каждой конкретной организации. В случае выплаты кредита вовремя
(Или заблаговременно, если подобное предусмотрено договором), Вы положительно влияете на свою
кредитную историю, которая в будущем поможет Вам при получении кредитов на большие суммы.
</div>
    
    <div class="text__five" style="color: #343233;">Сервис zaimi.site</div>
    <div class="text__sex" style="color: #343233;">
Данный сайт не является финансовой компанией.
Сайт агрегирует данные для сравнения предложений по онлайн кредитам в Украине от наших партнеров с ключевой информацией про займы на карту.
Детальная информация про онлайн кредиты наших партнеров и все финансовые условия представлены на официальных сайтах партнерах.
Данный сайт не несет ответственность за финансовые отношения между фирмами партнерами и получателями кредитов и не собирает конфиденциальной информации о клиентах.
</div>
    
</div>

<div class="header__bg">
    <div class="container">
        <div class="text__five" align="center">Адреса наших партнеров.</div>
        <div class="text__sex" style=" -webkit-column-width: 200px;
    -moz-column-width: 200px;
    column-width: 30%;
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 30px;
    -moz-column-gap: 30px;
    column-gap: 30px;
   ">
            <p><b>Сredit Plus</b><br>
                ООО «АВЕНТУС УКРАИНА»;<br> ЕГРПОУ 41078230;<br> г. Киев, ул. Сурикова 3А
            </p>
            <p><b>SOS Credit</b><br>
                ООО «СОС Кредит Холдинг Б.В.»;<br> ЕГРПОУ 39487128;<br> г. Киев, ул. Красногвардейская, 1В
            </p>
            <p><b>ШвидкоГроші</b><br>
                ООО «ПОТРЕБИТЕЛЬСКИЙ ЦЕНТР»;<br> ЕГРПОУ 37356833;<br> г. Киев, ул. Саксаганского, 133-А
            </p>
            <p><b>Credit On</b><br>
                ООО «ДЖЕНЕСИС ФИНАНС»;<br> ЕГРПОУ 16103275;<br> г. Киев, пр. Степана Бандеры, 8
            </p>
            <p><b>БыстроЗайм</b><br>
                ООО «СЛУЖБА МГНОВЕННОГО КРЕДИТОВАНИЯ»;<br> ЕГРПОУ 38839217;<br> г. Запорожье, ул. Сорок лет Советской Украины, 39-А</p>
            <p><b>Miloan</b><br>
                ООО «МИЛОАН»;<br> ЕГРПОУ 16103409;<br> г. Киев, ул. В. Черновола, 12</p>
            <p><b>Море Грошей</b><br>
                ООО «КРЕДИТНОЕ УЧРЕЖДЕНИЕ «КРЕДИТ КОМЕРЦ»;<br> ЕГРПОУ 76554984;<br> г. Киев, ул. Радищева, 12</p>
            <p><b>ЕвроГрошi</b><br>
                ООО «КРЕДИТНОЕ УЧРЕЖДЕНИЕ «ЕВРОПЕЙСКАЯ КРЕДИТНАЯ ГРУППА»;<br> ЕГРПОУ 40203427;<br> г. Киев, ул. Хорива, 1А</p>
            <p><b>Готiвочка</b><br>
                ООО «СМАРТ ФИНЭКСПЕРТ»;<br> ЕГРПОУ 65437751;<br> г. Николаев, ул. Декабристов, 38А</p>
            <p><b>KLT Credit</b><br>
                ООО «КЛТ КРЕДИТ»;<br> ЕГРПОУ 40076206;<br> г. Киев, пр. Соборности (Воссоединения), 15</p>
            <p><b>Credit Up</b><br>
                ООО «ВЕЛЛФИН»;<br> ЕГРПОУ 39952398;<br> г. Киев, ул. Героев Севастополя, 48</p>
            <p><b>Cash Point</b><br>
                ООО «КЭШ ПОИНТ»;<br> ЕГРПОУ 98533217;<br> г. Львов, ул. Газовая, 17</p>
            <p><b>Credit 365</b><br>
                ООО «АИА ФИНАНС ГРУПП»;<br> ЕГРПОУ 55439877;<br> г. Киев, ул. Михайловская, 15/1</p>
            <p><b>Alex Credit</b><br>
                ООО «АЛЕКСКРЕДИТ»;<br> ЕГРПОУ 41346335;<br> г. Днепр, ул. Стартовая, 9-А</p>
            <p><b>My Credit</b><br>
                OOO «1БЕЗОПАСНОЕ АГЕНТСТВО НЕОБХОДИМЫХ КРЕДИТОВ»;<br> ЕГРПОУ 39861924;<br> г. Киев, бул. Тараса Шевченко, 11</p>
        </div><br><br>
    <center> <div class="a-btn">
            <a class="rdr" href="http://zaimi.site/catalog/" data-href="<?php echo $link; ?>" >Смотреть кредитные предложения</a>
    </div></center>
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
