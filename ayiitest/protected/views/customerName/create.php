<?php
/* @var $this CustomerNameController */
/* @var $model CustomerName */

$this->breadcrumbs=array(
	'Customer Names'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CustomerName', 'url'=>array('index')),
	array('label'=>'Manage CustomerName', 'url'=>array('admin')),
);
?>

<h1>Create CustomerName</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>