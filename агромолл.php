<?php

$xhe_host ="127.0.0.1:7078";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$debug->optimize_memory()."<br>";

$tr="<p>"." ссылка ".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";

$t="<p>".$h1->get_inner_text_by_number(0)."|описание|".$div->get_by_attribute("class","preview_text dotdot", false)->get_inner_text();
$textfile->add_string_to_file($file,$t)."<br>";

$spn ="<p>".$h1->get_inner_text_by_number(0)."|цена|".$div->get_by_attribute("class","prices_block", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn)."<br>";

$t="<p>".$h1->get_inner_text_by_number(0)."|фото|".$image->get_src_by_number(11)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";
}



$app->shell_execute("",$file);


$app->quit();
?>