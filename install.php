<?php
defined('_JEXEC') or die();

class com_DoskaInstallerScript {
	
	public function install($parent) {
		echo '<p>' . JText::sprintf('COM_DOSKA_INSTALL_TEXT') . '</p>';
		// $parent is the class calling this method
		$parent->getParent()->setRedirectURL('index.php?option=com_doska');
	}
	public function update($parent) {
		echo '<p>' . JText::sprintf('COM_DOSKA_UPDATE_TEXT', $parent->get('manifest')->version) . '</p>';
	}
	public function uninstall($parent) {
		echo '<p>' . JText::_('COM_DOSKA_UNINSTALL_TEXT') . '</p>';
	}
	
	public function preflight($type,$parent) {
		echo '<p>' . JText::_('COM_DOSKA_PREFLIGHT_' . $type . '_TEXT') . '</p>';
	}
	
	public function postflight($type,$parent) {
		echo '<p>' . JText::_('COM_DOSKA_POSTFLIGHT_' . $type . '_TEXT') . '</p>';
	}
}

?>