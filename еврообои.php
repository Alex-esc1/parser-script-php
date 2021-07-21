<?php

$xhe_host ="127.0.0.1:7039";

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

$debug->optimize_memory()."<br>";

$s="<p>".$ks." ".$image->get_src_by_number(12)."</p>";
$textfile->add_string_to_file($file,$s)."<br>";
}

$app->shell_execute("",$file);


$app->quit();
?>