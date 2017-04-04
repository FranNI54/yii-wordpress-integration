<?php
/* @var $this PartidoController */
/* @var $data Partido */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condicion')); ?>:</b>
	<?php echo CHtml::encode($data->condicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rival')); ?>:</b>
	<?php echo CHtml::encode($data->rival); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resultado')); ?>:</b>
	<?php echo CHtml::encode($data->resultado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('convertidos')); ?>:</b>
	<?php echo CHtml::encode($data->convertidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('victoria')); ?>:</b>
	<?php echo CHtml::encode($data->victoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentario')); ?>:</b>
	<?php echo CHtml::encode($data->comentario); ?>
	<br />

	*/ ?>

</div>