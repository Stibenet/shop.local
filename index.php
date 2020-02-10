<?php
include_once 'config/config.php'; //инициализация настроек
include_once 'library/mainFunctions.php'; //основные функции


//Определение с каким контроллером работать
$controllerName = isset($_GET['controller']) ?
    ucfirst($_GET['controller']) : 'Index';

//Определение с какой функцией работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'Index';
//d($smarty);
loadPage($smarty, $controllerName, $actionName);