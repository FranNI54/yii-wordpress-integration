<?php
/* @var $this RelPartidoClubController */
/* @var $data RelPartidoClub */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partido')); ?>:</b>
	<?php echo CHtml::encode($data->partido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('club')); ?>:</b>
	<?php echo CHtml::encode($data->club); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lado')); ?>:</b>
	<?php echo CHtml::encode($data->lado); ?>
	<br />


</div>