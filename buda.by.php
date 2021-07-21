<?php

$xhe_host ="127.0.0.1:7033";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);

$tr="<p>"." ссылка ".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";

$t="<p>"."\название\ ".$h1->get_inner_text_by_number(0)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$t="<p>".$h1->get_inner_text_by_number(0)."\фото\ ".$image->get_src_by_number(3)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$t="<p>".$h1->get_inner_text_by_number(0)."\описание\ ".$div->get_by_attribute("class","b-content__body b-user-content", false)->get_inner_text()."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$spn ="<p>".$h1->get_inner_text_by_number(0)."\цена\ ".$div->get_by_attribute("class","b-product__price-holder", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn)."<br>";

$debug->optimize_memory()."<br>";
}

$app->shell_execute("",$file);


$app->quit();
?>