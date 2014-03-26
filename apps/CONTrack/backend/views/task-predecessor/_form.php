<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var backend\models\TaskPredecessor $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="task-predecessor-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'task_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'predecessor_task_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'lag')->textInput() ?>

		<?= $form->field($model, 'start_day')->textInput() ?>

		<?= $form->field($model, 'end_day')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'predecessor')->textInput() ?>

		<?= $form->field($model, 'restraint')->textInput() ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
