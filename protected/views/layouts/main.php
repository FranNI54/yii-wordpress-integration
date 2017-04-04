<?php
get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.min.css" >
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" >
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.css" >
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-datetimepicker.css" >
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" >
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/datatables/datatables.min.css"/>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/datatables/datatables.js"></script>
<div style="padding:10px;">
<?php
$secciones= ["jugador","partido","campeonato","plantel"];
	foreach($secciones as $seccion){
		?>
		<div style="display:inline-block;width:300px;">
		<h3 style="text-transform:capitalize;padding-top:0;"><?php echo $seccion; ?></h3>
		<a href="<?php echo home_url().'/'.$seccion.'/create'; ?>" >Crear</a><span> / </span>
		<a href="<?php echo home_url().'/'.$seccion.'/admin'; ?>" >Administrar</a>
		<hr>
		</div>
		<?php
	}
	?>
	<?php
		// echos Yii content
	     echo $content;
	?>
</div>
<script>
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Seguro que desea borrarlo?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
<?php get_footer(); ?>