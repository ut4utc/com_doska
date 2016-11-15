<?php

defined("_JEXEC") or die();

class DoskaViewType extends JViewLegacy {
    
    public function add() {
        JFactory::getApplication()->input->set('layout','new');
        parent::add();

    }

}
?>