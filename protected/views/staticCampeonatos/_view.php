<?php
/* @var $this StaticCampeonatosController */
/* @var $data StaticCampeonatos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('torneo')); ?>:</b>
	<?php echo CHtml::encode($data->torneo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('divison')); ?>:</b>
	<?php echo CHtml::encode($data->divison); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partidos_jugados')); ?>:</b>
	<?php echo CHtml::encode($data->partidos_jugados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goles_convertidos')); ?>:</b>
	<?php echo CHtml::encode($data->goles_convertidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gano')); ?>:</b>
	<?php echo CHtml::encode($data->gano); ?>
	<br />


</div>