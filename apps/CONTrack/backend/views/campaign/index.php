<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\CampaignSearch $searchModel
 */

$this->title = 'Campaigns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Campaign', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'tableOptions'=>['class'=>'table table-condensed table table-striped table-bordered table-hover'],
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'is_active',
			'tenant_id',
			'tenant_dbu',
			'campaign_picklist_id',
			// 'description',
			// 'is_contractor_campaign',
			// 'is_lender_campaign',
			// 'is_mortgage_campaign',
			// 'is_realtor_campaign',
			// 'is_service_campaign',
			// 'originating_entity_id',
			// 'is_project_based',
			// 'recipient_entity_ids:ntext',
			// 'start_time',
			// 'project_status_picklist_id',
			// 'stop_time',
			// 'recur_every',
			// 'period_picklist_id',
			// 'number_of_occurences',
			// 'sent_occurences',
			// 'last_sent_time',
			// 'current_step',
			// 'x_filter_id',
			// 'x_search_condtions:ntext',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
