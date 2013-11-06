<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DarkShade
 * Date: 18.10.13
 * Time: 22:14
 * To change this template use File | Settings | File Templates.
 */
class Controller {
    public $model;
    public $view;

    function __construct() {
        $this->view = new View();
    }
    function action_index() {

    }
}