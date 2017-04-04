<?php
/* @var $this ClubController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clubs',
);

$this->menu=array(
	array('label'=>'Create Club', 'url'=>array('create')),
	array('label'=>'Manage Club', 'url'=>array('admin')),
);
?>

<h1>Clubs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
