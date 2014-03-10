<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\TaskRecurrenceSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="task-recurrence-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'task_id') ?>

		<?= $form->field($model, 'campaign_id') ?>

		<?= $form->field($model, 'schedule_picklist_id') ?>

		<?php // echo $form->field($model, 'project_term_picklist_id') ?>

		<?php // echo $form->field($model, 'frequency') ?>

		<?php // echo $form->field($model, 'week_period_picklist_id') ?>

		<?php // echo $form->field($model, 'sun') ?>

		<?php // echo $form->field($model, 'mon') ?>

		<?php // echo $form->field($model, 'tue') ?>

		<?php // echo $form->field($model, 'wed') ?>

		<?php // echo $form->field($model, 'thu') ?>

		<?php // echo $form->field($model, 'fri') ?>

		<?php // echo $form->field($model, 'sat') ?>

		<?php // echo $form->field($model, 'target_picklist_id') ?>

		<?php // echo $form->field($model, '1') ?>

		<?php // echo $form->field($model, '2') ?>

		<?php // echo $form->field($model, '3') ?>

		<?php // echo $form->field($model, '4') ?>

		<?php // echo $form->field($model, '5') ?>

		<?php // echo $form->field($model, '6') ?>

		<?php // echo $form->field($model, '7') ?>

		<?php // echo $form->field($model, '8') ?>

		<?php // echo $form->field($model, '9') ?>

		<?php // echo $form->field($model, '10') ?>

		<?php // echo $form->field($model, '11') ?>

		<?php // echo $form->field($model, '12') ?>

		<?php // echo $form->field($model, '13') ?>

		<?php // echo $form->field($model, '14') ?>

		<?php // echo $form->field($model, '15') ?>

		<?php // echo $form->field($model, '16') ?>

		<?php // echo $form->field($model, '17') ?>

		<?php // echo $form->field($model, '18') ?>

		<?php // echo $form->field($model, '19') ?>

		<?php // echo $form->field($model, '20') ?>

		<?php // echo $form->field($model, '21') ?>

		<?php // echo $form->field($model, '22') ?>

		<?php // echo $form->field($model, '23') ?>

		<?php // echo $form->field($model, '24') ?>

		<?php // echo $form->field($model, '25') ?>

		<?php // echo $form->field($model, '26') ?>

		<?php // echo $form->field($model, '27') ?>

		<?php // echo $form->field($model, '28') ?>

		<?php // echo $form->field($model, '29') ?>

		<?php // echo $form->field($model, '30') ?>

		<?php // echo $form->field($model, '31') ?>

		<?php // echo $form->field($model, 'month_period_picklist_id') ?>

		<?php // echo $form->field($model, 'jan') ?>

		<?php // echo $form->field($model, 'feb') ?>

		<?php // echo $form->field($model, 'mar') ?>

		<?php // echo $form->field($model, 'apr') ?>

		<?php // echo $form->field($model, 'may') ?>

		<?php // echo $form->field($model, 'jun') ?>

		<?php // echo $form->field($model, 'jul') ?>

		<?php // echo $form->field($model, 'aug') ?>

		<?php // echo $form->field($model, 'sep') ?>

		<?php // echo $form->field($model, 'oct') ?>

		<?php // echo $form->field($model, 'nov') ?>

		<?php // echo $form->field($model, 'dec') ?>

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
