<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\ContactSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="contact-search">

	<?php $form = ActiveForm::begin([ //CHANGED MVW 03/20/14
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

    <!-- <?= $form->field($model, 'tenant_id') ?> -->

    <!-- <?= $form->field($model, 'tenant_dbu') ?> -->

		<?= $form->field($model, 'entity_id') ?>

		<?php  echo $form->field($model, 'type') ?>

		<?php  echo $form->field($model, 'description') ?>

		<?php  echo $form->field($model, 'type_picklist_id') ?>

		<?php  echo $form->field($model, 'status_picklist_id') ?>

		<?php // echo $form->field($model, 'address_id') ?>

		<?php // echo $form->field($model, 'phone_id') ?>

		<?php // echo $form->field($model, 'mobile_phone_id') ?>

		<?php // echo $form->field($model, 'fax_phone_id') ?>

		<?php // echo $form->field($model, 'email_id') ?>

		<?php // echo $form->field($model, 'contact_method_person_task_picklist_id') ?>

		<?php // echo $form->field($model, 'is_employee') ?>

		<?php // echo $form->field($model, 'trainer_entity_id') ?>

		<?php // echo $form->field($model, 'is_full_time') ?>

		<?php // echo $form->field($model, 'date_hire') ?>

		<?php // echo $form->field($model, 'date_modified') ?>

		<?php // echo $form->field($model, 'date_rehire') ?>

		<?php // echo $form->field($model, 'date_terminated') ?>

		<?php // echo $form->field($model, 'is_eligible_for_rehire') ?>

		<?php // echo $form->field($model, 'salary') ?>

		<?php // echo $form->field($model, 'wage') ?>

		<?php // echo $form->field($model, 'commission_percent') ?>

		<?php // echo $form->field($model, 'commission_amount') ?>

		<?php // echo $form->field($model, 'grade') ?>

		<?php // echo $form->field($model, 'date_grade_assigned') ?>

		<?php // echo $form->field($model, 'sponsor_entity_id') ?>

		<?php // echo $form->field($model, 'is_preferred') ?>

		<?php // echo $form->field($model, 'account_number') ?>

		<?php // echo $form->field($model, 'sales_rep_entity_id') ?>

		<?php // echo $form->field($model, 'date_sales_rep_assigned') ?>

		<?php // echo $form->field($model, 'service_rep_entity_id') ?>

		<?php // echo $form->field($model, 'date_service_rep_assigned') ?>

		<?php // echo $form->field($model, 'lead_picklist_id') ?>

		<?php // echo $form->field($model, 'credit_limit') ?>

		<?php // echo $form->field($model, 'provider_terms_picklist_id') ?>

		<?php // echo $form->field($model, 'payment_method_provider_task_picklist_id') ?>

		<?php // echo $form->field($model, 'refer_score') ?>

		<?php // echo $form->field($model, 'refer_comment') ?>

		<?php // echo $form->field($model, 'is_named_insured') ?>

		<?php // echo $form->field($model, 'date_first_contact') ?>

		<?php // echo $form->field($model, 'percent_close_out') ?>

		<?php // echo $form->field($model, 'is_ok_to_email') ?>

		<?php // echo $form->field($model, 'is_ok_to_text') ?>

		<?php // echo $form->field($model, 'comment_differentiation') ?>

		<?php // echo $form->field($model, 'builder_type') ?>

		<?php // echo $form->field($model, 'Jobs_per_year') ?>

		<?php // echo $form->field($model, 'avg_value') ?>

		<?php // echo $form->field($model, 'is_spec_builder') ?>

		<?php // echo $form->field($model, 'number_of_models') ?>

		<?php // echo $form->field($model, 'loan_in_name') ?>

		<?php // echo $form->field($model, 'current_lender_source') ?>

		<?php // echo $form->field($model, 'terms_points') ?>

		<?php // echo $form->field($model, 'terms_rate') ?>

		<?php // echo $form->field($model, 'sales_source') ?>

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
