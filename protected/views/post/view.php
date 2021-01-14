<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->post_id,
);

$this->menu=array(
	array('label'=>'Listar Postagens', 'url'=>array('index')),
	array('label'=>'Criar Postagem', 'url'=>array('create')),
	array('label'=>'Editar Postagem', 'url'=>array('update', 'id'=>$model->post_id)),
	array('label'=>'Apagar Postagens', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->post_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
	array('label'=>'Criar Comentário', 'url'=>array('comentario/create', 'post'=>$model->post_id)),
);
?>

<h1># <?php echo $model->titulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'post_id',
		'categoria',
		'titulo',
		'conteudo',
		'autor',
		'data',
	),
)); 
?>

<div class="form">
<br>
<br>
	<h2>Comentários</h2>
	<?php
	foreach ($model->comentarios as $comentario) {
		?><div class="row"><b>Por </b><?php
		echo $comentario->autor;
		?> <b> em </b><?php 
		echo $comentario->data;?></div><?php
		?><div class="row"><?php
		echo $comentario->conteudo;?></div><?php
	}
	?>
</div>
<div id="comentario">
<br>
<br>
	<h2>Deixe seu comentário</h2>
	<?php $this->renderPartial('/comentario/_form',array(
		'model'=>$comentario,
	)); ?>
</div><!-- comments -->