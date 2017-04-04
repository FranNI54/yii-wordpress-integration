<?php
/* @var $this RelPartidoClubController */
/* @var $model RelPartidoClub */

$this->breadcrumbs=array(
	'Rel Partido Clubs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RelPartidoClub', 'url'=>array('index')),
	array('label'=>'Manage RelPartidoClub', 'url'=>array('admin')),
);
?>

<h1>Create RelPartidoClub</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>