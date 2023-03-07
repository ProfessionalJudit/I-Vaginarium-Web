<?php
require('/usr/local/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('./web/templates');
$smarty->setCompileDir('./web/templates_c');
$smarty->setCacheDir('./web/cache');
$smarty->setConfigDir('./web/configs');

$smarty->assign('name', 'Ivaginarium');
$smarty->display('index.tpl');