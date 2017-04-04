<?php
/* @var $this GolController */
/* @var $data Gol */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partido')); ?>:</b>
	<?php echo CHtml::encode($data->partido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jugador')); ?>:</b>
	<?php echo CHtml::encode($data->jugador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minuto')); ?>:</b>
	<?php echo CHtml::encode($data->minuto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>