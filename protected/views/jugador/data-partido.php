
<?php 

foreach($partidos as $partido){

	if(!isset($campeonato)){
		$campeonato=$partido["campeonato"];
	}
	?>
	<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/partido/view/<?php echo $partido['id']; ?>"><?php echo $partido["fecha"].'('.$campeonato["torneo"].' '.$campeonato["fecha"].'-'.$campeonato["division"].')'; ?></a>
	<?php if(false){ ?>
	<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/partido/view/<?php echo $partido['id']; ?>"><?php echo $partido["fecha"].'('.$campeonato["torneo"].' '.$campeonato["fecha"].'-'.$campeonato["division"].') vs '.$partido["rival"]; ?></a><?php } ?>
	<?php if(is_user_logged_in()){ ?>
	 <br><a href="<?php echo Yii::app()->request->baseUrl; ?>/relPartidoJugador/delete/<?php echo $partido["rel"]; ?>" class="confirmation">Borrar</a> / <a href="<?php echo Yii::app()->request->baseUrl; ?>/partido/update/<?php echo $partido['id']; ?>">Editar </a>
	<?php } ?></li>
<?php }
 ?>
</ul>
