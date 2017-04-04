<?php
/* @var $this StaticCampeonatosController */
/* @var $model StaticCampeonatos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'static-campeonatos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textArea($model,'ano',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'torneo'); ?>
		<?php echo $form->textArea($model,'torneo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'torneo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'divison'); ?>
		<?php echo $form->textArea($model,'divison',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'divison'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partidos_jugados'); ?>
		<?php echo $form->textArea($model,'partidos_jugados',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'partidos_jugados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goles_convertidos'); ?>
		<?php echo $form->textArea($model,'goles_convertidos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'goles_convertidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gano'); ?>
		<?php echo $form->textField($model,'gano',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'gano'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->