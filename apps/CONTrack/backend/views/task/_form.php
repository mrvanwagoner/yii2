<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var backend\models\Task $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="task-form col-lg-12">

	<?php $form = ActiveForm::begin(); ?>
        <div class="panel panel-default">   
    	<div class="panel-heading">
            <i class="fa fa-folder-open fa-fw"></i> Task Info
            	
    	</div><!-- end panel-heading -->

 	 <div class="panel-body">
     <div class="task-form col-lg-6">

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'task_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'duration')->textInput() ?>

		<?= $form->field($model, 'is_done')->textInput() ?>

		<?= $form->field($model, 'assigned_to_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'supervisor_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'customer_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'supplier_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'person_task_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'project_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'project_status_picklist_id')->textInput(['maxlength' => 11]) ?>
        
        <?= $form->field($model, 'start')->textInput() ?>

		<?= $form->field($model, 'finish')->textInput() ?>

		<?= $form->field($model, 'late_start')->textInput() ?>

		<?= $form->field($model, 'late_finish')->textInput() ?>

		<?= $form->field($model, 'actual_start')->textInput() ?>

		<?= $form->field($model, 'actual_finish')->textInput() ?>

		<?= $form->field($model, 'percent_complete')->textInput(['maxlength' => 19]) ?>
        </div><!-- emd col-lg-6 -->
        <div class="task-form col-lg-6">

		<?= $form->field($model, 'code_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'float')->textInput() ?>

		<?= $form->field($model, 'actual_duration')->textInput() ?>

		<?= $form->field($model, 'campaign_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'campaign_step_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'priority')->textInput() ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) ?>

		<?= $form->field($model, 'tags')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'location')->textInput(['maxlength' => 255]) ?>
                </div><!-- emd col-lg-6 -->

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>


             	</div><!-- end panel-body -->
   </div><!-- end panel --> 

</div><!-- emd col-lg-12 -->
