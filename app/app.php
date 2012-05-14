<?php
if (!isset($thin)) {
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', '1');

    require_once 'config.php';
    require_once dirname(dirname(__FILE__)) .'/thin/thin.php';

    /**
     * The Thin
     */
    $thin = new Thin($CONFIG);
    $thin->run();
}