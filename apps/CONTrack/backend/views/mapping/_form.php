<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var backend\models\Mapping $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="mapping-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'lead_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_map_field')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'source_field')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) ?>

		<?= $form->field($model, 'description_field')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'map_to_table')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'map_to_field')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'type')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'import_function')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'record')->textInput(['maxlength' => 64]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
