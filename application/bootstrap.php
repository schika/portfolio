<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DarkShade
 * Date: 18.10.13
 * Time: 22:14
 * To change this template use File | Settings | File Templates.
 */
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/db.php';
require_once 'core/route.php';

DarkFolio::app()->start();

class DarkFolio {
    public static $db = null;
    protected static $instance;
    public $data = null;
    function __construct() {/* ... @return Singleton */}
    function __clone() {/* ... @return Singleton */}
    function __wakeup() {/* ... @return Singleton */}
    public static function app() {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class();
        }
        return self::$instance;
    }
    public function start() {
        $this->data = include 'config.php';
        self::$db = new Db();
        Route::start();
    }
}