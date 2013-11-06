<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DarkShade
 * Date: 18.10.13
 * Time: 22:14
 * To change this template use File | Settings | File Templates.
 */
class View {
    //public $template_view; // здесь можно указать общий вид по умолчанию.

    function generate($content_view, $template_view, $data = null) {
        /*
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        */

        include '/application/views/' . $template_view;
    }
}