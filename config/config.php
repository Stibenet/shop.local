<?php

//Константы для обращения к контроллерам
define('PathPrefix', 'controllers/');
define('PathPostfix', 'Controller.php');

//используемый шаблон
$template = 'default';

//пути к файлам шаблонов (*.tpl)
define('TemplatePrefix', "views/$template/");
define('TemplatePostfix', '.tpl');

//пути к файлам шаблонов в вебпространстве
define('TemplateWebPath', "/templates/{$template}");

//инициализация шаблонизатора Smarty
//put full path to Smarty.class.php
require ('library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePostfix);
$smarty->setCompileDir('tmp/smarty/templates_c');
$smarty->setCacheDir('tmp/smarty/cache');
$smarty->setConfigDir('library/Smarty/configs');
$smarty->assign('templateWebPath', TemplateWebPath);