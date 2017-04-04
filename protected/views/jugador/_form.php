<?php
/* @var $this JugadorController */
/* @var $model Jugador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jugador-form',
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
		<?php echo $form->labelEx($model,'nacimiento'); ?>
		<?php //echo $form->textField($model,'nacimiento',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'nacimiento'); ?>
		<div class="input-group date form_date col-md-5" data-date="<?php echo date('d/m/Y', time()) ?>" data-date-format="dd mm yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" placeholder="Elegí Fecha" size="16" type="text" value="<?php if(isset($model->nacimiento)) echo $model->nacimiento; ?>" readonly >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="<?php if(isset($model->nacimiento)) echo $model->nacimiento; ?>"  name="Jugador[nacimiento]" />
            </div>
			
			<script>
			jQuery('.form_date').datetimepicker({
			language:  'ar',
			weekStart: 0,
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0
			});
			</script>

	    

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad_natal'); ?>
		<?php echo $form->textField($model,'ciudad_natal',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'ciudad_natal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'puesto'); ?>
		<?php echo $form->textField($model,'puesto',array('size'=>60,'maxlength'=>100)); ?>
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