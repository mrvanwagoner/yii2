<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\AccountSearch $searchModel
 */

$this->title = 'Accounts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Account', ['create'], ['class' => 'btn btn-success']) ?>
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
			'project_id',
			// 'type',
			// 'account_number',
			// 'craft_number',
			// 'client_number',
			// 'date_established',
			// 'description',
			// 'location',
			// 'original_amount',
			// 'budget_impact',
			// 'cost_code_id',
			// 'account_picklist_id',
			// 'transaction_status_picklist_id',
			// 'comment_budget:ntext',
			// 'is_estimate',
			// 'is_track_draws',
			// 'is_track_transactions',
			// 'analyze',
			// 'budget_account_id',
			// 'breakdown_account_id',
			// 'contract_account_id',
			// 'project_documents_picklist_id',
			// 'percent_retainage',
			// 'percent_variance',
			// 'ref_number',
			// 'date_ref',
			// 'date_requested',
			// 'date_received',
			// 'revision',
			// 'retainage',
			// 'net_amount',
			// 'completed',
			// 'previous_payment',
			// 'provider_entity_id',
			// 'draw_account_id',
			// 'date_paid',
			// 'check_number',
			// 'gl_code_id',
			// 'inspector_entity_id',
			// 'route_project_id',
			// 'date_inspected',
			// 'percent_previous',
			// 'percent_current',
			// 'comment_inspection:ntext',
			// 'is_reported',
			// 'is_bold',
			// 'owner_entity_id',
			// 'is_asset',
			// 'is_liability',
			// 'is_paid_by_close',
			// 'address_id',
			// 'date_maturity',
			// 'rate_interest',
			// 'payment_min',
			// 'months_to_pay',
			// 'year',
			// 'make',
			// 'model',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
