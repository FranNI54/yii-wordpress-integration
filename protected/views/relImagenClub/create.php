<?php
/* @var $this RelImagenClubController */
/* @var $model RelImagenClub */

$this->breadcrumbs=array(
	'Rel Imagen Clubs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RelImagenClub', 'url'=>array('index')),
	array('label'=>'Manage RelImagenClub', 'url'=>array('admin')),
);
?>

<h1>Create RelImagenClub</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>