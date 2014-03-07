<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Relationship $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="relationship-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'child_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'division_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'supervisor_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_private')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
