<?php
$xhe_host ="127.0.0.1:7010";
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");
$keys = file("C:\\1.txt");
$file = "C:\\1.html";
for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
 $browser->navigate($ks);
$tr="<p>"."|ссылка|".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";
$div->click_by_number(147);
sleep(1);
$t="<p>".$h1->get_inner_text_by_number(0)."~х-ки~".$div->get_inner_html_by_number(69);
$debug->optimize_memory();
$textfile->add_string_to_file($file,$t)."<br>";
}
$app->shell_execute("",$file);
$app->quit();
?>
