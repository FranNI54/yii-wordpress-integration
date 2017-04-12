<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Categoria', 'url'=>array('index')),
	array('label'=>'Create Categoria', 'url'=>array('create')),
	array('label'=>'Update Categoria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Categoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Categoria', 'url'=>array('admin')),
);
?>

<h1>Categoria </h1>


<p><strong>Nombre</strong> <?php echo $model->nombre; ?></p>
<p><strong>Descripción</strong> <?php echo $model->descripcion; ?></p>

<?php 
$campeonatos= Campeonato::model()->findAllByAttributes(array("division"=>$model->id));
if(count($campeonatos)>0){
 ?>
<h3>Campeonatos</h3>
<ul>
<?php foreach($campeonatos as $campeonato){ ?>
<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/campeonato/<?php echo $model->id; ?>"><?php echo $campeonato->torneo; ?></a></li>
<?php } ?>
</ul>
<?php } ?>
