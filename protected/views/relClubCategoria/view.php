<?php
/* @var $this RelClubCategoriaController */
/* @var $model RelClubCategoria */

$this->breadcrumbs=array(
	'Rel Club Categorias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RelClubCategoria', 'url'=>array('index')),
	array('label'=>'Create RelClubCategoria', 'url'=>array('create')),
	array('label'=>'Update RelClubCategoria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RelClubCategoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RelClubCategoria', 'url'=>array('admin')),
);
?>

<h1>View RelClubCategoria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'club',
		'categoria',
	),
)); ?>
