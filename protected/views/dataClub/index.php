<?php
/* @var $this DataClubController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Clubs',
);

$this->menu=array(
	array('label'=>'Create DataClub', 'url'=>array('create')),
	array('label'=>'Manage DataClub', 'url'=>array('admin')),
);
?>

<h1>Data Clubs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
