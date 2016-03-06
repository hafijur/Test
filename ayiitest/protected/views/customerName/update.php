<?php
/* @var $this CustomerNameController */
/* @var $model CustomerName */

$this->breadcrumbs=array(
	'Customer Names'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomerName', 'url'=>array('index')),
	array('label'=>'Create CustomerName', 'url'=>array('create')),
	array('label'=>'View CustomerName', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CustomerName', 'url'=>array('admin')),
);
?>

<h1>Update CustomerName <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>