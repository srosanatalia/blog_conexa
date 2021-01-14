<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);


?>

<h1>Criar Postagem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>