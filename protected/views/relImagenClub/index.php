<?php
/* @var $this RelImagenClubController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rel Imagen Clubs',
);

$this->menu=array(
	array('label'=>'Create RelImagenClub', 'url'=>array('create')),
	array('label'=>'Manage RelImagenClub', 'url'=>array('admin')),
);
?>

<h1>Rel Imagen Clubs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
