<?php

$xhe_host ="127.0.0.1:7012";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$file = "C:\\404.html";
$app->shell_execute("",$file);
$app->quit();
?>