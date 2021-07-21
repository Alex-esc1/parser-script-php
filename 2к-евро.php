<?php

$xhe_host ="127.0.0.1:7037";

// The following code is required to properly run XWeb Human Emulator
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

// navigate to google

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
$debug->optimize_memory()."<br>";
	$ks = trim($keys[$ii]);


$browser->navigate("https://2k-evro.by/catalogsearch/?q=".$ks."&s=Найти");

$image->click_by_number(17);

$k="<p>".$h1->get_inner_text_by_number(0)." цена ".$div->get_by_attribute("class","slides", false)->get_inner_html();
$textfile->add_string_to_file($file,$k)."<br>";


}


// пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ
$app->shell_execute("",$file);


// Quit
$app->quit();
?>