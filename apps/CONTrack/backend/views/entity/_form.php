<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\components\Custom;
use backend\models\Picklist;
use backend\models\Entity;

/**
 * @var yii\web\View $this
 * @var backend\models\Entity $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="entity-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->checkbox() ?>

		<?= $form->field($model, 'is_tenant')->checkbox() ?>

		<?= $form->field($model, 'is_user')->checkbox() ?>

		<?= $form->field($model, 'is_provider')->checkbox() ?>

		<?= $form->field($model, 'is_customer')->checkbox() ?>

		<?= $form->field($model, 'tenant_type_picklist_id')->dropDownList(Picklist::listTenantTypes(), ['prompt'=>'Select from list...']) //FIXME create dynamic function that creates list based on field name ?>

		<?= $form->field($model, 'is_tenant_enabled')->checkbox() ?>

		<?= $form->field($model, 'is_track_customers')->checkbox() ?>

		<?= $form->field($model, 'is_track_providers')->checkbox() ?>

		<?= $form->field($model, 'is_track_employees')->checkbox() ?>

		<?= $form->field($model, 'is_track_projects')->checkbox() ?>

		<?= $form->field($model, 'is_track_transactions')->checkbox() ?>

		<?= $form->field($model, 'is_track_campaigns')->checkbox() ?>

		<?= $form->field($model, 'is_track_content')->checkbox() ?>

		<?= $form->field($model, 'is_branded')->checkbox() ?>

		<?= $form->field($model, 'logo_document_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_user_enabled')->checkbox() ?>

		<?= $form->field($model, 'current_role_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'x_sign_in_count')->textInput() ?>

		<?= $form->field($model, 'is_provider_approved')->checkbox() ?>

		<?= $form->field($model, 'is_1099_eligible')->checkbox() ?>

		<?= $form->field($model, 'is_material_only')->checkbox() ?>

		<?= $form->field($model, 'is_track_license')->checkbox() ?>

		<?= $form->field($model, 'is_track_insurance')->checkbox() ?>

		<?= $form->field($model, 'sponsor_entity_id')->dropDownList(Entity::listActiveTenants(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'credit_picklist_id')->dropDownList(Picklist::listCredit(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'order_picklist_id')->dropDownList(Picklist::listOrder(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'is_renter')->checkbox() ?>

		<?= $form->field($model, 'years_school')->textInput() ?>

		<?= $form->field($model, 'retirement_age')->textInput() ?>

		<?= $form->field($model, 'ethnicity_picklist_id')->dropDownList(Picklist::listEthnicity(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'is_us_citizen')->checkbox() ?>

		<?= $form->field($model, 'is_us_veteran')->checkbox() ?>

		<?= $form->field($model, 'is_disabled')->checkbox() ?>

		<?= $form->field($model, 'customer_need_picklist_id')->dropDownList(Picklist::listNeed(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'created_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'updated_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'type')->dropDownList(Custom::listEnum($model, 'type')) //CHANGED MVW 03/06/14. Creates dropdown list from the ENUM values.?>

		<?= $form->field($model, 'signature')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'organization_type')->dropDownList(Custom::listEnum($model, 'organization_type')) ?>

		<?= $form->field($model, 'employment_status')->dropDownList(Custom::listEnum($model, 'employment_status')) ?>

		<?= $form->field($model, 'gender')->dropDownList(Custom::listEnum($model, 'gender')) ?>

		<?= $form->field($model, 'marital_status')->dropDownList(Custom::listEnum($model, 'marital_status')) ?>

		<?= $form->field($model, 'military_status')->dropDownList(Custom::listEnum($model, 'military_status')) ?>

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

		<?= $form->field($model, 'name')->textInput(['maxlength' => 255])->hint('Please enter Company or Last Name') //FIXME Conditional by type ?>

		<?= $form->field($model, 'contact')->textInput(['maxlength' => 255])->hint('Please enter Contact Name or First Name') //FIXME Conditional by type ?>

		<?= $form->field($model, 'aka')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'dba')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'middle_name')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'suffix')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'previous_name')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'slogan')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'password_hash')->passwordInput()//CHANGED MVW 03/06/14 ?>

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
