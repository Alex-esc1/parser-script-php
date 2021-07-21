<?php

$xhe_host ="127.0.0.1:7036";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);

$tr="<p>"." ссылка ".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";

$u="<p>"."\название\ ".$h1->get_inner_text_by_number(1)."</p>";
$textfile->add_string_to_file($file,$u)."<br>";

$t="<p>".$h1->get_inner_text_by_number(1)."\фото\ ".$image->get_src_by_number(5)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";

$y="<p>".$h1->get_inner_text_by_number(1)."\описание ".$div->get_by_attribute("class","jshop_prod_description", false)->get_inner_text()."</p>";
$textfile->add_string_to_file($file,$y)."<br>";

$w="<p>".$h1->get_inner_text_by_number(1)."\описание ".$div->get_by_attribute("class","prod_price", false)->get_inner_text()."</p>";
$textfile->add_string_to_file($file,$w)."<br>";

$debug->optimize_memory()."<br>";
}

$app->shell_execute("",$file);


$app->quit();
?>