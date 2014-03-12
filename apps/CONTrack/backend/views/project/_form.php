<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Project $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="project-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_template')->textInput() ?>

		<?= $form->field($model, 'is_route')->textInput() ?>

		<?= $form->field($model, 'address_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'construction_classification_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'project_status_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_track_loan')->textInput() ?>

		<?= $form->field($model, 'is_track_purchase')->textInput() ?>

		<?= $form->field($model, 'is_track_cost')->textInput() ?>

		<?= $form->field($model, 'is_track_compare')->textInput() ?>

		<?= $form->field($model, 'is_track_qto')->textInput() ?>

		<?= $form->field($model, 'is_track_schedule')->textInput() ?>

		<?= $form->field($model, 'is_track_draw')->textInput() ?>

		<?= $form->field($model, 'is_track_lien')->textInput() ?>

		<?= $form->field($model, 'is_track_progress')->textInput() ?>

		<?= $form->field($model, 'is_track_quality')->textInput() ?>

		<?= $form->field($model, 'sponsor_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'client_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'lead_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'project_document_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'need_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'purpose_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'loan_classification_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'loan_term')->textInput() ?>

		<?= $form->field($model, 'loan_term_remaining')->textInput() ?>

		<?= $form->field($model, 'is_first_time')->textInput() ?>

		<?= $form->field($model, 'is_first_position')->textInput() ?>

		<?= $form->field($model, 'is_long_term')->textInput() ?>

		<?= $form->field($model, 'is_waive_escrow')->textInput() ?>

		<?= $form->field($model, 'is_payment_fixed')->textInput() ?>

		<?= $form->field($model, 'is_current_on_payments')->textInput() ?>

		<?= $form->field($model, 'is_pmi')->textInput() ?>

		<?= $form->field($model, 'is_fsbo')->textInput() ?>

		<?= $form->field($model, 'is_listing_expired')->textInput() ?>

		<?= $form->field($model, 'work_week')->textInput() ?>

		<?= $form->field($model, 'work_day')->textInput() ?>

		<?= $form->field($model, 'template_project_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'property_use')->textInput() ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'appraised_value')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'loan_amount')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'loan_balance')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'rate_interest')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'points')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'loan_fees')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'down_payment')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'payment_max')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'payment_pi')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'payment_total')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'equity_property')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'subordination_amount')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cash_out_amount')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'tax_property')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'hazard_insurance')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'amount_pmi')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'selling_price')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'purchase_price')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'gross_rent')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'rate_occupancy')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'cost_land')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_site')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_gc')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_building')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_soft')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_ti')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_ffe')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'location_factor')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'inflation_factor')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'sf_cost_site')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'sf_cost_building')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'sf_cost_ti')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'sf_cost_total')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'percent_gc')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'percent_permit')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'percent_design')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'percent_bond')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'percent_liability')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'percent_contingency')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'percent_fee')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'percent_soft')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'date_close')->textInput() ?>

		<?= $form->field($model, 'date_maturity')->textInput() ?>

		<?= $form->field($model, 'date_reprice')->textInput() ?>

		<?= $form->field($model, 'date_balloon')->textInput() ?>

		<?= $form->field($model, 'date_end_pmi')->textInput() ?>

		<?= $form->field($model, 'date_purchase')->textInput() ?>

		<?= $form->field($model, 'date_listing')->textInput() ?>

		<?= $form->field($model, 'date_start')->textInput() ?>

		<?= $form->field($model, 'date_finish')->textInput() ?>

		<?= $form->field($model, 'project_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
