<?php

$xhe_host ="127.0.0.1:7077";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$debug->optimize_memory()."<br>";

$t="<p>".$ks."\ссылка \ ".$div->get_by_attribute("class","article", false)->get_inner_text()." \фото \ ".$image->get_src_by_number(7)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";
$t="<p>".$ks."\ссылка \ ".$div->get_by_attribute("class","article", false)->get_inner_text()." \цена \ ".$div->get_by_attribute("class","tooltipe__dropdown", false)->get_inner_text();
$textfile->add_string_to_file($file,$t)."<br>";



}

$app->shell_execute("",$file);


$app->quit();
?>