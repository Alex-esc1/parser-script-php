<?php

$xhe_host ="127.0.0.1:7040";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
$browser->navigate("https://makita-minsk.by/");
$input->set_value_by_name("q",$ks);
$button->click_by_name("send");

$spn ="<p>".$ks." \ �-�� \ ".$span->get_by_attribute("class","priceVal", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn)."<br>";

}

$app->shell_execute("",$file);


$app->quit();
?>