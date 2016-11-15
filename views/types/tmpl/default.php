<?php
    defined("_JEXEC") or die();
/**
 * Created by PhpStorm.
 * User: ut4utc
 * Date: 9/11/16
 * Time: 8:21 PM
 */

?>

<form action="<?php echo JRoute::_("index.php?option=com_doska&view=types"); ?>" method="post" name="adminForm" id="adminForm">
    <input type="hidden" name="task" value="">
    <input type="hidden" name="boxchecked" value="0">
    <?php echo JHtml::_('form.token'); ?>
</form>