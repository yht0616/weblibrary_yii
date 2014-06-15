<?php
/* @var $this AuthorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Авторы',
);

?>

<h1>Авторы</h1>
<br />
<?php
if (!empty($authors))
{
if (is_array($authors))
{
foreach ($authors as $key => $author)
{
?>
<div class="ui label">
  <i class="user icon"></i>
  <?php  echo CHtml::link($author->name, Yii::app()->createUrl('author/update',array('id' => $author->id)));  ?>
  <div class="detail"><?php echo count($author->books);  ?></div>
</div>
<br />
<br />

<?php
}
}
else
{?>
<div class="ui label">
  <i class="user icon"></i>
  <?php  echo CHtml::link($authors->name, Yii::app()->createUrl('author/update',array('id' => $authors->id)));  ?>
  <div class="detail"><?php echo count($authors->books);  ?></div>
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
