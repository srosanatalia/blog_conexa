<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php
/* @var $this PostController */
/* @var $data Post */
?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>