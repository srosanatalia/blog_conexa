<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form-group">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'categoria'); ?>
		<?php echo $form->dropDownList($model,'categoria',array('1'=>'Integrações','2'=>'Serviços','3'=>'Financeiro','4'=>'Agenda','5'=>'Parceiros','6'=>'Outros')); ?>
		<?php echo $form->error($model,'categoria'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'conteudo'); ?>
		<?php echo $form->textArea($model,'conteudo',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'conteudo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'autor'); ?>
		<?php echo $form->textField($model,'autor',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'autor'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->