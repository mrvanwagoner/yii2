<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var backend\models\ContactLog $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="contact-log-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'contact_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'contacted_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'contact_method_person_task_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_initial_contact')->textInput() ?>

		<?= $form->field($model, 'is_questionnaire_completed')->textInput() ?>

		<?= $form->field($model, 'is_status_completed')->textInput() ?>

		<?= $form->field($model, 'is_interested_in_one_close')->textInput() ?>

		<?= $form->field($model, 'is_interested_in_two_close')->textInput() ?>

		<?= $form->field($model, 'is_interested_in_spec')->textInput() ?>

		<?= $form->field($model, 'is_interested_in_kiosk')->textInput() ?>

		<?= $form->field($model, 'is_interested_in_mez')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'date_contact')->textInput() ?>

		<?= $form->field($model, 'date_to_follow_up')->textInput() ?>

		<?= $form->field($model, 'date_entered')->textInput() ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'comment')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'referred_by')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'ref_to_service_rep')->textInput(['maxlength' => 255]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
