<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\Account $model
 */

$this->title = $model->description; //CHANGED MVW 03/20/14: from id
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

	<?php echo DetailView::widget([ //CHANGED MVW 03/22/14
		'model' => $model,
		'attributes' => [
			'id',
			'is_active',
      // 'tenant_id',
      // 'tenant_dbu',
			'project.description',
			'type',
			'account_number',
			'craft_number',
			'client_number',
			'date_established',
			'description',
			'location',
			'original_amount',
			'budget_impact',
			'costCode.code_number',
			'costCode.description',
			'accountPicklist.description',
			'transactionStatusPicklist.description',
			'comment_budget:ntext',
			'is_estimate',
			'is_track_draws',
			'is_track_transactions',
			'analyze',
			'budgetAccount.description',
			'breakdownAccount.description',
			'contractAccount.description',
			'projectDocumentsPicklist.description',
			'percent_retainage',
			'percent_variance',
			'ref_number',
			'date_ref',
			'date_requested',
			'date_received',
			'revision',
			'retainage',
			'net_amount',
			'completed',
			'previous_payment',
			'providerEntity.fullName',
			'drawAccount.description',
			'date_paid',
			'check_number',
			'glCode.code_number',
			'glCode.description',
			'inspectorEntity.fullName',
			'routeProject.description',
			'date_inspected',
			'percent_previous',
			'percent_current',
			'comment_inspection:ntext',
			'is_reported',
			'is_bold',
			'ownerEntity.fullName',
			'is_asset',
			'is_liability',
			'is_paid_by_close',
			'address.fullAddress',
			'date_maturity',
			'rate_interest',
			'payment_min',
			'months_to_pay',
			'year',
			'make',
			'model',
			'note:ntext',
			'create_time',
			'createdByEntity.fullName',
			'update_time',
			'updatedByEntity.fullName',
		],
	]); ?>

</div>
