<?php
/* @var $this ImagenController */
/* @var $data Imagen */
?>

<div class="view" style="display:inline-block;width:120px;height:120px;">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	<?php if(false){ ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php } ?>
	
	<img style="max-width:100px;max-height:100px;padding:10px;" src="http://localhost/ferropedia/<?php echo $data->url; ?>" />
	
	<?php //echo CHtml::encode($data->url); ?>
	<br />


</div>