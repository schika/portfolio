<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DarkShade
 * Date: 19.10.13
 * Time: 19:41
 * To change this template use File | Settings | File Templates.
 */

class Db {
    private $mysqli;
    function __construct() {
        $host = DarkFolio::app()->data['mysql']['host'];
        $user = DarkFolio::app()->data['mysql']['user'];
        $pass = DarkFolio::app()->data['mysql']['pass'];
        $name = DarkFolio::app()->data['mysql']['name'];
        $this->mysqli = new mysqli($host, $user, $pass, $name);
    }
    public function query($sql) {
        return $this->mysqli->query($sql);
    }
}