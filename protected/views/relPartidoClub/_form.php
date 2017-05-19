<?php
/* @var $this RelPartidoClubController */
/* @var $model RelPartidoClub */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rel-partido-club-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'partido'); ?>
		<?php //echo $form->textField($model,'partido'); ?>
		<input name="RelPartidoClub[partido]" id="RelPartidoClub_partido" type="hidden" value="<?php if(isset($model->partido)){echo $model->partido;} ?>"  >
		<input name="partido_nombre" id="RelPartidoClub_partido" type="text" value="<?php if(isset($model->partido)){
			$partido= Partido::model()->findByPk($model->partido);
			echo $partido["fecha"].'('.$partido->liga_data["torneo"].' '.$partido->liga_data["fecha"].'-'.Categoria::model()->findByPk( $partido->liga_data["division"])->nombre.')';
			} ?>" disabled>
		<?php echo $form->error($model,'partido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'club'); ?>
		<?php //echo $form->textField($model,'club'); ?>
		<input id="RelPartidoClub_club2" type="text" placeholder="" value="<?php if(isset($model->club)){
			$club= Club::model()->findByPk($model->club);
			echo $club->nombre;
		} ?>" />
		<input type="hidden" id="RelPartidoClub_club" type="text" name="RelPartidoClub[club]" value="<?php if(isset($model->club)){echo $model->club;} ?>" />
		<?php echo $form->error($model,'club'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lado'); ?>
		<?php //echo $form->textField($model,'lado'); ?>
		<select id="RelPartidoClub_lado" name="RelPartidoClub[lado]">
			<option value="0" <?php if(isset($model->lado)&&$model->lado==0){?>selected<?php } ?>>Local</option>
			<option value="1" <?php if(isset($model->lado)&&$model->lado==1){?>selected<?php } ?>>Visitante</option>
		</select>
		<?php echo $form->error($model,'lado'); ?>
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
			
			jQuery("#RelPartidoClub_club2").autocomplete({
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
					jQuery("#RelPartidoClub_club").val(ui.item.value);
				}
			});
		});
	</script>