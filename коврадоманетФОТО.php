<?php

$xhe_host ="127.0.0.1:7036";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\123.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
$browser->navigate("http://kovradomanet.by/catalog/search/result.html");

$input->set_inner_text_by_name("search",$ks);
$button->click_by_number(0);
$image->click_by_number(4);


$t="<p>".$ks."\фото\ ".$image->get_src_by_number(5)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";


$debug->optimize_memory()."<br>";
}

$app->shell_execute("",$file);


$app->quit();
?>