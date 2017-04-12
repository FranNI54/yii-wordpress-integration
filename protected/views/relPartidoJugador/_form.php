<?php
/* @var $this RelPartidoJugadorController */
/* @var $model RelPartidoJugador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rel-partido-jugador-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jugador'); ?>
		<?php //echo $form->textField($model,'jugador'); ?>
		<input id="RelPartidoJugador_jugador2" type="text" placeholder="" <?php if(isset($model->jugador)){ ?> disabled value="<?php 
		$jugador= Jugador::model()->findByPk($model->jugador);
		echo $jugador->nombre." ".$jugador->apellido;
		?>" <?php } ?>/>
		<input type="hidden" id="RelPartidoJugador_jugador" type="text" name="RelPartidoJugador[jugador]" <?php if(isset($model->jugador)){ ?> value="<?php echo $model->jugador; ?>"  <?php } ?>/>
		<?php echo $form->error($model,'jugador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partido'); ?>
		<?php //echo $form->textField($model,'partido'); ?>
		<input id="RelPartidoJugador_partido2" disabled type="text" placeholder="<?php if(isset($model->partido)){
			$partido= Partido::model()->findByPk( RelPartidoClub::model()->findByPk($model->partido)->partido);			
			
			$campeonato= Campeonato::model()->findByPk($partido->liga);
			
				echo $campeonato->torneo."(".$campeonato->fecha.") - ".$partido->fecha;
			
			
		} ?>" />
		<input type="hidden" id="RelPartidoJugador_partido" type="text" name="RelPartidoJugador[partido]" value="<?php if(isset($model->partido)){echo $model->partido;} ?>" />
		<?php echo $form->error($model,'partido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo'); ?>
		<?php //echo $form->textField($model,'campo'); ?>
		<select name="RelPartidoJugador[campo]" id="RelPartidoJugador_campo">
		<option value="1" <?php if(isset($model->campo)&&$model->campo==1){echo "selected";} ?>>Titular</option>
		<option value="0" <?php if(isset($model->campo)&&$model->campo==0){echo "selected";} ?>>Suplente</option>
		</select>
		<?php echo $form->error($model,'campo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'camiseta'); ?>
		<?php echo $form->textField($model,'camiseta',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'camiseta'); ?>
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
			$jugadores= Jugador::model()->findAll();
			foreach($jugadores as $jugador){ ?>
				{value:"<?php echo $jugador->id; ?>",label: "<?php echo $jugador->nombre." ".$jugador->apellido; ?>"},
			<?php } ?>
		];
		jQuery(function() {
			
			jQuery("#RelPartidoJugador_jugador2").autocomplete({
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
					jQuery("#RelPartidoJugador_jugador").val(ui.item.value);
				}
			});
		});
	</script>