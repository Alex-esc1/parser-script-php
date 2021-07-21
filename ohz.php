<?php

$xhe_host ="127.0.0.1:7013";

// The following code is required to properly run XWeb Human Emulator
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

// navigate to google

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{

	// получить запрос
	$ks = trim($keys[$ii]);

$browser->navigate($ks);

$t="<p>"."1 ".$h1->get_inner_text_by_number(0)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$k="<p>"."2 ".$div->get_by_attribute("class","tovar-price-button", false)->get_inner_text();
$textfile->add_string_to_file($file,$k)."<br>";

$debug->optimize_memory()."<br>";

$image->click_by_number(2);
$s="<p>"."3 ".$image->get_src_by_number(6)."</p>";
$textfile->add_string_to_file($file,$s)."<br>";

}


// показать
$app->shell_execute("",$file);


// Quit
$app->quit();
?>