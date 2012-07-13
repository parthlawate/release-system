<?php
/**
 * @package AkeebaReleaseSystem
 * @copyright Copyright (c)2010-2012 Nicholas K. Dionysopoulos
 * @license GNU General Public License version 3, or later
 */

// Protect from unauthorized access
defined('_JEXEC') or die();

$this->loadHelper('select');

FOFTemplateUtils::addCSS('media://com_ars/css/backend.css');
?>

<form name="adminForm" id="adminForm" action="index.php" method="post">
	<input type="hidden" name="option" value="<?php echo JRequest::getCmd('option') ?>" />
	<input type="hidden" name="view" value="<?php echo JRequest::getCmd('view') ?>" />
	<input type="hidden" name="task" id="task" value="category" />
	<input type="hidden" name="folder" id="folder" value="<?php echo isset($this->folder) ? $this->escape($this->folder) : '' ?>" />
	<input type="hidden" name="file" id="file" value="" />
	<input type="hidden" name="<?php echo JFactory::getSession()->getToken();?>" value="1" />

	<fieldset id="category-selection">
		<legend><?php echo JText::_('COM_ARS_COMMON_CATEGORY_SELECT_LABEL');?></legend>
		
		<?php echo ArsHelperSelect::categories($this->category, 'id', array('onchange'=>'document.forms.adminForm.submit()')) ?>
		<input type="submit" value="<?php echo JText::_('JSEARCH_FILTER_SUBMIT') ?>" />
		<?php if(!empty($this->folder)): ?>
		<div class="clr"></div>
		<br/>
		<?php echo JText::_('LBL_SUBFOLDER_NAME') ?>
		<span id="subfoldername"><?php echo $this->escape($this->folder); ?></span>
		<?php endif; ?>		
	</fieldset>
	
</form>