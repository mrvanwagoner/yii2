<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Phone $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="phone-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'is_text')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'prefix')->textInput(['maxlength' => 10]) ?>

		<?= $form->field($model, 'phone')->textInput(['maxlength' => 10]) ?>

		<?= $form->field($model, 'extension')->textInput(['maxlength' => 10]) ?>

		<?= $form->field($model, 'phone_carrier')->textInput(['maxlength' => 255]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
