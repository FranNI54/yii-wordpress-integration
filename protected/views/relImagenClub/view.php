<?php
/* @var $this RelImagenClubController */
/* @var $model RelImagenClub */

$this->breadcrumbs=array(
	'Rel Imagen Clubs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RelImagenClub', 'url'=>array('index')),
	array('label'=>'Create RelImagenClub', 'url'=>array('create')),
	array('label'=>'Update RelImagenClub', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RelImagenClub', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RelImagenClub', 'url'=>array('admin')),
);
?>

<h1>View RelImagenClub #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'imagen',
		'club',
		'avatar',
	),
)); ?>
