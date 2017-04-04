<?php
/* @var $this GolController */
/* @var $model Gol */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gol-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		
		<?php echo $form->hiddenField($model,'partido',array("type"=>"hidden")); ?>
		
	</div>

	<div class="row">
		
		<?php echo $form->hiddenField($model,'jugador',array("type"=>"hidden")); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minuto'); ?>
		<?php echo $form->textField($model,'minuto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'minuto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->