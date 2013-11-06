<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DarkShade
 * Date: 19.10.13
 * Time: 12:20
 * To change this template use File | Settings | File Templates.
 */
class Controller_Main extends Controller {
    function action_index() {
        $this->view->generate('main_view.php', 'template_view.php');
    }
}