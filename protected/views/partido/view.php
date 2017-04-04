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

<h1>Partido #<?php echo $model->id; ?></h1>
<?php if(is_user_logged_in()){ ?><a href="<?php echo Yii::app()->request->baseUrl; ?>/partido/update/<?php echo $model->id; ?>" >Editar partido</a><br><br><?php } ?>

<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'liga',
		'fec',
		'fecha',
		'condicion',
		'rival',
		'resultado',
		'convertidos',
		'victoria',
		'comentario',
	),
));*/ ?>
<p><strong>Fec:</strong> <?php echo $model->fec; ?></p>
<p><strong>Fecha:</strong> <?php echo $model->fecha; ?></p>
<?php if(isset($model->comentario)&&$model->comentario!=""){ ?>
<p><?php echo $model->comentario; ?></p>
<?php } ?>


<?php if($model->liga>0){ ?>
<h3>Campeonato</h3>
<p><?php echo $model->liga_data["torneo"]; ?></p>
<hr>
<?php } ?>


<h3>Clubes</h3>
<?php if(is_user_logged_in()&& count($model->clubes)<2){ ?>
<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/relPartidoClub/create" method="post" target="_blank">

  <input type="hidden" name="partido"  value="<?php echo $model->id; ?>" />
  
  <button style="color:white;">Asignar Club</button>
</form>
<?php } ?>
<ul>
<?php foreach($model->clubes as $club){ ?>
<div style="width:45%;display:inline-block;border-right:1px solid gray;overflow:hidden;float:left;">
<h2><?php echo $club->club_data["nombre"]; ?></h2>

<hr>

<h3>Goles</h3>
<h3><?php echo count($club->goles); ?></h3>
<ul>
<?php foreach($club->goles as $gol){ ?>
	<li><?php echo $gol->jugador_data["nombre"]." ".$gol->jugador_data["apellido"]; ?></li>
	<?php if(is_user_logged_in()){ ?><a href="<?php echo Yii::app()->request->baseUrl; ?>/gol/update/<?php echo $gol["id"]; ?>">Editar</a> / <a href="<?php echo Yii::app()->request->baseUrl; ?>/gol/delete/<?php echo $gol["id"]; ?>" class="confirmation">Borrar</a>  <?php } ?>
<?php } ?>
</ul>

<?php if(is_user_logged_in()){ ?>
<label class="label-show" for="toggle-<?php echo $index;?>">Agregar gol</label>
<input type="checkbox" class="hider" id="toggle-<?php echo $index;?>" />
<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/gol/create" method="post">
	<input type="hidden" name="partido"  value="<?php echo $club->id; ?>" />
	<label>Jugador</label>
	<input id="RelPartidoJugador_jugador2" type="text" placeholder="" />
	<label>Minuto</label>
	<input  type="text" name="minuto" />
	<label>Descripción</label>
	<textarea name="desc"></textarea>
	<input type="hidden" id="RelPartidoJugador_jugador" type="text" name="jugador" />
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
			
			jQuery("#RelPartidoJugador_jugador2").autocomplete({
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
					jQuery("#RelPartidoJugador_jugador").val(ui.item.value);
				}
			});
		});
	</script>
	
<?php } ?>

<h3>Plantel</h3>
<ul>
<?php $jugadores=RelPartidoJugador::model()->with("jugador_data")->findAllByAttributes(array("partido"=>$club->id));
foreach($jugadores as $jugador){
	?>
	<li><?php echo $jugador->jugador_data['nombre']." ".$jugador->jugador_data['apellido']; ?></li>
	<?php if(is_user_logged_in()){ ?>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/relPartidoJugador/deletePartido/<?php echo $jugador["id"]; ?>" class="confirmation">Quitar</a>
	<?php } ?>
<?php }
 ?>
 </ul>
 
 <?php if(is_user_logged_in()){ ?>

<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/relPartidoJugador/plantel" method="post" >

  <input type="hidden" name="partido"  value="<?php echo $model->id; ?>" />
  <input type="hidden" name="club"  value="<?php echo $club->id; ?>" />
  <label>Seleccionar plantel</label><br>
  <select name="plantel">
  <?php $planteles= Plantel::model()->findAllByAttributes(array("club"=>$club->club));
	foreach($planteles as $plantel){ ?>
		<option value="<?php echo $plantel->id; ?>"><?php echo $plantel->nombre; ?></option>
	<?php }   ?>
  </select><br><br>
  <button style="color:white;">Asignar Plantel</button>
</form>

<hr>

<form name="myform" action="<?php echo Yii::app()->request->baseUrl; ?>/relPartidoJugador/create" method="post" target="_blank">

  <input type="hidden" name="partido"  value="<?php echo $club->id; ?>" />
  <button style="color:white;">Asignar Jugador</button>
</form>

<?php } ?>

<hr>

</div>	
<?php } ?>
</ul>




<style>
h3{margin-top:10px;padding-top:0;}
</style>