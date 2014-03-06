<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\EntitySearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="entity-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'type') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'contact') ?>

		<?php // echo $form->field($model, 'aka') ?>

		<?php // echo $form->field($model, 'dba') ?>

		<?php // echo $form->field($model, 'middle_name') ?>

		<?php // echo $form->field($model, 'suffix') ?>

		<?php // echo $form->field($model, 'previous_name') ?>

		<?php // echo $form->field($model, 'signature') ?>

		<?php // echo $form->field($model, 'is_tenant') ?>

		<?php // echo $form->field($model, 'is_user') ?>

		<?php // echo $form->field($model, 'is_provider') ?>

		<?php // echo $form->field($model, 'is_customer') ?>

		<?php // echo $form->field($model, 'tenant_type_picklist_id') ?>

		<?php // echo $form->field($model, 'is_tenant_enabled') ?>

		<?php // echo $form->field($model, 'db_username') ?>

		<?php // echo $form->field($model, 'db_password') ?>

		<?php // echo $form->field($model, 'is_track_customers') ?>

		<?php // echo $form->field($model, 'is_track_providers') ?>

		<?php // echo $form->field($model, 'is_track_employees') ?>

		<?php // echo $form->field($model, 'is_track_projects') ?>

		<?php // echo $form->field($model, 'is_track_transactions') ?>

		<?php // echo $form->field($model, 'is_track_campaigns') ?>

		<?php // echo $form->field($model, 'is_track_content') ?>

		<?php // echo $form->field($model, 'is_branded') ?>

		<?php // echo $form->field($model, 'slogan') ?>

		<?php // echo $form->field($model, 'logo_document_id') ?>

		<?php // echo $form->field($model, 'is_user_enabled') ?>

		<?php // echo $form->field($model, 'username') ?>

		<?php // echo $form->field($model, 'auth_key') ?>

		<?php // echo $form->field($model, 'password_hash') ?>

		<?php // echo $form->field($model, 'password_reset_token') ?>

		<?php // echo $form->field($model, 'salt') ?>

		<?php // echo $form->field($model, 'current_role_id') ?>

		<?php // echo $form->field($model, 'last_sign_in_time') ?>

		<?php // echo $form->field($model, 'x_reset_password_sent_time') ?>

		<?php // echo $form->field($model, 'x_remember_created_time') ?>

		<?php // echo $form->field($model, 'x_sign_in_count') ?>

		<?php // echo $form->field($model, 'x_current_sign_in_time') ?>

		<?php // echo $form->field($model, 'x_current_sign_in_ip') ?>

		<?php // echo $form->field($model, 'x_last_sign_in_ip') ?>

		<?php // echo $form->field($model, 'is_provider_approved') ?>

		<?php // echo $form->field($model, 'organization_type') ?>

		<?php // echo $form->field($model, 'is_1099_eligible') ?>

		<?php // echo $form->field($model, 'is_material_only') ?>

		<?php // echo $form->field($model, 'is_track_license') ?>

		<?php // echo $form->field($model, 'is_track_insurance') ?>

		<?php // echo $form->field($model, 'sponsor_entity_id') ?>

		<?php // echo $form->field($model, 'credit_picklist_id') ?>

		<?php // echo $form->field($model, 'credit_score') ?>

		<?php // echo $form->field($model, 'total_income') ?>

		<?php // echo $form->field($model, 'housing_expense') ?>

		<?php // echo $form->field($model, 'liquid_assets') ?>

		<?php // echo $form->field($model, 'investments') ?>

		<?php // echo $form->field($model, 'personal_property') ?>

		<?php // echo $form->field($model, 'real_property') ?>

		<?php // echo $form->field($model, 'total_assets') ?>

		<?php // echo $form->field($model, 'current_liabilities') ?>

		<?php // echo $form->field($model, 'long_term_liabilities') ?>

		<?php // echo $form->field($model, 'total_liabilities') ?>

		<?php // echo $form->field($model, 'equity') ?>

		<?php // echo $form->field($model, 'order_picklist_id') ?>

		<?php // echo $form->field($model, 'is_renter') ?>

		<?php // echo $form->field($model, 'years_school') ?>

		<?php // echo $form->field($model, 'employment_status') ?>

		<?php // echo $form->field($model, 'occupation') ?>

		<?php // echo $form->field($model, 'employer') ?>

		<?php // echo $form->field($model, 'position') ?>

		<?php // echo $form->field($model, 'years_employed') ?>

		<?php // echo $form->field($model, 'retirement_age') ?>

		<?php // echo $form->field($model, 'date_bankruptcy') ?>

		<?php // echo $form->field($model, 'date_birth') ?>

		<?php // echo $form->field($model, 'date_anniversary') ?>

		<?php // echo $form->field($model, 'gender') ?>

		<?php // echo $form->field($model, 'marital_status') ?>

		<?php // echo $form->field($model, 'ethnicity_picklist_id') ?>

		<?php // echo $form->field($model, 'is_us_citizen') ?>

		<?php // echo $form->field($model, 'military_status') ?>

		<?php // echo $form->field($model, 'is_us_veteran') ?>

		<?php // echo $form->field($model, 'is_disabled') ?>

		<?php // echo $form->field($model, 'description_disability') ?>

		<?php // echo $form->field($model, 'dependents') ?>

		<?php // echo $form->field($model, 'dependent_ages') ?>

		<?php // echo $form->field($model, 'customer_need_picklist_id') ?>

		<?php // echo $form->field($model, 'folder_location') ?>

		<?php // echo $form->field($model, 'note') ?>

		<?php // echo $form->field($model, 'create_time') ?>

		<?php // echo $form->field($model, 'created_by_entity_id') ?>

		<?php // echo $form->field($model, 'update_time') ?>

		<?php // echo $form->field($model, 'updated_by_entity_id') ?>

		<div class="form-group">
			<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
			<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
