<?php
/* @var $this AuthorController */
/* @var $model Author */

$this->breadcrumbs=array(
	'Авторы'=>array('index'),
	'Добавить',
);
?>

<h1>Добавить Автора</h1>

<?php $this->renderPartial('_form', array(
  'model'=>$model,
)); ?>
