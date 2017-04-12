
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


	jQuery("div#dropzone-example").dropzone({ url: "<?php echo Yii::app()->getBaseUrl(true); ?>/relImagenClub/upload/",
			init: function() {
                this.on("sending", function(file, xhr, formData){
						jQuery("#imagen-cargada").hide();
						jQuery("#imagen-cargando").show();

                        formData.append("club", "<?php if(isset($model->club)) echo $model->club; ?>");



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
</div>