<?php
/* @var $this JugadorController */
/* @var $model Jugador */

$this->breadcrumbs=array(
	'Jugadors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Jugador', 'url'=>array('index')),
	array('label'=>'Create Jugador', 'url'=>array('create')),
	array('label'=>'Update Jugador', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Jugador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jugador', 'url'=>array('admin')),
);
?>

<h1>View Jugador #<?php echo $model->id; ?></h1>
<?php if(isset($model->avatar[0])){ ?>
<img src="<?php 
echo  Yii::app()->request->baseUrl."/".$model->avatar[0]->imagen_data()["url"]; ?>" style="max-width:200px;" />
<?php } ?>
<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellido',
		'nacimiento',
		'ciudad_natal',
		'puesto',
		'detalle_puesto',
	),*
));*/ ?>
<p><strong>Nombre:</strong> <?php echo $model->nombre; ?></p>
<p><strong>Apellido:</strong> <?php echo $model->apellido; ?></p>
<p><strong>Nacimiento:</strong> <?php echo $model->nacimiento; ?></p>
<p><strong>Ciudad Natal:</strong> <?php echo $model->ciudad_natal; ?></p>
<p><strong>Puesto:</strong> <?php echo $model->puesto; ?>
<?php if(isset($model->detalle_puesto)&&$model->detalle_puesto!=""){ ?>
<p><?php echo $model->detalle_puesto; ?></p>
<?php } ?>

<h4>Partidos</h4>

<?php
	$this->renderPartial('../jugador/data-partido',array(
				'partidos'=>$model->partidos(),
			));
		
?>

<h4>Campeonatos</h4>
<ul>
<?php $camp=$model->campeonatos();
foreach($camp as $key=>$value){ ?>
	<li><?php echo $key; ?></li>
	<?php
}
 ?>
 </ul>
 
<h4>Data adicional</h4>
<ul>
<?php foreach($model->data as $data){ ?>
	<li>
	<strong><?php echo $data->nombre; ?></strong>
	<p><?php echo $data->data; ?></p> <?php if(is_user_logged_in()){ ?>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/dataJugador/delete/<?php echo $data->id; ?>" class="confirmation">Borrar</a> / 
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/dataJugador/update/<?php echo $data->id; ?>">Editar</a>
	<?php } ?>
	</li><br>
	
<?php } ?></ul>

<?php if(is_user_logged_in()){ ?>
<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/dataJugador/create" method="post" >

  <input type="hidden" name="jugador"  value="<?php echo $model->id; ?>" />
  <button style="color:white;">Agregar data</button>
</form>
<hr>

<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/relImagenJugador/create" method="post" target="_blank">

  <input type="hidden" name="jugador"  value="<?php echo $model->id; ?>" />
  <button style="color:white;">Agregar Imagen</button>
</form>
<?php } ?>

<h3>Imagenes</h3>
<?php 
foreach($model->imagenes as $imagen){
	?> 
	<div style="display:inline-block;">
	<img style="max-width:200px;"src="<?php echo  Yii::app()->request->baseUrl."/".$imagen->imagen_data["url"];?>" />
	
	<?php
	if(is_user_logged_in()){ ?>
	<br>
		<button type="button" class="assign-avatar" image-id="<?php echo $imagen->id; ?>" style="color:white;" >Asignar como avatar</button><br>
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/relImagenJugador/delete/<?php echo $imagen->id; ?>" class="confirmation">Quitar relación</a> / 
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/imagen/delete/<?php echo $imagen->imagen_data["id"]; ?>" class="confirmation">Borrar</a> 
	<?php } ?>
	</div>
	<?php
}
?>
<?php if(is_user_logged_in()){ ?>
<script>
jQuery("body").on("click",".assign-avatar",function(){
	var auxThis=jQuery(this);
	jQuery.post("<?php echo  Yii::app()->request->baseUrl.'/jugador/setAvatar/id/'.$model->id.'/imagen/'; ?>"+jQuery(this).attr("image-id"),function(data){
		if(data=="1"){
			console.log("entra");
			console.log(jQuery(auxThis));
			jQuery(auxThis).css("background-color","green");
			
		}
	});
});
</script>

<?php } ?>