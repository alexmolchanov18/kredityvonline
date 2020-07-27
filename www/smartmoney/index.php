<?php

header("Location:https://go.salesdoubler.net/in/offer/1436?aid=63223&source=adwords&tid1=UA-113174594-1");
    require_once(__DIR__.'/api/init.php');

    $isDebug = false;
    $smartMoneyAPI = new SmartMoneyAPI($isDebug);
    $smartMoneyAPI->send();
?>