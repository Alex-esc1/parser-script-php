<?php

$xhe_host ="127.0.0.1:7095";

// The following code is required to properly run XWeb Human Emulator
require("../Templates/xweb_human_emulator.php");

$browser->navigate("https://www.isolux.ru/instrument-i-oborudovaniye/teplovyye-pushki.html");
$browser->navigate('https://catalog.onliner.by/');
$div->click_by_number(1,0);
$input->set_value_by_number(0,"Виниловые полы",0);



// Quit
$app->quit();
?>