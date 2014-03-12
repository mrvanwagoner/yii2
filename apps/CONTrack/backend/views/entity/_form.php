<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\Custom;//CHANGED MVW 03//06/14
use backend\models\Entity;//CHANGED MVW 03//06/14
use backend\models\Document;//CHANGED MVW 03//06/14
use kartik\widgets\DatePicker; //CHANGED MVW 03/08/14

/**
 * @var yii\web\View $this
 * @var backend\models\Entity $model
 * @var yii\widgets\ActiveForm $form
 * See http://www.yiiframework.com/extension/multimodelform
 */
?>

<div class="entity-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->checkbox() //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'type')->dropDownList(Custom::listEnum($model, 'type'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

    <?php if ($model->type == 'Company') //CHANGED MVW 03/07/14: Conditional by type
    { // Is Company
      echo $form->field($model, 'name')->textInput(['maxlength' => 255])->label('Company Name');
      echo $form->field($model, 'contact')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'dba')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'aka')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'organization_type')->dropDownList(Custom::listEnum($model, 'organization_type'), ['prompt'=>'Select from list...']);
    }
      else 
    { // Is Person
      echo $form->field($model, 'name')->textInput(['maxlength' => 255])->label('Last Name');
      echo $form->field($model, 'contact')->textInput(['maxlength' => 255])->label('First Name');
      echo $form->field($model, 'middle_name')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'suffix')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'aka')->textInput(['maxlength' => 255])->label('Nickname');
      echo $form->field($model, 'previous_name')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'signature')->textarea(['rows' => 6]);
      
    } ?>

		<?= $form->field($model, 'sponsor_entity_id')->dropDownList(Entity::listActiveTenants(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'is_tenant')->checkbox() //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'is_user')->checkbox() //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'is_provider')->checkbox() //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'is_customer')->checkbox() //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <H2>Contact Info</H2><!-- CHANGED MYVW 03/08/14. FIXME Add form. See http://www.yiiframework.com/wiki/384/creating-and-updating-model-and-its-related-models-in-one-form-inc-image/-->
    <H3>Type</H3>
    <H3>Phone</H3>
    <H3>Email</H3>
    <H3>Address</H3>
    <H3>URL</H3>

		<?php if ($model->type == 'Person' && $model->is_customer)  //CHANGED MVW 03/06/14
    { // Is Person AND is Customer
      echo '<H2>Customer Info</H2>';
      echo '<H3>Personal Info</H3>';

      echo $form->field($model, 'date_birth')->widget(DatePicker::classname(), [
        // 'name' => 'date_birth'
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        // 'value' => '01/29/2014',
        'size' => 'md',//'sm','md','lg'
        'options' => [
          'placeholder' => 'Enter date...',
          // 'readonly' => true,
        ],
        'pluginOptions' => [
          'autoclose'=>true,
          // 'format' => 'dd-M-yyyy'
          'format' => 'yyyy-mm-dd'
        ]
      ]); //CHANGED MVW 03/08/14: See http://demos.krajee.com/widget-details/datepicker and http://www.yiiframework.com/extension/yii2-widgets/

      echo $form->field($model, 'date_anniversary')->widget(DatePicker::classname(), [
        // 'name' => 'date_birth'
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        // 'value' => '01/29/2014',
        'size' => 'md',//'sm','md','lg'
        'options' => [
          'placeholder' => 'Enter date...',
          // 'readonly' => true,
        ],
        'pluginOptions' => [
          'autoclose'=>true,
          // 'format' => 'dd-M-yyyy'
          'format' => 'yyyy-mm-dd'
        ]
      ]);

      echo $form->field($model, 'gender')->dropDownList(Custom::listEnum($model, 'gender'), ['prompt'=>'Select from list...']); //CHANGED MVW 03/06/14
      echo $form->field($model, 'marital_status')->dropDownList(Custom::listEnum($model, 'marital_status'), ['prompt'=>'Select from list...']); //CHANGED MVW 03/06/14
      echo $form->field($model, 'ethnicity_picklist_id')->dropDownList(Custom::picklist('Ethnicity',null),['prompt'=>'Select from list...']); //CHANGED MVW 03/06/14
      echo $form->field($model, 'is_us_citizen')->checkbox(); //CHANGED MVW 03/06/14
      echo $form->field($model, 'military_status')->dropDownList(Custom::listEnum($model, 'military_status'), ['prompt'=>'Select from list...']); //CHANGED MVW 03/06/14;
      echo $form->field($model, 'is_us_veteran')->checkbox(); //CHANGED MVW 03/06/14
      echo $form->field($model, 'is_disabled')->checkbox(); //CHANGED MVW 03/06/14
      echo $form->field($model, 'description_disability')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'dependents')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'dependent_ages')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'customer_need_picklist_id')->dropDownList(Custom::picklist('Need','is_customer'),['prompt'=>'Select from list...']);
      echo '<H3>Employment Info</H3>';
      echo $form->field($model, 'years_school')->textInput();
      echo $form->field($model, 'employment_status')->dropDownList(Custom::listEnum($model, 'employment_status'), ['prompt'=>'Select from list...']); //CHANGED MVW 03/06/14
      echo $form->field($model, 'occupation')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'employer')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'position')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'years_employed')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'retirement_age')->textInput();
      echo '<H3>Financial Info</H3>';
      echo $form->field($model, 'credit_picklist_id')->dropDownList(Custom::picklist('Credit',null),['prompt'=>'Select from list...']);
      echo $form->field($model, 'credit_score')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'total_income')->textInput(['maxlength' => 19]); //FIXME currency format. See http://www.yiiframework.com/wiki/360/custom-number-formatting-or-decimal-separators-and-i18n/ . Also, echo \Yii::t('app', 'Balance: {0, number, currency}', $sum);
      echo $form->field($model, 'housing_expense')->textInput(['maxlength' => 19]);
      echo $form->field($model, 'liquid_assets')->textInput(['maxlength' => 19]);
      echo $form->field($model, 'investments')->textInput(['maxlength' => 19]);
      echo $form->field($model, 'personal_property')->textInput(['maxlength' => 19]);
      echo $form->field($model, 'real_property')->textInput(['maxlength' => 19]);
      echo $form->field($model, 'total_assets')->textInput(['maxlength' => 19]);
      echo $form->field($model, 'current_liabilities')->textInput(['maxlength' => 19]);
      echo $form->field($model, 'long_term_liabilities')->textInput(['maxlength' => 19]);
      echo $form->field($model, 'total_liabilities')->textInput(['maxlength' => 19]);
      echo $form->field($model, 'equity')->textInput(['maxlength' => 19]);
      echo $form->field($model, 'order_picklist_id')->dropDownList(Custom::picklist('Order',null),['prompt'=>'Select from list...']); //CHANGED MVW 03/06/14
      echo $form->field($model, 'is_renter')->checkbox(); //CHANGED MVW 03/06/14

      echo $form->field($model, 'date_bankruptcy')->widget(DatePicker::classname(), [
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        // 'value' => '01/29/2014',
        'size' => 'md',//'sm','md','lg'
        'options' => [
          'placeholder' => 'Enter date...',
          // 'readonly' => true,
        ],
        'pluginOptions' => [
          'autoclose'=>true,
          // 'format' => 'dd-M-yyyy'
          'format' => 'yyyy-mm-dd'
        ]
      ]);

      echo '<H3>Campaign Triggers</H3>';
    } ?>

    <?php if ($model->is_tenant) //CHANGED MVW 03/07/14
    { // Is Tenant
      echo '<H2>Tenant Info</H2>';
      echo $form->field($model, 'tenant_type_picklist_id')->dropDownList(Custom::picklist('Type', 'is_tenant'),['prompt'=>'Select from list...']);
      echo $form->field($model, 'is_tenant_enabled')->checkbox();
      echo $form->field($model, 'db_username')->textInput(['maxlength' => 16]);
      echo $form->field($model, 'db_password')->passwordInput(); //['maxlength' => 1024]
      echo $form->field($model, 'is_track_customers')->checkbox();
      echo $form->field($model, 'is_track_providers')->checkbox();
      echo $form->field($model, 'is_track_employees')->checkbox();
      echo $form->field($model, 'is_track_projects')->checkbox();
      echo $form->field($model, 'is_track_transactions')->checkbox();
      echo $form->field($model, 'is_track_campaigns')->checkbox();
      echo $form->field($model, 'is_track_content')->checkbox();
      echo $form->field($model, 'is_branded')->checkbox();
      echo $form->field($model, 'slogan')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'logo_document_id')->dropDownList(Document::listFileDocuments(), ['prompt'=>'Select from list...']); //FIXME Create button to go to Document to upload file
      echo $form->field($model, 'folder_location')->textInput(['maxlength' => 255]);
    } ?>

    <?php if ($model->is_user) //CHANGED MVW 03/07/14
    {
      echo '<H2>User Info</H2>';
      echo $form->field($model, 'is_user_enabled')->checkbox();
      echo $form->field($model, 'username')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'auth_key')->textInput(['maxlength' => 32]);
      echo $form->field($model, 'password_hash')->passwordInput();
      echo $form->field($model, 'current_role_id')->textInput(['maxlength' => 11]);
      echo $form->field($model, 'password_reset_token')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'salt')->textInput(['maxlength' => 40]);
      echo $form->field($model, 'last_sign_in_time')->textInput();
      echo $form->field($model, 'x_reset_password_sent_time')->textInput();
      echo $form->field($model, 'x_remember_created_time')->textInput();
      echo $form->field($model, 'x_sign_in_count')->textInput();
      echo $form->field($model, 'x_current_sign_in_time')->textInput();
      echo $form->field($model, 'x_current_sign_in_ip')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'x_last_sign_in_ip')->textInput(['maxlength' => 255]);
    } ?>

		<?php if ($model->is_provider)  //CHANGED MVW 03/08/14
    {
      echo '<H2>Provider Info</H2>';
      echo $form->field($model, 'is_provider_approved')->checkbox();
      echo $form->field($model, 'is_1099_eligible')->checkbox();
      echo $form->field($model, 'is_material_only')->checkbox();
      echo $form->field($model, 'is_track_license')->checkbox();
      echo $form->field($model, 'is_track_insurance')->checkbox();
      echo '<H3>License</H3>';
      echo '<H3>Insurance</H3>';
    } ?>

    <H2>System Info</H2><!-- CHANGED MVW 03/08/14 -->
 
		<?= $form->field($model, 'created_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'create_time')->textInput() //FIXME Autoupdate ?>

		<?= $form->field($model, 'updated_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'update_time')->textInput() //FIXME Autoupdate ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
