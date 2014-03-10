<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\TaskSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="task-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'tenant_id') ?>

		<?= $form->field($model, 'tenant_dbu') ?>

		<?= $form->field($model, 'entity_id') ?>

		<?php // echo $form->field($model, 'type') ?>

		<?php // echo $form->field($model, 'description') ?>

		<?php // echo $form->field($model, 'task_picklist_id') ?>

		<?php // echo $form->field($model, 'priority') ?>

		<?php // echo $form->field($model, 'start') ?>

		<?php // echo $form->field($model, 'finish') ?>

		<?php // echo $form->field($model, 'duration') ?>

		<?php // echo $form->field($model, 'is_done') ?>

		<?php // echo $form->field($model, 'tags') ?>

		<?php // echo $form->field($model, 'assigned_to_entity_id') ?>

		<?php // echo $form->field($model, 'supervisor_entity_id') ?>

		<?php // echo $form->field($model, 'customer_entity_id') ?>

		<?php // echo $form->field($model, 'supplier_entity_id') ?>

		<?php // echo $form->field($model, 'person_task_picklist_id') ?>

		<?php // echo $form->field($model, 'project_id') ?>

		<?php // echo $form->field($model, 'location') ?>

		<?php // echo $form->field($model, 'project_status_picklist_id') ?>

		<?php // echo $form->field($model, 'code_id') ?>

		<?php // echo $form->field($model, 'late_start') ?>

		<?php // echo $form->field($model, 'late_finish') ?>

		<?php // echo $form->field($model, 'float') ?>

		<?php // echo $form->field($model, 'actual_start') ?>

		<?php // echo $form->field($model, 'actual_finish') ?>

		<?php // echo $form->field($model, 'actual_duration') ?>

		<?php // echo $form->field($model, 'percent_complete') ?>

		<?php // echo $form->field($model, 'campaign_id') ?>

		<?php // echo $form->field($model, 'campaign_step_id') ?>

		<?php // echo $form->field($model, 'note') ?>

		<?php // echo $form->field($model, 'create_time') ?>

		<?php // echo $form->field($model, 'created_by_entity_id') ?>

		<?php // echo $form->field($model, 'update_time') ?>

		<?php // echo $form->field($model, 'updated_by_entity_id') ?>

		<div class="form-group">
			<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
			<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
