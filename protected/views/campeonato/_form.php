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
		<select name="Campeonato[division]" >
			<?php 
			$categorias= Categoria::model()->findAll();
			foreach($categorias as $categoria){ ?>
				<option value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
			<?php } ?>
		</select>
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
		<input id="Campeonato_ganado2" type="text" value="<?php if(isset($model->ganado)){
			$club= Club::model()->findByPk($model->ganado);
			echo $club->nombre;
		} ?>" />
		<input id="Campeonato_ganado" type="hidden" name="Campeonato[ganado]" value="<?php if(isset($model->club)){echo $model->club;} ?>" />
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

<script>
		
	var data = [
		//{ value: "AL", label: "Alabama" },
		<?php
		$clubes= Club::model()->findAll();
		foreach($clubes as $club){ ?>
			{value:"<?php echo $club->id; ?>",label: "<?php echo $club->nombre; ?>"},
		<?php } ?>
	];
	jQuery(function() {
		
		jQuery("#Campeonato_ganado2").autocomplete({
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
				jQuery("#Campeonato_ganado").val(ui.item.value);
			}
		});
	});
</script>