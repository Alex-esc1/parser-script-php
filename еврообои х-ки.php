<?php

$xhe_host ="127.0.0.1:7040";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);

$browser->navigate("http://eurooboi.by/search.html");
$input->set_value_by_number(1,$ks);
$button->click_by_number(1);
$image->click_by_number(12);
$image->click_by_number(12);
$spn ="<p>".$ks." \ ".$div->get_by_attribute("class","product-fields", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn);
}

$app->shell_execute("",$file);


$app->quit();
?>