<?php
/* @var $this RelClubCategoriaController */
/* @var $model RelClubCategoria */

$this->breadcrumbs=array(
	'Rel Club Categorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RelClubCategoria', 'url'=>array('index')),
	array('label'=>'Manage RelClubCategoria', 'url'=>array('admin')),
);
?>

<h1>Create RelClubCategoria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>