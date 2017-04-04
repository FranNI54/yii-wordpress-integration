<?php
/* @var $this GolController */
/* @var $model Gol */
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
		<?php echo $form->label($model,'partido'); ?>
		<?php echo $form->textField($model,'partido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jugador'); ?>
		<?php echo $form->textField($model,'jugador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minuto'); ?>
		<?php echo $form->textField($model,'minuto',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->