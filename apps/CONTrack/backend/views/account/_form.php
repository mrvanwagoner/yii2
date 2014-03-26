<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use common\components\Custom;//CHANGED MVW 03/06/14
use backend\models\Account;//CHANGED MVW 03/08/14
use backend\models\Address;//CHANGED MVW 03/08/14
use backend\models\Code;//CHANGED MVW 03/08/14
use backend\models\Entity; //CHANGED MVW 03/08/14
use backend\models\Project; //CHANGED MVW 03/08/14
use kartik\widgets\DatePicker; //CHANGED MVW 03/08/14
use kartik\widgets\ActiveForm; //CHANGED MVW 03/22/14
// use kartik\widgets\ActiveField; //CHANGED MVW 03/22/14

/**
 * @var yii\web\View $this
 * @var backend\models\Account $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="account-form">

	<?php $form = ActiveForm::begin( // CHANGED MWW 03/22/14: Pick from the following for layouts. See http://demos.krajee.com/widget-details/active-form
    // Vertical Form (Default)
    // [
    //   'id' => 'login-form-vertical', 
    //   'type' => ActiveForm::TYPE_VERTICAL
    // ]
    // Horizontal Form
    [
      'id' => 'login-form-horizontal', 
      'type' => ActiveForm::TYPE_HORIZONTAL,
      'formConfig' => ['labelSpan' => 2, 'deviceSize' => ActiveForm::SIZE_TINY] //TINY, SMALL, MEDIUM, LARGE
    ]
    // Inline Form
    // [
    //   'id' => 'login-form-inline', 
    //   'type' => ActiveForm::TYPE_INLINE,
    //   'formConfig' => ['showErrors' => true, 'showLabels' => true]
    // ]
  ); ?>


		<?= $form->field($model, 'project_id')->dropDownList(Project::listActiveProjects(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'draw_account_id')->dropDownList(Account::listActiveDrawAccounts(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'type')->dropDownList(Custom::listEnum($model, 'type'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'account_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'craft_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'client_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'date_established')->widget(DatePicker::classname(), [ //CHANGED MVW 03/06/14
      // 'name' => 'date_received'
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
    ]); ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'location')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'original_amount')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'budget_impact')->textInput() ?>

		<?= $form->field($model, 'cost_code_id')->dropDownList(Code::listActiveCostCodes(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/21/14 ?>

		<?= $form->field($model, 'account_picklist_id')->dropDownList(Custom::picklist('Account', null),['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'transaction_status_picklist_id')->dropDownList(Custom::picklist('Status', 'is_transaction'),['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'comment_budget')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'analyze')->dropDownList(Custom::listEnum($model, 'analyze'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'budget_account_id')->dropDownList(Account::listActiveAccounts(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'breakdown_account_id')->dropDownList(Account::listActiveBreakdownAccounts(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'contract_account_id')->dropDownList(Account::listActiveContractAccounts(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

    <H2>Draw Info</H2><!-- CHANGED MVW 03/08/14 -->

		<?= $form->field($model, 'project_documents_picklist_id')->dropDownList(Custom::picklist('Documents', 'is_project'),['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'percent_retainage')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'percent_variance')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'ref_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'date_ref')->widget(DatePicker::classname(), [
      // 'name' => 'date_received'
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
    ]); ?>

		<?= $form->field($model, 'date_requested')->widget(DatePicker::classname(), [
      // 'name' => 'date_received'
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
    ]); ?>

		<?= $form->field($model, 'date_received')->widget(DatePicker::classname(), [
      // 'name' => 'date_received'
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
    ]); ?>

		<?= $form->field($model, 'revision')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'retainage')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'net_amount')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'completed')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'previous_payment')->textInput(['maxlength' => 19]) ?>

    <H2>Payment Info</H2><!-- CHANGED MVW 03/08/14 -->

		<?= $form->field($model, 'provider_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'date_paid')->widget(DatePicker::classname(), [
      // 'name' => 'date_received'
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
    ]); ?>

		<?= $form->field($model, 'check_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'gl_code_id')->dropDownList(Code::listActiveGlCodes(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>

    <H2>Inspection Info</H2><!-- CHANGED MVW 03/08/14 -->

		<?= $form->field($model, 'inspector_entity_id')->dropDownList(Entity::listActiveEntities(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14. //FIXME Should come from Contact List of Providers ?>

		<?= $form->field($model, 'route_project_id')->dropDownList(Project::listActiveProjects(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'date_inspected')->widget(DatePicker::classname(), [
      // 'name' => 'date_received'
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
    ]); ?>

		<?= $form->field($model, 'percent_previous')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'percent_current')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'comment_inspection')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'is_reported')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_bold')->checkbox() //CHANGED MVW 03/08/14 ?>

    <!--<H2>Financial Info</H2>--><!-- CHANGED MVW 03/08/14 -->

    <!-- <?= $form->field($model, 'owner_entity_id')->dropDownList(Entity::listActiveEntities(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?> -->

    <!-- <?= $form->field($model, 'is_asset')->checkbox() //CHANGED MVW 03/08/14 ?> -->

    <!-- <?= $form->field($model, 'is_liability')->checkbox() //CHANGED MVW 03/08/14 ?> -->

    <!-- <?= $form->field($model, 'is_paid_by_close')->checkbox() //CHANGED MVW 03/08/14 ?> -->

    <!-- <?= $form->field($model, 'address_id')->dropDownList(Address::listActiveAddresses(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?> -->

    <!-- <?= $form->field($model, 'date_maturity')->widget(DatePicker::classname(), [ 
      // 'name' => 'date_received'
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
    ]); ?>-->

    <!-- <?= $form->field($model, 'rate_interest')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'payment_min')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'months_to_pay')->textInput() ?> -->

    <!-- <?= $form->field($model, 'year')->textInput(['maxlength' => 45]) ?> -->

    <!-- <?= $form->field($model, 'make')->textInput(['maxlength' => 45]) ?> -->

    <!-- <?= $form->field($model, 'model')->textInput(['maxlength' => 45]) ?> -->

    <H2>System Info</H2><!-- CHANGED MVW 03/08/14 -->

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>
 
		<?= $form->field($model, 'created_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'create_time')->textInput() //FIXME Autoupdate ?>

		<?= $form->field($model, 'updated_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'update_time')->textInput() //FIXME Autoupdate ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
