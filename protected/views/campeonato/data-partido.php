
<?php 

foreach($partidos as $partido){

	if(!isset($campeonato)){
		$campeonato=$partido["campeonato"];
	}
	?>
	<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/campeonato/view/<?php echo $partido->id; ?>"><?php echo $partido["fecha"].'('.$campeonato["torneo"].' '.$campeonato["fecha"].'-'.$campeonato["division"].') vs '.$partido["rival"]; ?></a> <?php if(is_user_logged_in()){ ?><br>
	 <a href="<?php echo Yii::app()->request->baseUrl; ?>/partido/delete/<?php echo $partido["id"]; ?>" class="confirmation">Borrar</a> / <a href="<?php echo Yii::app()->request->baseUrl; ?>/campeonato/update/<?php echo $partido->id; ?>">Editar</a>
	<?php } ?></li>
<?php }
 ?>
</ul>
