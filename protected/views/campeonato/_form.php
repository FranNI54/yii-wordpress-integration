<?php
/* @var $this CampeonatoController */
/* @var $model Campeonato */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'campeonato-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'torneo'); ?>
		<?php echo $form->textField($model,'torneo',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'torneo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'division'); ?>
		<?php echo $form->textField($model,'division',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'division'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php //echo $form->textField($model,'fecha',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'fecha'); ?>
		
		<div class="input-group date form_date col-md-5" data-date="<?php echo date('Y', time()) ?>" data-date-format="yyyy" data-link-field="dtp_input2" data-link-format="yyyy">
                    <input class="form-control" placeholder="Elegí Fecha" size="16" type="text" value="<?php if(isset($model->fecha)) echo $model->fecha; ?>" readonly >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="<?php if(isset($model->fecha)) echo $model->fecha; ?>"  name="Campeonato[fecha]" />
            </div>
			
			<script>
			jQuery('.form_date').datetimepicker({
			language:  'ar',
			weekStart: 0,
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 4,
			minView: 4,
			forceParse: 0
			});
			</script>


	<div class="row">
		<?php echo $form->labelEx($model,'ganado'); ?>
		<?php //echo $form->textField($model,'ganado'); ?>
		<select name="Campeonato[ganado]">
			<option value="0" selected>No</option>
			<option value="1">Si</option>
		</select>
		<?php echo $form->error($model,'ganado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detalle'); ?>
		<?php echo $form->textArea($model,'detalle',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'detalle'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->