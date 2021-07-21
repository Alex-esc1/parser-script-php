<?php
$xhe_host ="127.0.0.1:7092";
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
$spn ="<p>".$h1->get_inner_text_by_number(0)."|ТИП|".$div->get_by_attribute("class","ContentBox__content Features__content", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn);
$spn ="<p>".$h1->get_inner_text_by_number(0)."|Контакты|".$div->get_by_attribute("class","PersonalHeaderButtons__list", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn);
$t="<p>".$h1->get_inner_text_by_number(0)."|Категории|".$span->get_by_attribute("class","PersonalHeader__backButton", false)->get_inner_text();
$textfile->add_string_to_file($file,$t);
}
$app->shell_execute("",$file);
$app->quit();
?>