<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\CampaignStepSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="campaign-step-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'campaign_id') ?>

		<?= $form->field($model, 'step_number') ?>

		<?= $form->field($model, 'description') ?>

		<?php // echo $form->field($model, 'project_task_picklist_id') ?>

		<?php // echo $form->field($model, 'status_picklist_id') ?>

		<?php // echo $form->field($model, 'perform') ?>

		<?php // echo $form->field($model, 'period_picklist_id') ?>

		<?php // echo $form->field($model, 'order') ?>

		<?php // echo $form->field($model, 'from') ?>

		<?php // echo $form->field($model, 'specific_date') ?>

		<?php // echo $form->field($model, 'document_id') ?>

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
