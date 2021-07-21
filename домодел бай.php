<?php
$xhe_host ="127.0.0.1:7090";
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");
$keys = file("C:\\1.txt");
$file = "C:\\1.html";
for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$debug->optimize_memory();
$tr="<p>"."|ссылка|".$ks."</p>";
$textfile->add_string_to_file($file,$tr);
$t="<p>".$h1->get_inner_text_by_number(0)."|Описание|".$div->get_by_attribute("class","company__data", false)->get_inner_text();
$textfile->add_string_to_file($file,$t);
$spn ="<p>".$h1->get_inner_text_by_number(0)."|Контакты|".$div->get_by_attribute("class","company__contacts", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn);
$t="<p>".$h1->get_inner_text_by_number(0)."|Категории|".$div->get_by_attribute("class","utags js-utags m-b-60", false)->get_inner_text();
$textfile->add_string_to_file($file,$t);
}
$app->shell_execute("",$file);
$app->quit();
?>