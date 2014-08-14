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
 * Classes ContentMemorySingle
 *
 * @copyright  Wangaz GbR 2012-2014 - some rights reserved 
 * @author     Wangaz - kontakt@wangaz.com 
 * @package    Controller
 */
class ContentMemorySingle extends \ContentElement
{
	
	/**
	 * Template
	 */
	protected $strTemplate = 'ce_cm-voll';
	
	
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
            
            if($this->headline) 
            	$this->Template->title = $this->headline;
            
            $this->Template->wildcard = $this->text;
            $this->Template->wildcard .= '<hr style="margin: 0 15px 5px;" />';
            
            $this->cmh = unserialize($this->cmHeadline);
			$this->cm_headline = $this->cmh['value'];
			
            if($this->cm_headline)
            	$this->Template->wildcard .= '<h1>' . $this->cm_headline . "</h1>";
            
            $this->Template->wildcard .= $this->cmText;
			
			return;
		}
		// Im Frontend-Modus
	
		// CSS einbinden
		$GLOBALS['TL_CSS'][] = 'system/modules/content-memory/assets/ce_content-memory.css';

		$this->Template->headline = $this->headline;
		$this->Template->hl = $this->hl;
		$this->Template->textvorn = $this->text;
		$this->cmh = unserialize($this->cmHeadline);
		$this->cm_headline = $this->cmh['value'];
		$this->cm_hl = $this->cmh['unit'];
		$this->Template->cmheadline = $this->cm_headline;
		$this->Template->cmhl = $this->cm_hl;
		$this->Template->texthint = $this->cmText;
		
		//$this->Template->addImage = false;
		//$this->Template->cmAddImage = false;
		
		// add an image to the front side
		if($this->addImage && $this->singleSRC != '')
		{
			$objModel = \FilesModel::findByUuid($this->singleSRC);

			if ($objModel === null) {
				if (!\Validator::isUuid($this->singleSRC))
					$this->Template->textvorn = '<p class="error">' . $GLOBALS['TL_LANG']['ERR']['version2format'] . '</p>';
			}
			elseif (is_file(TL_ROOT . '/' . $objModel->path))
			{
				$this->singleSRC = $objModel->path;
				$this->addImageToTemplate($this->Template, $this->arrData);
			}
		}
		
		// add an image to the back side
		if($this->cmAddImage && $this->cmSingleSRC != '')
		{
			$objModel = \FilesModel::findByUuid($this->cmSingleSRC);

			if ($objModel === null) {
				if (!\Validator::isUuid($this->cmSingleSRC))
					$this->Template->texthint = '<p class="error">' . $GLOBALS['TL_LANG']['ERR']['version2format'] . '</p>';
			}
			elseif (is_file(TL_ROOT . '/' . $objModel->path))
			{
				$this->cmSingleSRC = $objModel->path;
				$this->addImageToTemplate($this->Template, $this->arrData);
			}
		}
	}
}
