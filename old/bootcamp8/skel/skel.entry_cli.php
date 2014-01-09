<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Bootcamp8
 *  @version    $Id$
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Bootcamp8_Controller.php';

ini_set('max_execution_time', 0);

Bootcamp8_Controller::main_CLI('Bootcamp8_Controller', '{$action_name}');
?>
