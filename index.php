<?php
require('/usr/local/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('./web/templates');
$smarty->setCompileDir('./web/templates_c');
$smarty->setCacheDir('./web/cache');
$smarty->setConfigDir('./web/configs');

if (empty($_GET[page])) {
    $template = "index.tpl";
    $smarty->assign('name', 'Ivaginarium');
} else {
    $page = $_GET["page"];
    switch ($page) {
        case "home":
            $template = "index.tpl";
            $smarty->assign('name', 'Ivaginarium');
            break;

        case "test":
            $template = "index.tpl";
            $smarty->assign('name', 'Test ');
            break;

        case "test2":
            $template = "index.tpl";
            $smarty->assign('name', 'Test 2');
            break;

        default:
            $template = "404.tpl";
            break;
    }
}


$smarty->display($template);
?>