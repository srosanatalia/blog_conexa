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

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" style="display:none">
		<?php echo $form->labelEx($model,'post'); ?>
		<?php echo $form->textField($model,'post', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'post'); ?>
	</div>

	<div class="row" style="padding-left: 10px;padding-right: 10px;">
		<?php echo $form->labelEx($model,'autor'); ?>
		<?php echo $form->textField($model,'autor', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'autor'); ?>
	</div>

	<div class="row" style="padding-left: 10px;padding-right: 10px;">
		<?php echo $form->labelEx($model,'conteudo'); ?>
		<?php echo $form->textArea($model,'conteudo',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'conteudo'); ?>
	</div>

	<div class="row buttons" style="padding-top: 10px; padding-left: 10px;padding-right: 10px;">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->