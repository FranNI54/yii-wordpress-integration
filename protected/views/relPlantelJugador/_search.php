<?php
/* @var $this RelPlantelJugadorController */
/* @var $model RelPlantelJugador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plantel'); ?>
		<?php echo $form->textField($model,'plantel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jugador'); ?>
		<?php echo $form->textField($model,'jugador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'campo'); ?>
		<?php echo $form->textField($model,'campo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detalle'); ?>
		<?php echo $form->textField($model,'detalle',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->