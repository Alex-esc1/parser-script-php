<?php

$xhe_host ="127.0.0.1:7012";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$file = "C:\\404.html";

$browser->navigate('https://minus50.by/search?categoryId=0&searchText=%D0%BA%D0%B8%D1%80%D0%BF%D0%B8%D1%87%D0%B8');
$textfile->add_string_to_file($file,$tr)."<br>";
$t="<p>".$h1->get_inner_text_by_number(0)."~тест поиска~".$input->get_inner_text_by_number(0);
$textfile->add_string_to_file($file,$t);
$browser->navigate('https://minus50.by/category/kirpichi');
$textfile->add_string_to_file($file,$tr)."<br>";
$t="<p>".$h1->get_inner_text_by_number(0)."~тест категории~".$windows->get_system_time();
$textfile->add_string_to_file($file,$t);
$t="<p>".$h1->get_inner_text_by_number(0)."~тест категории~".$div->get_by_attribute("class","left-menu", false)->get_inner_text();
$textfile->add_string_to_file($file,$t);

$app->quit();
?>