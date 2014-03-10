<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Entity;

/**
 * @var yii\web\View $this
 * @var backend\models\Picklist $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="picklist-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->checkbox() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'code_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_tenant')->checkbox() ?>

		<?= $form->field($model, 'is_company')->checkbox() ?>

		<?= $form->field($model, 'is_person')->checkbox() ?>

		<?= $form->field($model, 'is_role')->checkbox() ?>

		<?= $form->field($model, 'is_customer')->checkbox() ?>

		<?= $form->field($model, 'is_provider')->checkbox() ?>

		<?= $form->field($model, 'is_license')->checkbox() ?>

		<?= $form->field($model, 'is_transaction')->checkbox() ?>

		<?= $form->field($model, 'is_project')->checkbox() ?>

		<?= $form->field($model, 'is_loan')->checkbox() ?>

		<?= $form->field($model, 'is_commercial')->checkbox() ?>

		<?= $form->field($model, 'is_residential')->checkbox() ?>

		<?= $form->field($model, 'created_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'updated_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

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
