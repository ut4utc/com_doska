<?php 

defined("_JEXEC") or die();

class DoskaController extends JControllerLegacy {

    protected $default_view = "messages";

    public function hello()
    {
        echo 'Hello theme 2';
    }

}
?>