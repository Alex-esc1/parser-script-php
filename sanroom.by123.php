<?php

$xhe_host ="127.0.0.1:7063";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\2.txt");

$file = "C:\\ceny.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$debug->optimize_memory()."<br>";
$spn ="<p>".$ks."\ ".$h1->get_inner_text_by_number(0)."\цена\ ".$div->get_by_attribute("itemprop","offers", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn)."<br>";
}

$app->shell_execute("",$file);


$app->quit();
?>