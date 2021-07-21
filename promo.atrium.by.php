<?php

$xhe_host ="127.0.0.1:7100";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$debug->optimize_memory();
$tr="<p>"."|ссылка|".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";
$t="<p>".$h1->get_inner_text_by_number(0)."|описание|".$div->get_by_attribute("class","js-store-prod-text t-store__prod-popup__text t-descr t-descr_xxs", false)->get_inner_text();
$textfile->add_string_to_file($file,$t);
$spn ="<p>".$h1->get_inner_text_by_number(0)."|цена|".$div->get_by_attribute("class","js-store-price-wrapper t-store__prod-popup__price-wrapper", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn);
$div->click_by_number(41);
$t="<p>".$h1->get_inner_text_by_number(0)."|фото|".$image->get_src_by_number(2)."</p>";
$textfile->add_string_to_file($file,$t);
}

$app->shell_execute("",$file);


$app->quit();
?>