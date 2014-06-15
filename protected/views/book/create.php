<?php
/* @var $this BookController */
/* @var $model Book */

$this->breadcrumbs=array(
	'Книги'=>array('index'),
	'Добавить',
);
?>

<h1>Добавить книгу</h1>

<?php $this->renderPartial('_form', array(
  'model'=>$model,
  'authors'=>$authors,
)); ?>
