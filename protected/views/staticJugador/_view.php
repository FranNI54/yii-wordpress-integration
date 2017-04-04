<?php
/* @var $this StaticJugadorController */
/* @var $data StaticJugador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_natal')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad_natal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debut')); ?>:</b>
	<?php echo CHtml::encode($data->debut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ultimo_partido')); ?>:</b>
	<?php echo CHtml::encode($data->ultimo_partido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('equipos')); ?>:</b>
	<?php echo CHtml::encode($data->equipos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puesto')); ?>:</b>
	<?php echo CHtml::encode($data->puesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalle_puesto')); ?>:</b>
	<?php echo CHtml::encode($data->detalle_puesto); ?>
	<br />

	*/ ?>

</div>