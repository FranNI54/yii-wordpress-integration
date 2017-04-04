<?php
/* @var $this RelPartidoJugadorController */
/* @var $model RelPartidoJugador */
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
		<?php echo $form->label($model,'jugador'); ?>
		<?php echo $form->textField($model,'jugador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'partido'); ?>
		<?php echo $form->textField($model,'partido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'campo'); ?>
		<?php echo $form->textField($model,'campo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detalle'); ?>
		<?php echo $form->textArea($model,'detalle',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->