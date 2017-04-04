<?php
/* @var $this DataJugadorController */
/* @var $model DataJugador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-jugador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jugador'); ?>
		<?php //echo $form->textField($model,'jugador'); ?>
		<input name="DataJugador[jugador]" id="DataJugador_jugador" value="<?php if(isset($model->jugador))echo $model->jugador; ?>" hidden >
		<input type="text" name="jugador2" id="DataJugador_jugador2" value="<?php if(isset($model->jugador)){
			$jugador=Jugador::model()->findByPk($model->jugador);
			echo $jugador->nombre." ".$jugador->apellido;
			} ?>" disabled>
		<?php echo $form->error($model,'jugador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textArea($model,'data',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->