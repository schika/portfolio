<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DarkShade
 * Date: 19.10.13
 * Time: 12:20
 * To change this template use File | Settings | File Templates.
 */
class Model_Portfolio extends Model {
    function get_data() {
        $data = array();
        $query = DarkFolio::$db->query("SELECT * FROM works");
        while ($row = $query->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}