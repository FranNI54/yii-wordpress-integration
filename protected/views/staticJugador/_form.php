<?php
/* @var $this StaticJugadorController */
/* @var $model StaticJugador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'static-jugador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
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
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad_natal'); ?>
		<?php echo $form->textField($model,'ciudad_natal',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'ciudad_natal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debut'); ?>
		<?php echo $form->textField($model,'debut',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'debut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ultimo_partido'); ?>
		<?php echo $form->textField($model,'ultimo_partido',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'ultimo_partido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'equipos'); ?>
		<?php echo $form->textArea($model,'equipos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'equipos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'puesto'); ?>
		<?php echo $form->textField($model,'puesto',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'puesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detalle_puesto'); ?>
		<?php echo $form->textField($model,'detalle_puesto',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'detalle_puesto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->