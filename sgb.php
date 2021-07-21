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

$r="<p>".$ks." название ".$span->get_inner_text_by_number(30)."</p>";
$textfile->add_string_to_file($file,$r)."<br>";

$y="<p>".$ks." цена ".$span->get_inner_text_by_number(31)."</p>";
$textfile->add_string_to_file($file,$y)."<br>";

$s="<p>".$ks." фото ".$image->get_src_by_number(1)."</p>";
$textfile->add_string_to_file($file,$s)."<br>";
}

$app->shell_execute("",$file);


$app->quit();
?>