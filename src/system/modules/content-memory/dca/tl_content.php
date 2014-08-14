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
 * Palettes
 */
array_insert($GLOBALS['TL_DCA']['tl_content']['palettes'], 0, array
(
	'contentmemorySingle'			=> '{type_legend},type;{cmfront_legend},headline,text,addImage;{cmback_legend},cmHeadline,cmText;{protected_legend:hide},protected;{expert_legend:hide},cssID,space;{invisible_legend:hide},invisible,start,stop',
	'contentmemoryFront'			=> '{type_legend},type;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop',
	'contentmemoryBack'				=> '{type_legend},type;{protected_legend:hide},protected;{invisible_legend:hide},invisible,start,stop',
	'contentmemoryFin'				=> '{type_legend},type;{protected_legend:hide},protected;{invisible_legend:hide},invisible,start,stop'
));

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['cmText']		= $GLOBALS['TL_DCA']['tl_content']['fields']['text'];
$GLOBALS['TL_DCA']['tl_content']['fields']['cmHeadline']	= $GLOBALS['TL_DCA']['tl_content']['fields']['headline'];