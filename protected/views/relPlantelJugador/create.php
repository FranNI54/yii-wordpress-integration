<?php
/* @var $this RelPlantelJugadorController */
/* @var $model RelPlantelJugador */

$this->breadcrumbs=array(
	'Rel Plantel Jugadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RelPlantelJugador', 'url'=>array('index')),
	array('label'=>'Manage RelPlantelJugador', 'url'=>array('admin')),
);
?>

<h1>Create RelPlantelJugador</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>