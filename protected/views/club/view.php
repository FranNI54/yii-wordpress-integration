<?php
/* @var $this ClubController */
/* @var $model Club */

$this->breadcrumbs=array(
	'Clubs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Club', 'url'=>array('index')),
	array('label'=>'Create Club', 'url'=>array('create')),
	array('label'=>'Update Club', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Club', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Club', 'url'=>array('admin')),
);
?>

<?php if(isset($model->avatar[0])){ ?>
<img src="<?php 
echo  Yii::app()->request->baseUrl."/".$model->avatar[0]->imagen_data()["url"]; ?>" style="max-width:200px;" />
<?php } ?>

<h1><?php echo $model->nombre; ?></h1>
<p><strong>Ciudad:</strong> <?php echo $model->ciudad; ?></p>

<?php if(count($model->planteles)>0){ ?>
<h3>Planteles</h3>
<ul>
<?php foreach($model->planteles as $plantel){ ?>
	<li><a target="_blank" href="<?php echo Yii::app()->request->baseUrl; ?>/plantel/view/<?php echo $plantel->id; ?>"><?php echo $plantel->nombre; ?></a> <?php if(is_user_logged_in()){ ?> / <a href="<?php echo Yii::app()->request->baseUrl; ?>/plantel/update/<?php echo $plantel->id; ?>" >Editar</a> / <a href="<?php echo Yii::app()->request->baseUrl; ?>/plantel/delete/<?php echo $club->id; ?>" class="confirmation" >Borrar</a><br><br><?php } ?></li>
<?php } ?>
</ul>
<?php } ?>

<?php if(is_user_logged_in()){ ?>
<hr>
<h3>Agregar Plantel</h3>
<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/plantel/create" method="post">
	<input type="hidden" name="club"  value="<?php echo $model->id; ?>" />
	<label>Nombre</label>
	<input  type="text" name="nombre" />
	<label>Categoria</label><br>
	<select name="categoria" type="text" >
		<?php $categorias= Categoria::model()->findAll();
		foreach($categorias as $categoria){ ?>
		<option value="<?php echo $categoria->id; ?>" ><?php echo $categoria->nombre; ?></option>
		<?php } ?>
	</select><br><br>
	<button style="color:white;">Crear Plantel</button><br><br>
</form>
<hr>
<?php } ?>


<?php if(count($model->data())>0|| is_user_logged_in()){ ?>
<h4>Data adicional</h4>
<ul>
<?php foreach($model->data as $data){ ?>
	<li>
	<strong><?php echo $data->titulo; ?></strong>
	<p><?php echo $data->texto; ?></p> <?php if(is_user_logged_in()){ ?>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/dataExtra/delete/<?php echo $data->id; ?>" class="confirmation">Borrar</a> / 
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/dataExtra/update/<?php echo $data->id; ?>">Editar</a>
	<?php } ?>
	</li><br>
	
<?php } ?></ul>
<?php } ?>

<?php if(is_user_logged_in()){ ?>
<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/dataExtra/create" method="post" >
	<input name="model" value="<?php echo get_class($model); ?>" type="hidden" />
  <input type="hidden" name="modelId"  value="<?php echo $model->id; ?>" />
  <button style="color:white;">Agregar data</button>
</form>
<hr>


<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/relImagen/create" method="post" target="_blank">

  <input type="hidden" name="modelId"  value="<?php echo $model->id; ?>" />
  <input type="hidden" name="model"  value="<?php echo get_class($model); ?>" />
  <button style="color:white;">Agregar Imagen</button>
</form>
<?php } ?>

<?php if(count($model->imagenes)>0){ ?>
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
} }
?>
<?php if(is_user_logged_in()){ ?>
<script>
jQuery("body").on("click",".assign-avatar",function(){
	var auxThis=jQuery(this);
	jQuery.post("<?php echo  Yii::app()->request->baseUrl.'/relImagen/destacada/modelClass/'.get_class($model).'/id/'.$model->id.'/imagen/'; ?>"+jQuery(this).attr("image-id"),function(data){
		if(data=="1"){
			console.log("entra");
			console.log(jQuery(auxThis));
			jQuery(auxThis).css("background-color","green");
			location.reload();
		}
	});
});
</script>

<?php } ?>