<?php
/* @var $this StaticPartidoController */
/* @var $model StaticPartido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'static-partido-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'liga'); ?>
		<?php echo $form->textArea($model,'liga',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'liga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fec'); ?>
		<?php echo $form->textArea($model,'fec',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia'); ?>
		<?php echo $form->textArea($model,'dia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cond'); ?>
		<?php echo $form->textArea($model,'cond',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'cond'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rival'); ?>
		<?php echo $form->textArea($model,'rival',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'rival'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resultado'); ?>
		<?php echo $form->textArea($model,'resultado',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resultado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goles'); ?>
		<?php echo $form->textField($model,'goles'); ?>
		<?php echo $form->error($model,'goles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goleadores'); ?>
		<?php echo $form->textArea($model,'goleadores',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'goleadores'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gano'); ?>
		<?php echo $form->textArea($model,'gano',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'gano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comentario'); ?>
		<?php echo $form->textArea($model,'comentario',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comentario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->