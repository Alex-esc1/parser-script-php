<?php

$xhe_host ="127.0.0.1:7016";

// The following code is required to properly run XWeb Human Emulator
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\2.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	// получить запрос
	$ks = trim($keys[$ii]);

$browser->navigate("https://priceguard.ru/search?q=".$ks);
$image->click_by_number(1);
$image->screenshot_by_number("C:\\foto\\".$ks.".jpeg",1);
$s="<p>".$ks." фото".$image->get_src_by_number(1)."</p>";
$debug->optimize_memory()."<br>";
$textfile->add_string_to_file($file,$s)."<br>";

$t="<p>".$ks." название".$h1->get_inner_text_by_number(0)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$debug->optimize_memory()."<br>";
$t="<p>".$ks." аннотация".$h2->get_inner_text_by_number(0)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$debug->optimize_memory()."<br>";
$y="<p>".$ks." автор".$span->get_by_attribute("class","op-param-value nw", false)->get_inner_text()."</p>";
$textfile->add_string_to_file($file,$y)."<br>";



	
}




// показать
$app->shell_execute("",$file);

// Quit
$app->quit();
?>