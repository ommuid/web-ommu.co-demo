<?php
/**
 * Merge file production, setting, database  and modules
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu
 * @contact (+62)856-299-4114
 *
 */
return CMap::mergeArray(
	require(dirname(__FILE__).'/production.php'),
	require(dirname(__FILE__).'/setting.php'),
	require(dirname(__FILE__).'/database.php'),
	require(dirname(__FILE__).'/modules.php')
);
?>