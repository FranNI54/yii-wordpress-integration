<?php
/* @var $this PartidoController */
/* @var $model Partido */

$this->breadcrumbs=array(
	'Partidos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Partido', 'url'=>array('index')),
	array('label'=>'Create Partido', 'url'=>array('create')),
	array('label'=>'Update Partido', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Partido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Partido', 'url'=>array('admin')),
);
?>

<h1>Partido</h1>
<?php if(is_user_logged_in()){ ?><a href="<?php echo Yii::app()->request->baseUrl; ?>/partido/update/<?php echo $model->id; ?>" >Editar partido</a><br><br><?php } ?>

<?php if(false){ ?>
<p><strong>Categoria:</strong> <?php
if($model->categoria==0){
	echo "No definida";
}else{
	$categoria= Categoria::model()->findByPk($model->categoria);
	echo $categoria->nombre;
}
?></p>
<?php } ?>
<p><strong>Fecha:</strong> <?php echo $model->fecha; ?></p>
<?php if(isset($model->comentario)&&$model->comentario!=""){ ?>
<p><?php echo $model->comentario; ?></p>
<?php } ?>



<?php if($model->liga>0){ ?>
<h3>Campeonato</h3>
<p><?php echo $model->liga_data["torneo"]; ?></p>
<hr>
<?php } ?>



