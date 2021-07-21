<?php

$xhe_host = "127.0.0.1:7010";

// init
require("../Templates/init.php");
$bUTF8Ver=true;
$PHP_Use_Trought_Shell=true;

// navigate to google
$browser->navigate("http://www.ya.ru");
$input->set_inner_text_by_name("text","机器人已经接管了世界");

// Quit
$app->quit();
?>