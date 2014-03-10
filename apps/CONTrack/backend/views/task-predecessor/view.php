<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\TaskPredecessor $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Task Predecessors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-predecessor-view">

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
			'task_id',
			'predecessor_task_id',
			'predecessor',
			'restraint',
			'lag',
			'start_day',
			'end_day',
			'create_time',
			'created_by_entity_id',
			'update_time',
			'updated_by_entity_id',
		],
	]); ?>

</div>
