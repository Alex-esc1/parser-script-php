<?php

$xhe_host ="127.0.0.1:7059";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$debug->optimize_memory()."<br>";

$tr="<p>"." ������ ".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";

$t="<p>".$h1->get_inner_text_by_number(0)." \��������\ ".$div->get_by_attribute("class","card-options", false)->get_inner_text()." \ ".$div->get_by_attribute("class","card-features", false)->get_inner_text()."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$spn ="<p>".$h1->get_inner_text_by_number(0)." \����\ ".$div->get_by_attribute("class","card-price-block", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn)."<br>";

$t="<p>".$h1->get_inner_text_by_number(0)." \����\ ".$image->get_src_by_number(4)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";
}

$app->shell_execute("",$file);


$app->quit();
?>