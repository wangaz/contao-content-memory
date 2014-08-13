<?php

/**
 * PHP version 5
 * @copyright  Wangaz GbR 2012-2014 - some rights reserved 
 * @author     Wangaz - hallo@wangaz.com 
 * @package    ContentMemory 
 * @license    CC-BY-SA-4.0 
 * @filesource
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace ContentMemory;


/**
 * Classes ContentMemoryFront 
 *
 * @copyright  Wangaz GbR 2012-2014 - some rights reserved 
 * @author     Wangaz - kontakt@wangaz.com 
 * @package    Controller
 */
class ContentMemoryFront extends \ContentElement
{

	/**
	 * Template
	 */
	protected $strTemplate = 'ce_cm-vorn';
	

	/**
	 * Generate module
	 */
	protected function compile()
	{
		if(TL_MODE == 'BE')
		{
			// Im Backend-Modus
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \BackendTemplate($this->strTemplate);
			
			return;
		}
		
		// CSS einbinden
		$GLOBALS['TL_CSS'][] = 'system/modules/content-memory/assets/ce_content-memory.css';
	}
}
