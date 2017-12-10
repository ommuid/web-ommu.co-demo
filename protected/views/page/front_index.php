<?php
/**
 * Ommu Pages (ommu-pages)
 * @var $this OmmuPagesController
 * @var $dataProvider CActiveDataProvider
 * version: 1.3.0
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Ommu Pages',
	);
?>

<?php $this->widget('application.libraries.core.components.system.FListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'application.webs.page._view',
    'pager' => array(
        'header' => '',
    ), 
    'summaryText' => '',
    'itemsCssClass' => 'items clearfix',
    'pagerCssClass'=>'pager clearfix',
)); ?>