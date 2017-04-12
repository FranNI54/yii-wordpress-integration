<?php
/* @var $this CampeonatoController */
/* @var $model Campeonato */

$this->breadcrumbs=array(
	'Campeonatos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Campeonato', 'url'=>array('index')),
	array('label'=>'Create Campeonato', 'url'=>array('create')),
	array('label'=>'Update Campeonato', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Campeonato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Campeonato', 'url'=>array('admin')),
);
?>

<h1>Campeonato</h1> <?php if(is_user_logged_in()){ ?><a href="<?php echo Yii::app()->request->baseUrl; ?>/campeonato/update/<?php echo $model->id; ?>" >Editar campeonato</a><?php } ?>


<h2><strong>Torneo:</strong> <?php echo $model->torneo; ?></h2>
<p><strong>División:</strong> <?php
if($model->division==0){
	echo "No definida";
}else{
	$categoria= Categoria::model()->findByPk($model->division);
	echo $categoria->nombre;
}
?></p>
<p><strong>Fecha:</strong> <?php echo $model->fecha; ?></p>
<p><strong>Ganador:</strong> <?php if($model->ganado==0){echo "En curso";}else{
	$ganador= Club::model()->findByPk($model->ganado);
	echo $ganador->nombre;
} ?></p>
<?php if(isset($model->detalle)&&$model->detalle!=""){ ?>
<p><?php echo $model->detalle; ?></p>
<?php } ?>


<h3>Partidos</h3>

<?php 

$this->renderPartial('../campeonato/data-partido',array(
				'partidos'=>$model->partidos,"campeonato"=>$model
			));

 ?>

 <?php if(is_user_logged_in()){ ?>
<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/partido/create" method="post" target="_blank">

  <input type="hidden" name="campeonato"  value="<?php echo $model->id; ?>" />
  <button style="color:white;">Agregar Partido</button>
</form>
<hr>

<?php } ?>