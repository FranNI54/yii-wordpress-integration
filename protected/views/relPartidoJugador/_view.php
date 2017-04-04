<?php
/* @var $this RelPartidoJugadorController */
/* @var $data RelPartidoJugador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jugador')); ?>:</b>
	<?php echo CHtml::encode($data->jugador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partido')); ?>:</b>
	<?php echo CHtml::encode($data->partido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo')); ?>:</b>
	<?php echo CHtml::encode($data->campo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalle')); ?>:</b>
	<?php echo CHtml::encode($data->detalle); ?>
	<br />


</div>