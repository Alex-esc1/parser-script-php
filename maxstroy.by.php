<?php

$xhe_host ="127.0.0.1:7010";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\2.txt");

$file = "C:\\2.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);

$tr="<p>"." ссылка ".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";


$t="<p>"." \ наименование \ ".$h1->get_inner_text_by_number(0)., false)->get_inner_text()."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$t="<p>".$h1->get_inner_text_by_number(0)." \ фото \ ".$div->get_by_attribute("class","us-product-slide slick-slide slick-current slick-active", false)->get_inner_html()."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$t="<p>".$h1->get_inner_text_by_number(0)." \ описание \ ".$div->get_by_attribute("data-qaid","us-product-attributes", false)->get_inner_html()."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$spn ="<p>".$h1->get_inner_text_by_number(0)." \ цена \ ".$span->get_by_attribute("data-qaid","us-price-actual", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn)."<br>";

}

$app->shell_execute("",$file);


$app->quit();
?>