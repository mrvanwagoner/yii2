<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Correspondence $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="correspondence-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'task_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'from_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'to_entities')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'cc_entities')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'bcc_entities')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'subject')->textInput(['maxlength' => 255]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
