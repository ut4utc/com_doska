<?php

defined("_JEXEC") or die();

class DoskaViewTypes extends JViewLegacy {

	function display($tpl = null)
	{
		$this->addToolbar();
		$this->setDocument();

		return parent::display($tpl);
	}

	protected function addToolbar() {
		JToolbarHelper::title(JText::_("COM_DOSKA_MANAGER_TYPES"),"doskatitle");
		JToolbarHelper::addNew('type.add');
		JToolbarHelper::editList('type.edit');
		JToolbarHelper::deleteList('types.delete');
		JToolbarHelper::divider();
		JToolbarHelper::publishList('types.publish');
		JToolbarHelper::unpublishList('types.unpublish');
		JToolbarHelper::preferences('com_doska');

		JToolbarHelper::custom('type.create','doskabutton','doskabutton_over',JText::_('COM_DOSKA_CUSTOM_TITLE'));
	}

	protected function setDocument(){
		$document = JFactory::getDocument();
		$document->addStyleSheet(JUri::root(true)."/media/com_doska/css/style.css");
	}

	



}
?>