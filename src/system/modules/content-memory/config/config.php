<?php 

/**
 * PHP version 5
 * @copyright  Wangaz GbR 2012-2014 - some rights reserved 
 * @author     Wangaz - hallo@wangaz.com 
 * @package    ContentMemory 
 * @license    CC-BY-NC-SA-3.0 
 * @filesource
 */


/**
 * Content Elements
 */
array_insert($GLOBALS['TL_CTE'], 1, array
(
	'contentmemory' => array(
		'contentmemorySingle'	=> 'ContentMemory\ContentMemorySingle',
		'contentmemoryFront'	=> 'ContentMemory\ContentMemoryFront',
		'contentmemoryBack'		=> 'ContentMemory\ContentMemoryBack',
		'contentmemoryFin'		=> 'ContentMemory\ContentMemoryFin'
	)
));


/**
 * Wrapper Elements
 */
$GLOBALS['TL_WRAPPERS']['single'][]		= 'contentmemorySingle';
$GLOBALS['TL_WRAPPERS']['start'][]		= 'contentmemoryFront';
$GLOBALS['TL_WRAPPERS']['stop'][]		= 'contentmemoryFin';
$GLOBALS['TL_WRAPPERS']['separator'][]	= 'contentmemoryBack';