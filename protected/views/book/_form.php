<?php
/* @var $this BookController */
/* @var $model Book */
/* @var $form CActiveForm */
if ($model->authors)
 $author_id = $model->authors[0]->id;
else
  $author_id = 1;
?>

<div class="ui fluid form segment">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'book-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validsation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="field">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
<div class="field">
    <?php echo $form->labelEx($model,'author'); ?>
    <?php echo $form->dropDownList($model,'author',$authors,array("options"=>array("$author_id" => array('selected' => true)))); ?>
</div>
<?php
?>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить',array('class' => 'ui blue submit button')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
