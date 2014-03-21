<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\CampaignStepSearch $searchModel
 */

$this->title = 'Campaign Steps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-step-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Campaign Step', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'tableOptions'=>['class'=>'table table-condensed table table-striped table-bordered table-hover'],
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'is_active',
			'campaign_id',
			'step_number',
			'description:ntext',
			// 'project_task_picklist_id',
			// 'status_picklist_id',
			// 'perform',
			// 'period_picklist_id',
			// 'order',
			// 'from',
			// 'specific_date',
			// 'document_id',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
