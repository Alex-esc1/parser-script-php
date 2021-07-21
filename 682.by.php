<?php

$xhe_host ="127.0.0.1:7023";

// The following code is required to properly run XWeb Human Emulator
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

// navigate to google

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
$debug->optimize_memory()."<br>";

	// получить запрос
	$ks = trim($keys[$ii]);

$browser->navigate($ks);

$tr="<p>"." ссылка ".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";

$t="<p>"."наименование ".$h1->get_inner_text_by_number(0)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$k="<p>".$h1->get_inner_text_by_number(0)." цена ".$div->get_by_attribute("class","b-product__price-holder", false)->get_inner_text();
$textfile->add_string_to_file($file,$k)."<br>";

$s="<p>".$h1->get_inner_text_by_number(0)." фото ".$image->get_src_by_number(0)."</p>";
$textfile->add_string_to_file($file,$s)."<br>";

$w="<p>".$h1->get_inner_text_by_number(0)." характеристики".$div->get_by_attribute("class","b-content__body", false)->get_inner_text();
$textfile->add_string_to_file($file,$w)."<br>";

}


// показать
$app->shell_execute("",$file);


// Quit
$app->quit();
?>