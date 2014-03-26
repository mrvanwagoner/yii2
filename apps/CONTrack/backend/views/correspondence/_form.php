<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var backend\models\Correspondence $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="correspodence-form col-lg-6">

	<?php $form = ActiveForm::begin(); ?>
        <div class="panel panel-default">   
    	<div class="panel-heading">
            <i class="fa fa-folder-open fa-fw"></i> Correspondence Info
            	
    	</div><!-- end panel-heading -->

 	 <div class="panel-body">

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'task_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'from_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'to_entities')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'cc_entities')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'bcc_entities')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'subject')->textInput(['maxlength' => 255]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>
             	</div><!-- end panel-body -->
   </div><!-- end panel --> 

</div><!-- emd col-lg-6 -->
