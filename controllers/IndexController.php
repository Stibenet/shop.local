<?php
/**
 * Контроллер главной страницы
 */
function testAction(){
    echo 'IndexController.php > testAction';
}

/**
 * Формирование главной страницы сайта
 *
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty){
    //инициализация переменной pageTitle с заголовком страницы
    $smarty->assign('pageTitle', 'Главная страница сайта');

    //'index' = какой шаблон необходимо вызвать
    loadTemplate($smarty, 'index');
}