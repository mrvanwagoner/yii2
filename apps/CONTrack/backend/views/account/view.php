<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\Account $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?php echo Html::a('Delete', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => Yii::t('app', 'Are you sure to delete this item?'),
				'method' => 'post',
			],
		]); ?>
	</p>

	<?php echo DetailView::widget([
		'model' => $model,
		'attributes' => [
			'id',
			'is_active',
			'tenant_id',
			'tenant_dbu',
			'type',
			'account_number',
			'date_established',
			'description',
			'location',
			'account_picklist_id',
			'status_transaction_picklist_id',
			'parent_account_id',
			'is_track_transactions',
			'provider_entity_id',
			'gl_code_id',
			'project_id',
			'ref_number',
			'date_ref',
			'budget_impact',
			'gross_amount',
			'adjustment',
			'net_amount',
			'is_reported',
			'comment_budget:ntext',
			'is_bold',
			'beginning_balance',
			'current_balance',
			'is_asset',
			'is_liability',
			'date_maturity',
			'face_amount',
			'current_value',
			'address_id',
			'is_paid_by_close',
			'rate_interest',
			'payment_min',
			'months_to_pay',
			'year',
			'make',
			'model',
			'note:ntext',
			'create_time',
			'created_by_entity_id',
			'update_time',
			'updated_by_entity_id',
		],
	]); ?>

</div>
