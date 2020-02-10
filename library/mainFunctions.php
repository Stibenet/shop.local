<?php

/**
 * Формирование запрашиваемой страницы
 * 
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 */
function loadPage($smarty, $controllerName, $actionName = 'index'){
    //Подключение контроллера
    include_once PathPrefix . $controllerName . PathPostfix;

    d(PathPrefix . $controllerName . PathPostfix);
    //Формирование названия функции
    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * Загрузка шаблона
 *
 * @param object $smarty объект шаблонизатора
 * @param string $templateName название файла шаблона
 */
function loadTemplate($smarty, $templateName){
    $smarty->display(TemplatePrefix . $templateName . TemplatePostfix);
}

/**
 * Функция отладки. Останавливает работу программы выводя значение переменной $value
 *
 * @param variant $value переменная для вывода на страницу
 * @param int $die
 */
function d($value = null, $die = 1){
    echo 'Debug: <br><pre>';
    print_r($value);
    echo '</pre>';
    if ($die) die;
}