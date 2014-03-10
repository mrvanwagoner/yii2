<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\ProjectTeam $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="project-team-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'project_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'type_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_client')->textInput() ?>

		<?= $form->field($model, 'is_partner')->textInput() ?>

		<?= $form->field($model, 'is_sales_rep')->textInput() ?>

		<?= $form->field($model, 'is_schedule_visible')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'service_status')->textInput(['maxlength' => 255]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
