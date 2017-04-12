<?php
/* @var $this DataExtraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Extras',
);

$this->menu=array(
	array('label'=>'Create DataExtra', 'url'=>array('create')),
	array('label'=>'Manage DataExtra', 'url'=>array('admin')),
);
?>

<h1>Data Extras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
