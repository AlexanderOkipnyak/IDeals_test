<?php

//подключаем основные функции
require_once TEMPLATEPATH . "/includes/inits.php";
require_once TEMPLATEPATH . "/includes/breadcrumbs.php";
//Embedding LESS compile
if ( !class_exists('lessc') ) {
    include_once (TEMPLATEPATH .'/modules/less/lessc.inc.php');
    include_once (TEMPLATEPATH .'/modules/less/less-compile.php');
}

//подключаем сайдбары и виджеты
require_once TEMPLATEPATH . "/includes/widgets/sidebars.php";

//подключаем посттайпы
require_once TEMPLATEPATH . "/includes/posttypes/clients.php";

//подключаем шорткоды
require_once TEMPLATEPATH . "/includes/shortcodes/shortcodes.php";

?>