<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Role $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="role-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'contact_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'role_type_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_enabled')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'last_login_time')->textInput() ?>

		<?= $form->field($model, 'x_login_time_out')->textInput() ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
