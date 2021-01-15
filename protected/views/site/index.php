<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php
/* @var $this PostController */
/* @var $data Post */
?>
<div class="row mb-6" style="padding-bottom: 50px;padding-top: 50px; justify-content: center;align-items: center;">
	<h1 class="text-justify">Postagens recentes</h1>
</div>
<?php 
if(($dataProvider)){
	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); 
} else{?>
	<div class="row mb-6" style="padding-bottom: 50px; justify-content: center;align-items: center;">

  <div class="col-sm-6">
    <div class="card" style="justify-content: center;align-items: center;">
      <div class="card-body">
        <h5 class="card-title ">Ainda não há postagens por aqui</h5>
		<p class="card-text">Crie já o primeiro post</p>
        <a href="<?= Yii::app()->createUrl("post/create");?>" class="btn btn-dark" style="justify-content: center;align-items: center;">Criar</a>
      </div>
    </div>
  </div>
</div>	<?php
}
?>