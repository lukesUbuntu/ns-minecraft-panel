<?php
/**
 * Created by PhpStorm.
 * User: luke
 * Date: 7/02/16
 * Time: 1:27 AM
 */

namespace Library;


class Settings
{
    /**
     * @var string
     */
    var $serverIP = '';

    /**
     * @param string $serverIP
     */
    public function Settings($serverIP = '127.0.0.1'){
        $this->$serverIP = $serverIP;
    }

    public function startCMD(){}
    public function stopCMD(){}
    public function killCMD(){}
}