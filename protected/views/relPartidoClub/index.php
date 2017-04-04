<?php
/* @var $this RelPartidoClubController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rel Partido Clubs',
);

$this->menu=array(
	array('label'=>'Create RelPartidoClub', 'url'=>array('create')),
	array('label'=>'Manage RelPartidoClub', 'url'=>array('admin')),
);
?>

<h1>Rel Partido Clubs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
