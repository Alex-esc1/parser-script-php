<?php
$xhe_host ="127.0.0.1:7093";
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");
$keys = file("C:\\1.txt");
$file = "C:\\1.html";
for($ii=0;$ii<count($keys);$ii++) 
{
$ks = trim($keys[$ii]);
$browser->navigate($ks);
sleep(5);
$spn ="<p>"."|123|".$div->get_by_attribute("class","rogA2c HY5zDd", false)->get_inner_html();
$textfile->add_string_to_file($file,$spn)."<p>";
$debug->optimize_memory();
$div->click_by_number(727);
sleep(5);
$spn ="<p>"."|123|".$div->get_by_attribute("class","rogA2c HY5zDd", false)->get_inner_html();
$textfile->add_string_to_file($file,$spn)."<p>";
$debug->optimize_memory();

}

$app->shell_execute("",$file);
$app->quit();
?>