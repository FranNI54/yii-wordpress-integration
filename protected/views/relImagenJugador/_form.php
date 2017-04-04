<?php
/* @var $this RelImagenJugadorController */
/* @var $model RelImagenJugador */
/* @var $form CActiveForm */
?>

<div class="form">



<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dropzone.css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dropzone.js"></script>

<style >
	.response{
		text-align: center;
		color:gray;
		font-size: 1.5em;

	}
</style>
<div id="dropzone-example" style="width:80%;height:100px;background-color:#c4c4c4;margin:20px;padding:10px;background-image:url(<?php echo Yii::app()->getBaseUrl(true); ?>/img/cargar_img-oscuro.png);background-repeat:no-repeat;background-position:center;"></div>

<div id="imagen-finish"></div>
<script>


	jQuery("div#dropzone-example").dropzone({ url: "<?php echo Yii::app()->getBaseUrl(true); ?>/relImagenJugador/upload/",
			init: function() {
                this.on("sending", function(file, xhr, formData){
						jQuery("#imagen-cargada").hide();
						jQuery("#imagen-cargando").show();

                        formData.append("jugador", "<?php if(isset($model->jugador)) echo $model->jugador; ?>");



                });
            },
			success: function(data,response){
				console.log(response);
				console.log(data);

				//$("#dropzone-example").hide();
				jQuery("#imagen-finish").append("<h1 class='response'>ImagenCargada: " +response+"</h1>");
			}
	});
</script>

<?php if(false){ ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rel-imagen-jugador-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?php echo $form->textField($model,'imagen'); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jugador'); ?>
		<?php echo $form->textField($model,'jugador'); ?>
		<?php echo $form->error($model,'jugador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar'); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<?php } ?>

</div><!-- form -->