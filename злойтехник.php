<?php

$xhe_host ="127.0.0.1:7072";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$debug->optimize_memory();
$t="<p>"." ссылка ".$ks."\ ".$h1->get_inner_text_by_number(0)." \описание\ ".$div->get_by_attribute("class","tab-content", false)->get_inner_text()."</p>";
$textfile->add_string_to_file($file,$t);
$spn ="<p>".$h1->get_inner_text_by_number(0)." \цена\ ".$span->get_by_attribute("class","woocommerce-Price-amount amount", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn);
$spn ="<p>".$h1->get_inner_text_by_number(0)." \цена\ ".$span->get_by_attribute("class","onsale", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn)."<br>";
$t="<p>".$h1->get_inner_text_by_number(0)." \фото\ ".$image->get_src_by_number(5)."</p>";
$textfile->add_string_to_file($file,$t);
}

$app->shell_execute("",$file);


$app->quit();
?>