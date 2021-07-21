<?php

$xhe_host ="127.0.0.1:7062";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\2.txt");

$file = "C:\\ceny.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);

$spn ="<p>".$ks."\-".$h1->get_inner_text_by_number(0)."\цена\-".$div->get_by_attribute("class","number-box", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn)."<br>";
}

$app->shell_execute("",$file);


$app->quit();
?>