<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Formula $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="formula-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'unit_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_residential')->textInput() ?>

		<?= $form->field($model, 'is_commercial')->textInput() ?>

		<?= $form->field($model, 'is_template')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'formula')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'percent_variance')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
