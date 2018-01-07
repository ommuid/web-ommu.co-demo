<?php
/**
 * Ommu Pages (ommu-pages)
 * @var $this MaintenanceController
 * @var $model OmmuPages
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu
 *
 */
 
	$this->breadcrumbs=array(
		'User Verifies'=>array('manage'),
		'Create',
	);
?>

<div class="boxed">
	<?php echo $model->description->message?>
	<div class="date">
		<?php if($model->modified_date != '0000-00-00 00:00:00') {
			echo 'Edited: '.Utility::dateFormat($model->modified_date, true).' by '.$model->modified->displayname;
		} else {
			echo Utility::dateFormat($model->creation_date, true).' by '.$model->user->displayname;
		}?>
	<?php ;?>
	</div>
</div>