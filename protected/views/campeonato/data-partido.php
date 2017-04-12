
<?php 

foreach($partidos as $partido){
	
	if(!isset($campeonato)){
		$campeonato=$partido["campeonato"];
	}
	$division= Categoria::model()->findByPk($campeonato["division"]);
	$partido->clubes();
	?>
	<?php if(false){ ?><li><a href="<?php echo Yii::app()->request->baseUrl; ?>/partido/view/<?php echo $partido->id; ?>"><?php echo $partido["fecha"].' '.$partido["rival"]; ?></a> <?php } ?>
	<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/partido/view/<?php echo $partido->id; ?>"><?php echo $partido["fecha"]." ";
	$first=true;
	foreach($partido->clubes() as $club){
		$aClub= Club::model()->findByPk($club->club);
		echo $aClub->nombre;
		if($first){
			echo " vs ";
			$first=false;
		}
	}
	?></a> 
	<?php if(is_user_logged_in()){ ?><br>
	 <a href="<?php echo Yii::app()->request->baseUrl; ?>/partido/delete/<?php echo $partido["id"]; ?>" class="confirmation">Borrar</a> / <a href="<?php echo Yii::app()->request->baseUrl; ?>/campeonato/update/<?php echo $partido->id; ?>">Editar</a>
	<?php } ?></li>
<?php }
 ?>
</ul>
