<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Contact $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="contact-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'type_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'status_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'address_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'phone_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'mobile_phone_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'fax_phone_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'email_id')->textInput(['maxlength' => 1]) ?>

		<?= $form->field($model, 'contact_method_person_task_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_employee')->textInput() ?>

		<?= $form->field($model, 'trainer_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_full_time')->textInput() ?>

		<?= $form->field($model, 'is_eligible_for_rehire')->textInput() ?>

		<?= $form->field($model, 'grade')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'sponsor_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_preferred')->textInput() ?>

		<?= $form->field($model, 'sales_rep_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'service_rep_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'lead_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'provider_terms_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'payment_method_provider_task_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'refer_score')->textInput() ?>

		<?= $form->field($model, 'is_named_insured')->textInput() ?>

		<?= $form->field($model, 'ok_to_email')->textInput() ?>

		<?= $form->field($model, 'ok_to_text')->textInput() ?>

		<?= $form->field($model, 'Jobs_per_year')->textInput() ?>

		<?= $form->field($model, 'is_spec_builder')->textInput() ?>

		<?= $form->field($model, 'number_of_models')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'builder_type')->textInput() ?>

		<?= $form->field($model, 'loan_in_name')->textInput() ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'date_hire')->textInput() ?>

		<?= $form->field($model, 'date_modified')->textInput() ?>

		<?= $form->field($model, 'date_rehire')->textInput() ?>

		<?= $form->field($model, 'date_terminated')->textInput() ?>

		<?= $form->field($model, 'date_grade_assigned')->textInput() ?>

		<?= $form->field($model, 'date_sales_rep_assigned')->textInput() ?>

		<?= $form->field($model, 'date_service_rep_assigned')->textInput() ?>

		<?= $form->field($model, 'date_first_contact')->textInput() ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'commission_percent')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'commission_amount')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'credit_limit')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'percent_close_out')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'terms_points')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'terms_rate')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'salary')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'wage')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'refer_comment')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'comment_differentiation')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'avg_value')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'current_lender_source')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'sales_source')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'account_number')->textInput(['maxlength' => 45]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
