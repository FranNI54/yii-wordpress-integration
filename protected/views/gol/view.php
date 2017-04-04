<?php
/* @var $this GolController */
/* @var $model Gol */

$this->breadcrumbs=array(
	'Gols'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Gol', 'url'=>array('index')),
	array('label'=>'Create Gol', 'url'=>array('create')),
	array('label'=>'Update Gol', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Gol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gol', 'url'=>array('admin')),
);
?>

<h1>View Gol #<?php echo $model->id; ?></h1>
<?php if(is_user_logged_in()){ ?><a href="<?php echo Yii::app()->request->baseUrl; ?>/gol/update/<?php echo $model->id; ?>" >Editar gol</a><br><br><?php } ?>
<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'partido',
		'jugador',
		'minuto',
		'descripcion',
	),
));*/ ?>

<p><strong>Partido:</strong> <a href="<?php echo Yii::app()->request->baseUrl; ?>/partido/view/<?php echo $model->partido_data['id']; ?>"><?php echo $model->partido_data["fecha"].' vs '.$model->partido_data["rival"]; ?></a> </p>
<p><strong>Jugador:</strong> <?php echo $model->jugador_data["nombre"];  ?> <?php echo $model->jugador_data["apellido"];  ?></p>
<p><strong>Minuto:</strong> <?php echo $model->minuto; ?></p>
<?php if(isset($model->descripcion)&&$model->descripcion!=""){ ?>
<p><?php echo $model->descripcion; ?></p>
<?php } ?>
