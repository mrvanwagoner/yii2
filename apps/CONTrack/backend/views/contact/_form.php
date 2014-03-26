<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\Custom;//CHANGED MVW 03/06/14
use backend\models\Address;//CHANGED MVW 03/08/14
use backend\models\Contact;//CHANGED MVW 03/08/14
use backend\models\Entity; //CHANGED MVW 03/08/14
use backend\models\Phone; //CHANGED MVW 03/20/14
use backend\models\Email; //CHANGED MVW 03/20/14
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var backend\models\Contact $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="contact-form col-lg-12">

	<?php $form = ActiveForm::begin(); ?>
    
    <div class="panel panel-default">   
    	<div class="panel-heading">
            <i class="fa fa-user fa-fw"></i> Update Contact
            	<div class="pull-right">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul role="menu" class="dropdown-menu pull-right">
                                        <li><a href="#">Budget</a>
                                        </li>
                                        <li><a href="#">Draws</a>
                                        </li>
                                        <li><a href="/admin/contact/">Contacts</a></li>
                                        <li><a href="/admin/project/">Project</a>
                                        </li>
                                    </ul>
                                  </div>
                       </div>
    			</div><!-- end panel-heading -->

 	 <div class="panel-body">
<div class="contact-form col-lg-6">



    <!-- <?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) //FIXME Only visible to System Admin and System Staff ?> -->

    <!-- <?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) //FIXME Only visible to System Admin and System Staff ?> -->

		<?= $form->field($model, 'entity_id')->dropDownList(Entity::listActiveEntities(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'type')->dropDownList(Custom::listEnum($model, 'type'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'type_picklist_id')->dropDownList(Custom::picklist('Type', null),['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'status_picklist_id')->dropDownList(Custom::picklist('Status', null),['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'account_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'is_active')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_employee')->checkbox() //CHANGED MVW 03/08/14 ?>

</div><!-- emd col-lg-6 -->
<div class="contact-form col-lg-6">

		<?= $form->field($model, 'address_id')->dropDownList(Address::listActiveAddresses(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'phone_id')->dropDownList(Phone::listActivePhones(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/20/14 ?>

		<?= $form->field($model, 'mobile_phone_id')->dropDownList(Phone::listActiveMobiles(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/20/14 ?>

		<?= $form->field($model, 'fax_phone_id')->dropDownList(Phone::listActiveFaxes(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/20/14 ?>

		<?= $form->field($model, 'email_id')->dropDownList(Email::listActiveEmails(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/20/14 ?>

		<?= $form->field($model, 'contact_method_person_task_picklist_id')->dropDownList(Custom::picklist('Task', 'is_person'),['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>


		<?= $form->field($model, 'is_ok_to_email')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_ok_to_text')->checkbox() //CHANGED MVW 03/08/14 ?>

    <!-- <?= $form->field($model, 'sponsor_entity_id')->textInput(['maxlength' => 11]) ?> -->

    <!-- <?= $form->field($model, 'is_preferred')->textInput() ?> -->



    <!-- <?= $form->field($model, 'sales_rep_entity_id')->textInput(['maxlength' => 11]) ?> -->

    <!-- <?= $form->field($model, 'date_sales_rep_assigned')->textInput() ?> -->

    <!-- <?= $form->field($model, 'service_rep_entity_id')->textInput(['maxlength' => 11]) ?> -->

    <!-- <?= $form->field($model, 'date_service_rep_assigned')->textInput() ?> -->

    <!-- <?= $form->field($model, 'credit_limit')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'provider_terms_picklist_id')->dropDownList(Custom::picklist('Terms', 'is_provider'),['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?> -->

    <!-- <?= $form->field($model, 'payment_method_provider_task_picklist_id')->textInput(['maxlength' => 11]) ?> -->

    <!--<H2>Customer Info</H2>--> <!-- CHANGED MVW 03/20/14 -->

    <!-- <?= $form->field($model, 'lead_picklist_id')->textInput(['maxlength' => 11]) ?> -->

    <!-- <?= $form->field($model, 'refer_score')->textInput() ?> -->

    <!-- <?= $form->field($model, 'refer_comment')->textInput(['maxlength' => 255]) ?> -->

    <!-- <?= $form->field($model, 'is_named_insured')->textInput() ?> -->

    <!-- <?= $form->field($model, 'date_first_contact')->textInput() ?> -->

    <!-- <?= $form->field($model, 'percent_close_out')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'comment_differentiation')->textInput(['maxlength' => 255]) ?> -->

    <!-- <?= $form->field($model, 'builder_type')->dropDownList(Custom::listEnum($model, 'builder_type'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?> -->

    <!-- <?= $form->field($model, 'Jobs_per_year')->textInput() ?> -->

    <!-- <?= $form->field($model, 'avg_value')->textInput(['maxlength' => 255]) ?> -->

    <!-- <?= $form->field($model, 'is_spec_builder')->textInput() ?> -->

    <!-- <?= $form->field($model, 'number_of_models')->textInput() ?> -->

    <!-- <?= $form->field($model, 'loan_in_name')->dropDownList(Custom::listEnum($model, 'loan_in_name'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?> -->

    <!-- <?= $form->field($model, 'current_lender_source')->textInput(['maxlength' => 255]) ?> -->

    <!-- <?= $form->field($model, 'terms_points')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'terms_rate')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'sales_source')->textInput(['maxlength' => 255]) ?> -->

    <!--<H2>Employee Info</H2>--> <!-- CHANGED MVW 03/20/14 -->

    <!-- <?= $form->field($model, 'trainer_entity_id')->textInput(['maxlength' => 11]) ?> -->

    <!-- <?= $form->field($model, 'is_full_time')->textInput() ?> -->

    <!-- <?= $form->field($model, 'date_hire')->textInput() ?> -->

    <!-- <?= $form->field($model, 'date_modified')->textInput() ?> -->

    <!-- <?= $form->field($model, 'date_rehire')->textInput() ?> -->

    <!-- <?= $form->field($model, 'date_terminated')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_eligible_for_rehire')->textInput() ?> -->

    <!-- <?= $form->field($model, 'salary')->textInput(['maxlength' => 255]) ?> -->

    <!-- <?= $form->field($model, 'wage')->textInput(['maxlength' => 255]) ?> -->

    <!-- <?= $form->field($model, 'commission_percent')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'commission_amount')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'grade')->textInput(['maxlength' => 11]) ?> -->

    <!-- <?= $form->field($model, 'date_grade_assigned')->textInput() ?> -->

    <!--<H2>System Info</H2>--><!-- CHANGED MVW 03/08/14 -->

		<!--<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>-->
 
		<!--<?= $form->field($model, 'created_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'create_time')->textInput() //FIXME Autoupdate ?>

		<?= $form->field($model, 'updated_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'update_time')->textInput() //FIXME Autoupdate ?>-->
        </div><!-- emd col-lg-6 -->

		<div class="form-group pull-right">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

            	</div><!-- end panel-body -->
   </div><!-- end panel --> 

 
</div><!-- end col-lg-6 --> 
