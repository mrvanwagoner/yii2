<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\TaskPredecessorSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="task-predecessor-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'task_id') ?>

		<?= $form->field($model, 'predecessor_task_id') ?>

		<?= $form->field($model, 'predecessor') ?>

		<?php // echo $form->field($model, 'restraint') ?>

		<?php // echo $form->field($model, 'lag') ?>

		<?php // echo $form->field($model, 'start_day') ?>

		<?php // echo $form->field($model, 'end_day') ?>

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
