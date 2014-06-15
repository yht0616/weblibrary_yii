<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/semantic.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/javascript/semantic.js" type="text/javascript" charset="utf-8"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div class="top_menu">
  <div class="ui secondary pointing menu">
    <div class="right menu">
      <?php if (Yii::app()->user->isGuest)
      {
        echo Chtml::link('Войти', Yii::app()->createUrl('site/login'), array('class' => 'ui item'));
      }
       if (!Yii::app()->user->isGuest)echo Chtml::link("Выйти(<b>".Yii::app()->user->id."</b>)", Yii::app()->createUrl('site/logout'), array('class' => 'ui item'));  ?>
  </div>
</div>
</div>

<div class="left_menu">
<div class="ui vertical menu">
  <?php echo CHtml::link('<i class="home icon"></i> Главная', Yii::app()->createUrl('author/index'),array('class' => 'item')) ?>
  <div class="item">
    <i class="book icon"></i> Книги
    <div class="menu">
      <?php echo CHtml::link('Список книг', Yii::app()->createUrl('book/index'),array('class' => 'item')) ?>
      <?php
      if ( !Yii::app()->user->isGuest )
      {?>
        <?php echo CHtml::link('Добавить книгу', Yii::app()->createUrl('book/create'),array('class' => 'item')) ?>
<?php } ?>
 <div class="item">
 <form action= <?php echo Yii::app()->createUrl('book/index') ?> method='POST'>
 <div class="ui input"><input type="search"  name='search' placeholder="Найти книгу"></div>
 </form>
  </div>
    </div>
  </div>
<div class="item">
    <i class="user icon"></i> Авторы
    <div class="menu">
        <?php echo CHtml::link('Список авторов', Yii::app()->createUrl('author/index'),array('class' => 'item')) ?>
       <?php
      if ( !Yii::app()->user->isGuest )
      {?>
        <?php echo CHtml::link('Добавить автора', Yii::app()->createUrl('author/create'),array('class' => 'item')) ?>
<?php } ?>
    </div>
  </div>
</div>
</div>
<div class="container" id="page">

<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>


</div><!-- page -->

</body>
</html>
