<?php

$xhe_host ="127.0.0.1:7030";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\2.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$debug->optimize_memory()."<br>";
$tr="<p>"." ������ ".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";

$t="<p>"." \ ������������ \ ".$h1->get_inner_text_by_number(0)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$t="<p>".$h1->get_inner_text_by_number(0)." \ �������� \ ".$div->get_by_attribute("class","tab-content", false)->get_inner_text()."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$spn ="<p>".$h1->get_inner_text_by_number(0)." \ ���� \ ".$div->get_inner_text_by_number(119);
$textfile->add_string_to_file($file,$spn)."<br>";

$image->click_by_name("image");
$t="<p>".$h1->get_inner_text_by_number(0)." \ ���� \ ".$image->get_src_by_number(0)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";
$debug->optimize_memory()."<br>";
}

$app->shell_execute("",$file);


$app->quit();
?>