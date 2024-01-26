<?php

require_once('libs/Smarty.class.php');
require_once('includes/db.php');

$_GET['action'] = 'view_home';
require_once('admin.php');

$smarty = new Smarty();
$smarty->setTemplateDir('templates');
$smarty->setConfigDir('configs');
$smarty->setCompileDir('template_c');
$smarty->setCacheDir('cache');
// $smarty->testInstall();

