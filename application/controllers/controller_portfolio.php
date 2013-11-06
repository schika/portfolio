<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DarkShade
 * Date: 19.10.13
 * Time: 19:37
 * To change this template use File | Settings | File Templates.
 */
class Controller_Portfolio extends Controller {
    function __construct() {
        $this->view = new View();
        $this->model = new Model_Portfolio();
    }
    function action_index() {
        $data = $this->model->get_data();
        $this->view->generate('portfolio_view.php', 'template_view.php', $data);
    }
}