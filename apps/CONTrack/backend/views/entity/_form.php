<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Entity $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="entity-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'is_tenant')->textInput() ?>

		<?= $form->field($model, 'is_user')->textInput() ?>

		<?= $form->field($model, 'is_provider')->textInput() ?>

		<?= $form->field($model, 'is_customer')->textInput() ?>

		<?= $form->field($model, 'tenant_type_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_tenant_enabled')->textInput() ?>

		<?= $form->field($model, 'is_track_customers')->textInput() ?>

		<?= $form->field($model, 'is_track_providers')->textInput() ?>

		<?= $form->field($model, 'is_track_employees')->textInput() ?>

		<?= $form->field($model, 'is_track_projects')->textInput() ?>

		<?= $form->field($model, 'is_track_transactions')->textInput() ?>

		<?= $form->field($model, 'is_track_campaigns')->textInput() ?>

		<?= $form->field($model, 'is_track_content')->textInput() ?>

		<?= $form->field($model, 'is_branded')->textInput() ?>

		<?= $form->field($model, 'logo_document_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_user_enabled')->textInput() ?>

		<?= $form->field($model, 'current_role_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'x_sign_in_count')->textInput() ?>

		<?= $form->field($model, 'is_provider_approved')->textInput() ?>

		<?= $form->field($model, 'is_1099_eligible')->textInput() ?>

		<?= $form->field($model, 'is_material_only')->textInput() ?>

		<?= $form->field($model, 'is_track_license')->textInput() ?>

		<?= $form->field($model, 'is_track_insurance')->textInput() ?>

		<?= $form->field($model, 'sponsor_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'credit_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'order_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_renter')->textInput() ?>

		<?= $form->field($model, 'years_school')->textInput() ?>

		<?= $form->field($model, 'retirement_age')->textInput() ?>

		<?= $form->field($model, 'ethnicity_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_us_citizen')->textInput() ?>

		<?= $form->field($model, 'is_us_veteran')->textInput() ?>

		<?= $form->field($model, 'is_disabled')->textInput() ?>

		<?= $form->field($model, 'customer_need_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'signature')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'organization_type')->textInput() ?>

		<?= $form->field($model, 'employment_status')->textInput() ?>

		<?= $form->field($model, 'gender')->textInput() ?>

		<?= $form->field($model, 'marital_status')->textInput() ?>

		<?= $form->field($model, 'military_status')->textInput() ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'last_sign_in_time')->textInput() ?>

		<?= $form->field($model, 'x_reset_password_sent_time')->textInput() ?>

		<?= $form->field($model, 'x_remember_created_time')->textInput() ?>

		<?= $form->field($model, 'x_current_sign_in_time')->textInput() ?>

		<?= $form->field($model, 'date_bankruptcy')->textInput() ?>

		<?= $form->field($model, 'date_birth')->textInput() ?>

		<?= $form->field($model, 'date_anniversary')->textInput() ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'total_income')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'housing_expense')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'liquid_assets')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'investments')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'personal_property')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'real_property')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'total_assets')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'current_liabilities')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'long_term_liabilities')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'total_liabilities')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'equity')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'contact')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'aka')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'dba')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'middle_name')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'suffix')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'previous_name')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'slogan')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'password_hash')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'x_current_sign_in_ip')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'x_last_sign_in_ip')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'credit_score')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'occupation')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'employer')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'position')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'years_employed')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'description_disability')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'dependents')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'dependent_ages')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'folder_location')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'db_username')->textInput(['maxlength' => 16]) ?>

		<?= $form->field($model, 'db_password')->textInput(['maxlength' => 1024]) ?>

		<?= $form->field($model, 'auth_key')->textInput(['maxlength' => 32]) ?>

		<?= $form->field($model, 'salt')->textInput(['maxlength' => 40]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
