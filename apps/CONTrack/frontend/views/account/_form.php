<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Account $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="account-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'project_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'cost_code_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'account_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'transaction_status_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_estimate')->textInput() ?>

		<?= $form->field($model, 'is_track_draws')->textInput() ?>

		<?= $form->field($model, 'is_track_transactions')->textInput() ?>

		<?= $form->field($model, 'budget_account_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'breakdown_account_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'contract_account_id')->textInput() ?>

		<?= $form->field($model, 'project_documents_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'provider_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'draw_account_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'gl_code_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'inspector_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'route_project_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_reported')->textInput() ?>

		<?= $form->field($model, 'is_bold')->textInput() ?>

		<?= $form->field($model, 'owner_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_asset')->textInput() ?>

		<?= $form->field($model, 'is_liability')->textInput() ?>

		<?= $form->field($model, 'is_paid_by_close')->textInput() ?>

		<?= $form->field($model, 'address_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'months_to_pay')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'budget_impact')->textInput() ?>

		<?= $form->field($model, 'comment_budget')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'analyze')->textInput() ?>

		<?= $form->field($model, 'comment_inspection')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'date_established')->textInput() ?>

		<?= $form->field($model, 'date_ref')->textInput() ?>

		<?= $form->field($model, 'date_requested')->textInput() ?>

		<?= $form->field($model, 'date_received')->textInput() ?>

		<?= $form->field($model, 'date_paid')->textInput() ?>

		<?= $form->field($model, 'date_inspected')->textInput() ?>

		<?= $form->field($model, 'date_maturity')->textInput() ?>

		<?= $form->field($model, 'search_project_description') ?>

		<?= $form->field($model, 'original_amount')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'percent_retainage')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'percent_variance')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'revision')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'retainage')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'net_amount')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'completed')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'previous_payment')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'percent_previous')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'percent_current')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'rate_interest')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'payment_min')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) ?>

		<?= $form->field($model, 'account_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'craft_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'client_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'ref_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'check_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'year')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'make')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'model')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'location')->textInput(['maxlength' => 255]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
