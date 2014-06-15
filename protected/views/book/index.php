<?php
/* @var $this BookController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Книги',
);
?>

<h1>Книги</h1>
<?php
if (!empty($authors))
{
if (!is_array($authors) && get_class($authors) == 'Book')
{
  $authors = $authors->authors;
}
foreach ($authors as $key => $author)
{?>
<h4 class="ui top attached header">
<?php echo $author->name ?>
</h4>
<?php
?>
<div class="ui segment attached">
<div class="ui list">
<?php foreach ($author->books as $book_key => $book)
{?>
  <div class="item">
    <div class="header"><?php echo CHtml::link($book->name, Yii::app()->createUrl('book/update',array('id' => $book->id))) ?></div>
  </div>
<?php } ?>
</div>
</div>
<?php }
}
else
{?>
<div class="ui info message">
  <i class="close icon"></i>
  <div class="header">
По вашему запросу ничего не найдено!
  </div>
  <ul class="list">
    <li>Возможнов вбазе нет записей удовлетворяющих вашему запросу.</li>
  </ul>
</div>
<?php
}
?>
