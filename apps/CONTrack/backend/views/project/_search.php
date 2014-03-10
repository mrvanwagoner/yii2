<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\ProjectSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="project-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'tenant_id') ?>

		<?= $form->field($model, 'tenant_dbu') ?>

		<?= $form->field($model, 'type') ?>

		<?php // echo $form->field($model, 'is_template') ?>

		<?php // echo $form->field($model, 'is_route') ?>

		<?php // echo $form->field($model, 'project_number') ?>

		<?php // echo $form->field($model, 'description') ?>

		<?php // echo $form->field($model, 'address_id') ?>

		<?php // echo $form->field($model, 'construction_classification_id') ?>

		<?php // echo $form->field($model, 'project_status_picklist_id') ?>

		<?php // echo $form->field($model, 'is_track_loan') ?>

		<?php // echo $form->field($model, 'is_track_purchase') ?>

		<?php // echo $form->field($model, 'is_track_cost') ?>

		<?php // echo $form->field($model, 'is_track_compare') ?>

		<?php // echo $form->field($model, 'is_track_qto') ?>

		<?php // echo $form->field($model, 'is_track_schedule') ?>

		<?php // echo $form->field($model, 'is_track_draw') ?>

		<?php // echo $form->field($model, 'is_track_lien') ?>

		<?php // echo $form->field($model, 'is_track_completion') ?>

		<?php // echo $form->field($model, 'is_track_quality') ?>

		<?php // echo $form->field($model, 'sponsor_entity_id') ?>

		<?php // echo $form->field($model, 'client_entity_id') ?>

		<?php // echo $form->field($model, 'lead_picklist_id') ?>

		<?php // echo $form->field($model, 'need_picklist_id') ?>

		<?php // echo $form->field($model, 'purpose_picklist_id') ?>

		<?php // echo $form->field($model, 'property_use') ?>

		<?php // echo $form->field($model, 'loan_classification_id') ?>

		<?php // echo $form->field($model, 'appraised_value') ?>

		<?php // echo $form->field($model, 'loan_amount') ?>

		<?php // echo $form->field($model, 'loan_balance') ?>

		<?php // echo $form->field($model, 'loan_term') ?>

		<?php // echo $form->field($model, 'loan_term_remaining') ?>

		<?php // echo $form->field($model, 'rate_interest') ?>

		<?php // echo $form->field($model, 'points') ?>

		<?php // echo $form->field($model, 'loan_fees') ?>

		<?php // echo $form->field($model, 'date_close') ?>

		<?php // echo $form->field($model, 'date_maturity') ?>

		<?php // echo $form->field($model, 'date_reprice') ?>

		<?php // echo $form->field($model, 'date_balloon') ?>

		<?php // echo $form->field($model, 'is_first_time') ?>

		<?php // echo $form->field($model, 'is_first_position') ?>

		<?php // echo $form->field($model, 'is_long_term') ?>

		<?php // echo $form->field($model, 'is_waive_escrow') ?>

		<?php // echo $form->field($model, 'down_payment') ?>

		<?php // echo $form->field($model, 'payment_max') ?>

		<?php // echo $form->field($model, 'payment_pi') ?>

		<?php // echo $form->field($model, 'payment_total') ?>

		<?php // echo $form->field($model, 'is_payment_fixed') ?>

		<?php // echo $form->field($model, 'is_current_on_payments') ?>

		<?php // echo $form->field($model, 'equity_property') ?>

		<?php // echo $form->field($model, 'subordination_amount') ?>

		<?php // echo $form->field($model, 'cash_out_amount') ?>

		<?php // echo $form->field($model, 'tax_property') ?>

		<?php // echo $form->field($model, 'hazard_insurance') ?>

		<?php // echo $form->field($model, 'is_pmi') ?>

		<?php // echo $form->field($model, 'date_end_pmi') ?>

		<?php // echo $form->field($model, 'amount_pmi') ?>

		<?php // echo $form->field($model, 'date_purchase') ?>

		<?php // echo $form->field($model, 'selling_price') ?>

		<?php // echo $form->field($model, 'purchase_price') ?>

		<?php // echo $form->field($model, 'is_fsbo') ?>

		<?php // echo $form->field($model, 'date_listing') ?>

		<?php // echo $form->field($model, 'is_listing_expired') ?>

		<?php // echo $form->field($model, 'gross_rent') ?>

		<?php // echo $form->field($model, 'rate_occupancy') ?>

		<?php // echo $form->field($model, 'date_start') ?>

		<?php // echo $form->field($model, 'date_finish') ?>

		<?php // echo $form->field($model, 'work_week') ?>

		<?php // echo $form->field($model, 'work_day') ?>

		<?php // echo $form->field($model, 'cost_land') ?>

		<?php // echo $form->field($model, 'cost_site') ?>

		<?php // echo $form->field($model, 'cost_gc') ?>

		<?php // echo $form->field($model, 'cost_building') ?>

		<?php // echo $form->field($model, 'cost_soft') ?>

		<?php // echo $form->field($model, 'cost_ti') ?>

		<?php // echo $form->field($model, 'cost_ffe') ?>

		<?php // echo $form->field($model, 'location_factor') ?>

		<?php // echo $form->field($model, 'inflation_factor') ?>

		<?php // echo $form->field($model, 'sf_cost_site') ?>

		<?php // echo $form->field($model, 'sf_cost_building') ?>

		<?php // echo $form->field($model, 'sf_cost_ti') ?>

		<?php // echo $form->field($model, 'sf_cost_total') ?>

		<?php // echo $form->field($model, 'percent_gc') ?>

		<?php // echo $form->field($model, 'percent_permit') ?>

		<?php // echo $form->field($model, 'percent_design') ?>

		<?php // echo $form->field($model, 'percent_bond') ?>

		<?php // echo $form->field($model, 'percent_liability') ?>

		<?php // echo $form->field($model, 'percent_contingency') ?>

		<?php // echo $form->field($model, 'percent_fee') ?>

		<?php // echo $form->field($model, 'percent_soft') ?>

		<?php // echo $form->field($model, 'template_project_id') ?>

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
