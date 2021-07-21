<?php

$xhe_host ="127.0.0.1:7030";

// The following code is required to properly run XWeb Human Emulator
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

// navigate to google

$keys = file("C:\\1.txt");

$file = "C:\\3.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	// получить запрос
	$ks = trim($keys[$ii]);
// перейти
  $browser->navigate("https://oz.by/search/?q=".$ks);

	// зададим запрос
	$input->set_value_by_name("q",$ks);
	$btn->click_by_number(0);
	
$spn = $span->get_by_attribute("class","b-product-control__text b-prod", false)->get_inner_text();
$r="<p>".$ks."/".$h1->get_inner_text_by_number(0)."/OZ.by/".$spn."</p>";

$textfile->add_string_to_file($file,$r)."<br>";

}


// показать
$app->shell_execute("",$file);


// Quit
$app->quit();
?>