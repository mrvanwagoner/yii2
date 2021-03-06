<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\TaskRecurrenceSearch $searchModel
 */

$this->title = 'Task Recurrences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-recurrence-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Task Recurrence', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'is_active',
			'task_id',
			'campaign_id',
			'schedule_picklist_id',
			// 'project_term_picklist_id',
			// 'frequency',
			// 'week_period_picklist_id',
			// 'sun',
			// 'mon',
			// 'tue',
			// 'wed',
			// 'thu',
			// 'fri',
			// 'sat',
			// 'target_picklist_id',
			// '1',
			// '2',
			// '3',
			// '4',
			// '5',
			// '6',
			// '7',
			// '8',
			// '9',
			// '10',
			// '11',
			// '12',
			// '13',
			// '14',
			// '15',
			// '16',
			// '17',
			// '18',
			// '19',
			// '20',
			// '21',
			// '22',
			// '23',
			// '24',
			// '25',
			// '26',
			// '27',
			// '28',
			// '29',
			// '30',
			// '31',
			// 'month_period_picklist_id',
			// 'jan',
			// 'feb',
			// 'mar',
			// 'apr',
			// 'may',
			// 'jun',
			// 'jul',
			// 'aug',
			// 'sep',
			// 'oct',
			// 'nov',
			// 'dec',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
