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

	<?php echo GridView::widget([ //CHANGED MVW 03/10/14: See http://yii2-api.yupe.ru/class-yii.grid.GridView.html#$caption
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
    'tableOptions'=>['class'=>'table table-condensed table table-striped table-bordered'], //CHANGED MVW 03/10/14: 'table table-condensed', 'table table-striped', 'table-bordered'
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

      // 'id',
			'is_active',
      // 'tenant_id',
      // 'tenant_dbu',
			'type',
      'account_number',
      // 'date_established',
      'description',
      'location',
			// 'account_picklist_id',
			// 'transaction_status_picklist_id',
      'parent_account_id',
      // 'is_track_transactions',
			// 'provider_entity_id',
			// 'gl_code_id',
			// 'project_id',
			// 'ref_number',
			// 'date_ref',
			// 'budget_impact',
			// 'gross_amount',
			// 'adjustment',
			// 'net_amount',
			// 'is_reported',
			// 'comment_budget:ntext',
			// 'is_bold',
			// 'beginning_balance',
			// 'current_balance',
			// 'is_asset',
			// 'is_liability',
			// 'date_maturity',
			// 'face_amount',
			// 'current_value',
			// 'address_id',
			// 'is_paid_by_close',
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
      "date_established:date",
      // "is_track_transactions:checkbox", //CHANGED MVW 03/10/14: Formats: text, currency
		],
	]); ?>

</div>
