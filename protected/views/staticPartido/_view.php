<?php
/* @var $this StaticPartidoController */
/* @var $data StaticPartido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('liga')); ?>:</b>
	<?php echo CHtml::encode($data->liga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fec')); ?>:</b>
	<?php echo CHtml::encode($data->fec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode($data->dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cond')); ?>:</b>
	<?php echo CHtml::encode($data->cond); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rival')); ?>:</b>
	<?php echo CHtml::encode($data->rival); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resultado')); ?>:</b>
	<?php echo CHtml::encode($data->resultado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('goles')); ?>:</b>
	<?php echo CHtml::encode($data->goles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goleadores')); ?>:</b>
	<?php echo CHtml::encode($data->goleadores); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gano')); ?>:</b>
	<?php echo CHtml::encode($data->gano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentario')); ?>:</b>
	<?php echo CHtml::encode($data->comentario); ?>
	<br />

	*/ ?>

</div>