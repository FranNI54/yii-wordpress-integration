<?php
/* @var $this PartidoController */
/* @var $model Partido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partido-form',
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
		<?php //echo $form->textField($model,'liga',array('size'=>60,'maxlength'=>300)); ?>
		<?php if(isset($model->liga)){ ?>
		<input id="Partido_liga2" type="text" placeholder="" value="<?php $campeonato= Campeonato::model()->findByPk($model->liga);
		echo $campeonato->torneo.'('.$campeonato->division.','.$campeonato->fecha.')';
		?>" <?php if(!isset($update)){ ?>disabled <?php } ?> />
		<input type="hidden" id="Partido_liga" type="text" name="Partido[liga]" value="<?php echo $model->liga; ?>" />
		<?php }else{ ?>
		<input id="Partido_liga2" type="text" placeholder="" />
		<input type="hidden" id="Partido_liga" type="text" name="Partido[liga]" />
		<?php } ?>
		<?php echo $form->error($model,'liga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fec'); ?>
		<?php echo $form->textField($model,'fec',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'fec'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php //echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
		<div class="input-group date form_date col-md-5" data-date="<?php echo date('d/m/Y hh/mm', time()) ?>" data-date-format="dd mm yyyy hh mm" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd-hh-mm">
                    <input class="form-control" placeholder="Elegí Fecha" size="16" type="text" value="<?php if(isset($model->fecha)) echo $model->fecha; ?>" readonly >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="<?php if(isset($model->fecha)) echo $model->fecha; ?>"  name="Partido[fecha]" />
            </div>
			
			<script>
			jQuery('.form_date').datetimepicker({
			language:  'ar',
			weekStart: 0,
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 0,
			forceParse: 0
			});
			</script>

	<div class="row">
		<?php echo $form->labelEx($model,'condicion'); ?>
		<?php //echo $form->textField($model,'condicion',array('size'=>60,'maxlength'=>100)); ?>
		<select name="Partido[condicion]">
			<option value="0" selected>Local</option>
			<option value="1">Visitante</option>
		</select>
		<?php echo $form->error($model,'condicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rival'); ?>
		<?php echo $form->textField($model,'rival',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rival'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resultado'); ?>
		<?php echo $form->textField($model,'resultado',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'resultado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convertidos'); ?>
		<?php echo $form->textField($model,'convertidos'); ?>
		<?php echo $form->error($model,'convertidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'victoria'); ?>
		<?php //echo $form->textField($model,'victoria'); ?>
		<select name="Partido[victoria]">
			<option value="0" selected>No</option>
			<option value="1">Si</option>
		</select>
		<?php echo $form->error($model,'victoria'); ?>
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

<script>
		
		var data = [
			//{ value: "AL", label: "Alabama" },
			<?php
			$campeonatos= Campeonato::model()->findAll();
			foreach($campeonatos as $campeonato){ ?>
				{value:"<?php echo $campeonato->id; ?>",label: "<?php echo $campeonato->torneo; ?>(<?php echo $campeonato->division; ?>,<?php echo $campeonato->fecha; ?>)"},
			<?php } ?>
		];
		jQuery(function() {
			
			jQuery("#Partido_liga2").autocomplete({
				source: data,
				focus: function(event, ui) {
					// prevent autocomplete from updating the textbox
					event.preventDefault();
					// manually update the textbox
					jQuery(this).val(ui.item.label);
				},
				select: function(event, ui) {
					// prevent autocomplete from updating the textbox
					event.preventDefault();
					// manually update the textbox and hidden field
					jQuery(this).val(ui.item.label);
					jQuery("#Partido_liga").val(ui.item.value);
				}
			});
		});
	</script>