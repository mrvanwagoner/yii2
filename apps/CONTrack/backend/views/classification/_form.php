<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Classification $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="classification-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_commercial')->textInput() ?>

		<?= $form->field($model, 'is_residential')->textInput() ?>

		<?= $form->field($model, 'term')->textInput() ?>

		<?= $form->field($model, 'amortization')->textInput() ?>

		<?= $form->field($model, 'is_long_term')->textInput() ?>

		<?= $form->field($model, 'is_interest_only')->textInput() ?>

		<?= $form->field($model, 'is_rate_fixed')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'cost_sf_site')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_sf_building')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_sf_gc')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_sf_total')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'interest_rate')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'points')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'fees')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) ?>

		<?= $form->field($model, 'hierarchy')->textInput(['maxlength' => 5]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
