<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\ProjectSearch $searchModel
 */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'is_active',
			'tenant_id',
			'tenant_dbu',
			'type',
			// 'is_template',
			// 'is_route',
			// 'project_number',
			// 'description',
			// 'address_id',
			// 'construction_classification_id',
			// 'project_status_picklist_id',
			// 'is_track_loan',
			// 'is_track_purchase',
			// 'is_track_cost',
			// 'is_track_compare',
			// 'is_track_qto',
			// 'is_track_schedule',
			// 'is_track_draw',
			// 'is_track_lien',
			// 'is_track_completion',
			// 'is_track_quality',
			// 'sponsor_entity_id',
			// 'client_entity_id',
			// 'lead_picklist_id',
			// 'need_picklist_id',
			// 'purpose_picklist_id',
			// 'property_use',
			// 'loan_classification_id',
			// 'appraised_value',
			// 'loan_amount',
			// 'loan_balance',
			// 'loan_term',
			// 'loan_term_remaining',
			// 'rate_interest',
			// 'points',
			// 'loan_fees',
			// 'date_close',
			// 'date_maturity',
			// 'date_reprice',
			// 'date_balloon',
			// 'is_first_time:datetime',
			// 'is_first_position',
			// 'is_long_term',
			// 'is_waive_escrow',
			// 'down_payment',
			// 'payment_max',
			// 'payment_pi',
			// 'payment_total',
			// 'is_payment_fixed',
			// 'is_current_on_payments',
			// 'equity_property',
			// 'subordination_amount',
			// 'cash_out_amount',
			// 'tax_property',
			// 'hazard_insurance',
			// 'is_pmi',
			// 'date_end_pmi',
			// 'amount_pmi',
			// 'date_purchase',
			// 'selling_price',
			// 'purchase_price',
			// 'is_fsbo',
			// 'date_listing',
			// 'is_listing_expired',
			// 'gross_rent',
			// 'rate_occupancy',
			// 'date_start',
			// 'date_finish',
			// 'work_week',
			// 'work_day',
			// 'cost_land',
			// 'cost_site',
			// 'cost_gc',
			// 'cost_building',
			// 'cost_soft',
			// 'cost_ti',
			// 'cost_ffe',
			// 'location_factor',
			// 'inflation_factor',
			// 'sf_cost_site',
			// 'sf_cost_building',
			// 'sf_cost_ti',
			// 'sf_cost_total',
			// 'percent_gc',
			// 'percent_permit',
			// 'percent_design',
			// 'percent_bond',
			// 'percent_liability',
			// 'percent_contingency',
			// 'percent_fee',
			// 'percent_soft',
			// 'template_project_id',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
