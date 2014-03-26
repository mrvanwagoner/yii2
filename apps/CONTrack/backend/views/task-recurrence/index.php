<?php

use yii\helpers\Html;
/*use yii\grid\GridView;*/
use kartik\grid\GridView;

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
		'tableOptions'=>['class'=>'table table-condensed table table-striped table-bordered table-hover'],
		'panel' => [
		'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Project List</h3>',
		'type'=>'primary',
		'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Table', ['index'], ['class' => 'btn btn-info']),
		'showFooter'=>false],		
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			['attribute' => 'id', 'width' => '80px'],
[
    'class'=>'kartik\grid\BooleanColumn',
    'attribute'=>'is_active', 
],
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

			['class' => 'kartik\grid\ActionColumn', 'header'=>'Actions', 'width'=>'100px']
		],
	]); ?>

</div>
