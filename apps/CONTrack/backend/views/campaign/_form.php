<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Campaign $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="campaign-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'campaign_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_contractor_campaign')->textInput() ?>

		<?= $form->field($model, 'is_lender_campaign')->textInput() ?>

		<?= $form->field($model, 'is_mortgage_campaign')->textInput() ?>

		<?= $form->field($model, 'is_realtor_campaign')->textInput() ?>

		<?= $form->field($model, 'is_service_campaign')->textInput() ?>

		<?= $form->field($model, 'originating_entity_id')->textInput(['maxlength' => 10]) ?>

		<?= $form->field($model, 'is_project_based')->textInput() ?>

		<?= $form->field($model, 'project_status_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'period_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'sent_occurences')->textInput() ?>

		<?= $form->field($model, 'current_step')->textInput() ?>

		<?= $form->field($model, 'x_filter_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'recipient_entity_ids')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'x_search_condtions')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'start_time')->textInput() ?>

		<?= $form->field($model, 'stop_time')->textInput() ?>

		<?= $form->field($model, 'last_sent_time')->textInput() ?>

		<?= $form->field($model, 'recur_every')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'number_of_occurences')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
