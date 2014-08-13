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
 * Register the namespaces
 */
ClassLoader::addNamespaces(array('ContentMemory'));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ContentMemory\ContentMemoryBack'	=> 'system/modules/content-memory/library/ContentMemory/ContentMemoryBack.php',
	'ContentMemory\ContentMemoryFin'	=> 'system/modules/content-memory/library/ContentMemory/ContentMemoryFin.php',
	'ContentMemory\ContentMemoryFront'	=> 'system/modules/content-memory/library/ContentMemory/ContentMemoryFront.php',
	'ContentMemory\ContentMemorySingle'	=> 'system/modules/content-memory/library/ContentMemory/ContentMemorySingle.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_cm-ende' => 'system/modules/content-memory/templates',
	'ce_cm-hint' => 'system/modules/content-memory/templates',
	'ce_cm-voll' => 'system/modules/content-memory/templates',
	'ce_cm-vorn' => 'system/modules/content-memory/templates',
));
