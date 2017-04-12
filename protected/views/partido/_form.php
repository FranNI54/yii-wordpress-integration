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
		$division= Categoria::model()->findByPk($campeonato->division);
		echo $campeonato->torneo.'('.$division->nombre.','.$campeonato->fecha.')';
		?>" <?php if(!isset($update)){ ?>disabled <?php } ?> />
		<input type="hidden" id="Partido_liga" type="text" name="Partido[liga]" value="<?php echo $model->liga; ?>" />
		<?php }else{ ?>
		<input id="Partido_liga2" type="text" placeholder="" />
		<input type="hidden" id="Partido_liga" type="text" name="Partido[liga]" />
		<?php } ?>
		<?php echo $form->error($model,'liga'); ?>
	</div>

	<?php if(false){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'categoria'); ?>
		<?php //echo $form->textField($model,'categoria',array('size'=>60,'maxlength'=>300)); ?>
		<select name="Partido[categoria]" >
			<?php 
			$categorias= Categoria::model()->findAll();
			foreach($categorias as $categoria){ ?>
				<option value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
			<?php } ?>
		</select>
		<?php echo $form->error($model,'categoria'); ?>
	</div>
	<?php } ?>
	
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
			foreach($campeonatos as $campeonato){ 
				$division= Categoria::model()->findByPk($campeonato->division);
			?>
				{value:"<?php echo $campeonato->id; ?>",label: "<?php echo $campeonato->torneo; ?>(<?php echo $division->nombre; ?>,<?php echo $campeonato->fecha; ?>)"},
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