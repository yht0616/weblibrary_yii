<?php
/* @var $this AuthorController */
/* @var $model Author */
/* @var $form CActiveForm */
?>


<div class="ui fluid form segment">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'author-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
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

	<div class='ui buttons'>
<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить',array('class' => 'ui blue button'));?>
<?php
        if (!$model->isNewRecord)
        {
          echo "<div class='or'></div>";
          echo CHtml::link(
            'Удалить',
            array('author/delete','id'=>$model->id),
            array('confirm' => 'Удалить?', 'class' => 'ui red button')
          );


        }
?>
<?php $this->endWidget(); ?>

</div>

