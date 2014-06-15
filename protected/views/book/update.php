<?php
/* @var $this BookController */
/* @var $model Book */

$this->breadcrumbs=array(
	'Книги'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Редактировать',
);

?>

<h1>Редактировать</h1>

<?php $this->renderPartial('_form', array(
  'model'=>$model,
  'authors'=>$authors,
)); ?>
