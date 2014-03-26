<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var backend\models\TaskRecurrence $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="task-recurrence-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'task_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'campaign_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'schedule_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'project_term_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'frequency')->textInput() ?>

		<?= $form->field($model, 'week_period_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'sun')->textInput() ?>

		<?= $form->field($model, 'mon')->textInput() ?>

		<?= $form->field($model, 'tue')->textInput() ?>

		<?= $form->field($model, 'wed')->textInput() ?>

		<?= $form->field($model, 'thu')->textInput() ?>

		<?= $form->field($model, 'fri')->textInput() ?>

		<?= $form->field($model, 'sat')->textInput() ?>

		<?= $form->field($model, 'target_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, '1')->textInput() ?>

		<?= $form->field($model, '2')->textInput() ?>

		<?= $form->field($model, '3')->textInput() ?>

		<?= $form->field($model, '4')->textInput() ?>

		<?= $form->field($model, '5')->textInput() ?>

		<?= $form->field($model, '6')->textInput() ?>

		<?= $form->field($model, '7')->textInput() ?>

		<?= $form->field($model, '8')->textInput() ?>

		<?= $form->field($model, '9')->textInput() ?>

		<?= $form->field($model, '10')->textInput() ?>

		<?= $form->field($model, '11')->textInput() ?>

		<?= $form->field($model, '12')->textInput() ?>

		<?= $form->field($model, '13')->textInput() ?>

		<?= $form->field($model, '14')->textInput() ?>

		<?= $form->field($model, '15')->textInput() ?>

		<?= $form->field($model, '16')->textInput() ?>

		<?= $form->field($model, '17')->textInput() ?>

		<?= $form->field($model, '18')->textInput() ?>

		<?= $form->field($model, '19')->textInput() ?>

		<?= $form->field($model, '20')->textInput() ?>

		<?= $form->field($model, '21')->textInput() ?>

		<?= $form->field($model, '22')->textInput() ?>

		<?= $form->field($model, '23')->textInput() ?>

		<?= $form->field($model, '24')->textInput() ?>

		<?= $form->field($model, '25')->textInput() ?>

		<?= $form->field($model, '26')->textInput() ?>

		<?= $form->field($model, '27')->textInput() ?>

		<?= $form->field($model, '28')->textInput() ?>

		<?= $form->field($model, '29')->textInput() ?>

		<?= $form->field($model, '30')->textInput() ?>

		<?= $form->field($model, '31')->textInput() ?>

		<?= $form->field($model, 'month_period_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'jan')->textInput() ?>

		<?= $form->field($model, 'feb')->textInput() ?>

		<?= $form->field($model, 'mar')->textInput() ?>

		<?= $form->field($model, 'apr')->textInput() ?>

		<?= $form->field($model, 'may')->textInput() ?>

		<?= $form->field($model, 'jun')->textInput() ?>

		<?= $form->field($model, 'jul')->textInput() ?>

		<?= $form->field($model, 'aug')->textInput() ?>

		<?= $form->field($model, 'sep')->textInput() ?>

		<?= $form->field($model, 'oct')->textInput() ?>

		<?= $form->field($model, 'nov')->textInput() ?>

		<?= $form->field($model, 'dec')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
