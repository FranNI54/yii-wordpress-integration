<?php
/* @var $this RelImagenController */
/* @var $model RelImagen */

$this->breadcrumbs=array(
	'Rel Imagens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RelImagen', 'url'=>array('index')),
	array('label'=>'Create RelImagen', 'url'=>array('create')),
	array('label'=>'View RelImagen', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RelImagen', 'url'=>array('admin')),
);
?>

<h1>Update RelImagen <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>