<?php
/* @var $this RelPartidoClubController */
/* @var $model RelPartidoClub */

$this->breadcrumbs=array(
	'Rel Partido Clubs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RelPartidoClub', 'url'=>array('index')),
	array('label'=>'Create RelPartidoClub', 'url'=>array('create')),
	array('label'=>'View RelPartidoClub', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RelPartidoClub', 'url'=>array('admin')),
);
?>

<h1>Update RelPartidoClub <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>