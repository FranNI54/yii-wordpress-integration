<?php
/* @var $this RelImagenClubController */
/* @var $model RelImagenClub */

$this->breadcrumbs=array(
	'Rel Imagen Clubs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RelImagenClub', 'url'=>array('index')),
	array('label'=>'Create RelImagenClub', 'url'=>array('create')),
	array('label'=>'View RelImagenClub', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RelImagenClub', 'url'=>array('admin')),
);
?>

<h1>Update RelImagenClub <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>