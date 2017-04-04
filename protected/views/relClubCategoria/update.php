<?php
/* @var $this RelClubCategoriaController */
/* @var $model RelClubCategoria */

$this->breadcrumbs=array(
	'Rel Club Categorias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RelClubCategoria', 'url'=>array('index')),
	array('label'=>'Create RelClubCategoria', 'url'=>array('create')),
	array('label'=>'View RelClubCategoria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RelClubCategoria', 'url'=>array('admin')),
);
?>

<h1>Update RelClubCategoria <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>