<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\Campaign $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-view">

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
			'campaign_picklist_id',
			'description',
			'is_contractor_campaign',
			'is_lender_campaign',
			'is_mortgage_campaign',
			'is_realtor_campaign',
			'is_service_campaign',
			'originating_entity_id',
			'is_project_based',
			'recipient_entity_ids:ntext',
			'start_time',
			'project_status_picklist_id',
			'stop_time',
			'recur_every',
			'period_picklist_id',
			'number_of_occurences',
			'sent_occurences',
			'last_sent_time',
			'current_step',
			'x_filter_id',
			'x_search_condtions:ntext',
			'note:ntext',
			'create_time',
			'created_by_entity_id',
			'update_time',
			'updated_by_entity_id',
		],
	]); ?>

</div>
