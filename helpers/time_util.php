<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mikeh
 * Date: Sep 8, 2010
 * Time: 8:36:38 PM
 * To change this template use File | Settings | File Templates.
 */
 
class TimeUtilHelper extends AppHelper{

    function addHours($str_timestamp, $hours){


        $new_time = strtotime(date("Y-m-d H:i:s", strtotime($str_timestamp)) . " +".$hours." hour");

        return date("Y-m-d H:i:s", $new_time);

    }

}