<?php if(is_user_logged_in()&& count($model->clubes)<2){ ?>
<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/relPartidoClub/create" method="post" >

  <input type="hidden" name="partido"  value="<?php echo $model->id; ?>" />
  
  <button style="color:white;">Asignar Club</button>
</form>
<?php } ?>
<ul>
<?php foreach($model->clubes as $club){ ?>

<div class="loadit half-team" <?php if(!is_user_logged_in()){ ?>hid="20" <?php } ?>>

<div class="partido-titulo" >
<a style="display:inline-block;" hid="15" target="_blank" href="<?php echo Yii::app()->request->baseUrl; ?>/club/<?php echo $club->club_data['id']; ?>"><h2><?php echo $club->club_data["nombre"]; ?></h2></a>

<p><?php
if($club->lado==0){
	echo "Local";
}else{
	echo "Visitante";
}
 ?></p>
 <?php if(is_user_logged_in()){ ?><a href="<?php echo Yii::app()->request->baseUrl; ?>/relPartidoClub/update/<?php echo $club->id; ?>" >Editar detalles</a> / <a href="<?php echo Yii::app()->request->baseUrl; ?>/relPartidoClub/delete/<?php echo $club->id; ?>" class="confirmation" >Quitar equipo</a><br><br><?php } ?>
 
<?php if(count($model->clubes)>1){ ?>
<p><?php
if($club->resultado==0){
	echo "Perdió";
}else if($club->resultado==1){
	echo "Ganó";
}else{
	echo "Empate";
}
 ?></p>
<?php } ?>
 
</div>

<hr>

<div id="goles" hid="10">
<h3>Goles</h3>
<h3><?php echo count($club->goles); ?></h3>
<ul>
<?php foreach($club->goles as $gol){ ?>
	<li><?php echo $gol->jugador_data["nombre"]." ".$gol->jugador_data["apellido"]; ?></li>
	<?php if(is_user_logged_in()){ ?><a href="<?php echo Yii::app()->request->baseUrl; ?>/gol/update/<?php echo $gol["id"]; ?>">Editar</a> / <a href="<?php echo Yii::app()->request->baseUrl; ?>/gol/delete/<?php echo $gol["id"]; ?>" class="confirmation">Borrar</a>  <?php } ?>
<?php } ?>
</ul>
</div>

<?php if(is_user_logged_in()){ ?>
<label class="label-show" for="toggle-<?php echo $club->id;?>">Agregar gol</label>
<input type="checkbox" class="hider" id="toggle-<?php echo $club->id;?>" />
<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/gol/create" method="post">
	<input type="hidden" name="partido"  value="<?php echo $model->id; ?>" />
	<input type="hidden" name="rel"  value="<?php echo $club->id; ?>" />
	<label>Jugador</label>
	<input id="RelPartidoJugador_jugador2<?php echo $club->id;?>" type="text" placeholder="" />
	<label>Minuto</label>
	<input  type="text" name="minuto" />
	<label>Descripción</label>
	<textarea name="desc"></textarea>
	<input type="hidden" id="RelPartidoJugador_jugador<?php echo $club->id;?>" type="text" name="jugador" />
	<button style="color:white;">Agregar</button>
</form>


<script>
		
		var data = [
			//{ value: "AL", label: "Alabama" },
			<?php
			$jugadores= Jugador::model()->findAll();
			foreach($jugadores as $jugador){ ?>
				{value:"<?php echo $jugador->id; ?>",label: "<?php echo $jugador->nombre." ".$jugador->apellido; ?>"},
			<?php } ?>
		];
		jQuery(function() {
			
			jQuery("#RelPartidoJugador_jugador2<?php echo $club->id;?>").autocomplete({
				source: data,
				focus: function(event, ui) {
					// prevent autocomplete from updating the textbox
					event.preventDefault();
					// manually update the textbox
					jQuery(this).val(ui.item.label);
				},
				select: function(event, ui) {
					// prevent autocomplete from updating the textbox
					event.preventDefault();
					// manually update the textbox and hidden field
					jQuery(this).val(ui.item.label);
					jQuery("#RelPartidoJugador_jugador<?php echo $club->id;?>").val(ui.item.value);
				}
			});
		});
	</script>
	
<?php } ?>

<?php 
$jugadores=$club->plantel;
if(count($jugadores)>0){ ?>
<hr>
<h3>Plantel</h3>
<ul>
<?php 
foreach($jugadores as $jugador){
	?>
	<li><?php if($jugador->camiseta!=0){ ?>  <?php echo $jugador->camiseta; ?> - <?php } ?><?php echo $jugador->jugador_data['nombre']." ".$jugador->jugador_data['apellido']; ?></li>
	<?php if(is_user_logged_in()){ ?>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/relPartidoJugador/deletePartido/<?php echo $jugador["id"]; ?>" class="confirmation">Quitar</a> / <a href="<?php echo Yii::app()->request->baseUrl; ?>/relPartidoJugador/update/<?php echo $jugador["id"]; ?>">Editar</a>
	<?php } ?>
<?php }
 ?>
 </ul>
<?php } ?>
 
 <?php if(is_user_logged_in()){ ?>

 <?php $planteles= Plantel::model()->findAllByAttributes(array("club"=>$club->club));
  if(count($planteles)>0){
  ?>
<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/relPartidoJugador/plantel" method="post" >

  <input type="hidden" name="partido"  value="<?php echo $model->id; ?>" />
  <input type="hidden" name="club"  value="<?php echo $club->id; ?>" />
  <br>
  <label>Seleccionar plantel</label><br>
  <select name="plantel">
  
	<?php foreach($planteles as $plantel){ ?>
		<option value="<?php echo $plantel->id; ?>"><?php echo $plantel->nombre; ?></option>
	<?php }   ?>
  </select><br><br>
  <button style="color:white;">Asignar Plantel</button>
</form>
  <?php } ?>

<hr>

<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/relPartidoJugador/create" method="post" >

  <input type="hidden" name="partido"  value="<?php echo $club->id; ?>" />
  <button style="color:white;">Asignar Jugador</button>
</form>

<?php } ?>

<hr>

</div>	
<?php } ?>
</ul>



<?php if(count($model->data())>0|| is_user_logged_in()){ ?>
<h4>Data adicional</h4>
<ul>
<?php foreach($model->data as $data){ 
	if($data->texto!=""|| is_user_logged_in()){
?>
	<li>
	<strong><?php echo $data->titulo; ?></strong>
	<p><?php echo $data->texto; ?></p> <?php if(is_user_logged_in()){ ?>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/dataExtra/delete/<?php echo $data->id; ?>" class="confirmation">Borrar</a> / 
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/dataExtra/update/<?php echo $data->id; ?>">Editar</a>
	<?php } ?>
	</li><br>
	
	<?php } } ?></ul>
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

<style>
h3{margin-top:10px;padding-top:0;}
</style>
<h1><?php  $defaults= DataDefault::model()->findAllByAttributes(array("model"=>"Partido"));
		 echo(count($defaults)); ?></h1>
		 
<?php //$auxA= wp_list_categories(array("hide_empty"=>false,"echo"=>false)); ?>