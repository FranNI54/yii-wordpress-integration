<?php
/* @var $this RelPartidoClubController */
/* @var $model RelPartidoClub */

$this->breadcrumbs=array(
	'Rel Partido Clubs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RelPartidoClub', 'url'=>array('index')),
	array('label'=>'Create RelPartidoClub', 'url'=>array('create')),
	array('label'=>'Update RelPartidoClub', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RelPartidoClub', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RelPartidoClub', 'url'=>array('admin')),
);
?>

<h1>View RelPartidoClub #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'partido',
		'club',
		'lado',
	),
)); ?>
