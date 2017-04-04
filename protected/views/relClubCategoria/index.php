<?php
/* @var $this RelClubCategoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rel Club Categorias',
);

$this->menu=array(
	array('label'=>'Create RelClubCategoria', 'url'=>array('create')),
	array('label'=>'Manage RelClubCategoria', 'url'=>array('admin')),
);
?>

<h1>Rel Club Categorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
