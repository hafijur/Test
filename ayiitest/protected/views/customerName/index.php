<?php
/* @var $this CustomerNameController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customer Names',
);

$this->menu=array(
	array('label'=>'Create CustomerName', 'url'=>array('create')),
	array('label'=>'Manage CustomerName', 'url'=>array('admin')),
);
?>

<h1>Customer Names</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
