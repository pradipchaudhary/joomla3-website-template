<?php
/**
 * @copyright	Copyright (C) 2011 Simplify Your Web, Inc. All rights reserved.
 * @license		GNU General Public License version 3 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die ;

jimport('syw.fields.message');
jimport('syw.k2');

/**
 * Shows messages if K2 is installed
 *
 */
class JFormFieldK2Message extends JFormFieldMessage 
{		
	public $type = 'K2Message';
	
	public function getLabel() 
	{
		if (SYWK2::exists()) {
			return parent::getLabel();
		}
			
		return '';
	}
	
	public function getInput()
	{
		if (SYWK2::exists()) {
			return parent::getInput();
		}
			
		return '';
	}
	
	public function getControlGroup()
	{
		if (SYWK2::exists()) {
			return parent::getControlGroup();
		}
	
		return '';
	}

}
?>