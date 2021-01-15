<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);


?>

<div class="row mb-6" style="padding-bottom: 50px;padding-top: 50px; justify-content: center;align-items: center;">
	<h1 class="text-justify">Criar postagem</h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>