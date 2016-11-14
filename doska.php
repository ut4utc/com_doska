<?php 
defined("_JEXEC") or die();

$controller = JControllerLegacy::getInstance('Doska'); // DoskaController

$input = JFactory::getApplication()->input;

$controller->execute($input->getCmd('task','display'));










/*
 echo '<pre>';
 print_r($controller);
 echo '</pre>';
*/

?>