<?php
/* @var $this CustomerNameController */
/* @var $model CustomerName */

$this->breadcrumbs=array(
	'Customer Names'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CustomerName', 'url'=>array('index')),
	array('label'=>'Create CustomerName', 'url'=>array('create')),
	array('label'=>'Update CustomerName', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CustomerName', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerName', 'url'=>array('admin')),
);
?>

<h1>View CustomerName #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
