<?php
/* @var $this ComentarioController */
/* @var $model Comentario */
/* @var $form CActiveForm */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comentario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" style="display:none">
		<?php echo $form->labelEx($model,'post'); ?>
		<?php echo $form->textField($model,'post'); ?>
		<?php echo $form->error($model,'post'); ?>
	</div>

	<div class="row" >
		<?php echo $form->labelEx($model,'autor'); ?>
		<?php echo $form->textField($model,'autor'); ?>
		<?php echo $form->error($model,'autor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conteudo'); ?>
		<?php echo $form->textArea($model,'conteudo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'conteudo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->