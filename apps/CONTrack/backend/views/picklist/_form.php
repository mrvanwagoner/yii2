<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Picklist $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="picklist-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'code_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_tenant')->textInput() ?>

		<?= $form->field($model, 'is_company')->textInput() ?>

		<?= $form->field($model, 'is_person')->textInput() ?>

		<?= $form->field($model, 'is_role')->textInput() ?>

		<?= $form->field($model, 'is_customer')->textInput() ?>

		<?= $form->field($model, 'is_provider')->textInput() ?>

		<?= $form->field($model, 'is_license')->textInput() ?>

		<?= $form->field($model, 'is_transaction')->textInput() ?>

		<?= $form->field($model, 'is_project')->textInput() ?>

		<?= $form->field($model, 'is_loan')->textInput() ?>

		<?= $form->field($model, 'is_commercial')->textInput() ?>

		<?= $form->field($model, 'is_residential')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) ?>

		<?= $form->field($model, 'type')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'location')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'hierarchy')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'sort_order')->textInput(['maxlength' => 255]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
