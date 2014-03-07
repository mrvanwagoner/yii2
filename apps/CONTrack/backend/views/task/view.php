<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\Task $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-view">

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
			'entity_id',
			'type',
			'description',
			'task_picklist_id',
			'priority',
			'start',
			'finish',
			'duration',
			'is_done',
			'tags',
			'assigned_to_entity_id',
			'supervisor_entity_id',
			'customer_entity_id',
			'supplier_entity_id',
			'person_task_picklist_id',
			'project_id',
			'location',
			'project_status_picklist_id',
			'code_id',
			'late_start',
			'late_finish',
			'float',
			'actual_start',
			'actual_finish',
			'actual_duration',
			'percent_complete',
			'campaign_id',
			'campaign_step_id',
			'note:ntext',
			'create_time',
			'created_by_entity_id',
			'update_time',
			'updated_by_entity_id',
		],
	]); ?>

</div>
