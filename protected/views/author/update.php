<?php
/* @var $this AuthorController */
/* @var $model Author */

$this->breadcrumbs=array(
	'Авторы'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Редактировать',
);
?>

<h1>Редактировать</h1>

<?php $this->renderPartial('_form', array(
  'model'=>$model,
)); ?>
