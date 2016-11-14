<?php

defined("_JEXEC") or die();

class DoskaViewTypes extends JViewLegacy {

	function display($tpl = null)
	{
		$this->addToolbar();

		return parent::display($tpl);
	}

	protected function addToolbar() {
		JToolbarHelper::title(JText::_("COM_DOSKA_MANAGER_TYPES"));
		JToolbarHelper::addNew('type.add');
		JToolbarHelper::editList('type.edit');
		JToolbarHelper::divider();
		JToolbarHelper::publishList('types.publish');
		JToolbarHelper::unpublishList('types.unpublish');
		JToolbarHelper::preferences('com_doska');

	}






}
?>