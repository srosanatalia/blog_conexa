<?php
/* @var $this PostController */
/* @var $data Post */
?>
<div class="view">
<div class="row mb-6" style="padding-bottom: 50px; justify-content: center;align-items: center;">

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo CHtml::link(CHtml::encode($data->titulo), array('view', 'id'=>$data->post_id)); ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">
					Por
					<?php echo CHtml::encode($data->autor); ?>, 
					postado em  <?php echo CHtml::encode($data->data); ?>,
					categoria:  <?php echo CHtml::encode($data->categoria); ?>
		</h6>
		<p class="card-text"style="max-width: 300px; overflow: hidden;text-overflow: ellipsis;white-space: nowrap"><?php echo CHtml::encode($data->conteudo); ?></p>
        <a href="<?= Yii::app()->createUrl("post/view", array('id'=>$data->post_id));?>" class="btn btn-dark">Ler mais</a>
      </div>
    </div>
  </div>
</div>	
</div>