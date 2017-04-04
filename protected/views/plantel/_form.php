<?php
/* @var $this PlantelController */
/* @var $model Plantel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'plantel-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'club'); ?>
		<?php echo $form->textField($model,'club',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'club'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->