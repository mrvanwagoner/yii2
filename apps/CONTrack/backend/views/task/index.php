<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\TaskSearch $searchModel
 */

$this->title = 'Tasks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Task', ['create'], ['class' => 'btn btn-success']) ?>
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
			'entity_id',
			// 'type',
			// 'description',
			// 'task_picklist_id',
			// 'priority',
			// 'start',
			// 'finish',
			// 'duration',
			// 'is_done',
			// 'tags',
			// 'assigned_to_entity_id',
			// 'supervisor_entity_id',
			// 'customer_entity_id',
			// 'supplier_entity_id',
			// 'person_task_picklist_id',
			// 'project_id',
			// 'location',
			// 'project_status_picklist_id',
			// 'code_id',
			// 'late_start',
			// 'late_finish',
			// 'float',
			// 'actual_start',
			// 'actual_finish',
			// 'actual_duration',
			// 'percent_complete',
			// 'campaign_id',
			// 'campaign_step_id',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
