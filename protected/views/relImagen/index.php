<?php
/* @var $this RelImagenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rel Imagens',
);

$this->menu=array(
	array('label'=>'Create RelImagen', 'url'=>array('create')),
	array('label'=>'Manage RelImagen', 'url'=>array('admin')),
);
?>

<h1>Rel Imagens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
