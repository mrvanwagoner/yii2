<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Document $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="document-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'document_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_file')->textInput() ?>

		<?= $form->field($model, 'file_size')->textInput() ?>

		<?= $form->field($model, 'is_email')->textInput() ?>

		<?= $form->field($model, 'is_mail_merge')->textInput() ?>

		<?= $form->field($model, 'is_deliverable')->textInput() ?>

		<?= $form->field($model, 'is_provided')->textInput() ?>

		<?= $form->field($model, 'is_reviewed')->textInput() ?>

		<?= $form->field($model, 'is_endorsed')->textInput() ?>

		<?= $form->field($model, 'is_conforming')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'date_document')->textInput() ?>

		<?= $form->field($model, 'date_received')->textInput() ?>

		<?= $form->field($model, 'file_update_time')->textInput() ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) ?>

		<?= $form->field($model, 'document_number')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'file_name')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'file_content_type')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'subject')->textInput(['maxlength' => 255]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
