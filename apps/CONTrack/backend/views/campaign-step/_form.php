<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var backend\models\CampaignStep $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="campaign-step-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'campaign_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'step_number')->textInput(['maxlength' => 10]) ?>

		<?= $form->field($model, 'project_task_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'status_picklist_id')->textInput(['maxlength' => 10]) ?>

		<?= $form->field($model, 'perform')->textInput() ?>

		<?= $form->field($model, 'period_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'document_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'order')->textInput() ?>

		<?= $form->field($model, 'from')->textInput() ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'specific_date')->textInput() ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
