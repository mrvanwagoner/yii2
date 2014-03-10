<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\ContactLogSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="contact-log-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'contact_id') ?>

		<?= $form->field($model, 'contacted_by_entity_id') ?>

		<?= $form->field($model, 'contact_method_person_task_picklist_id') ?>

		<?php // echo $form->field($model, 'date_contact') ?>

		<?php // echo $form->field($model, 'comment') ?>

		<?php // echo $form->field($model, 'date_to_follow_up') ?>

		<?php // echo $form->field($model, 'date_entered') ?>

		<?php // echo $form->field($model, 'referred_by') ?>

		<?php // echo $form->field($model, 'ref_to_service_rep') ?>

		<?php // echo $form->field($model, 'is_initial_contact') ?>

		<?php // echo $form->field($model, 'is_questionnaire_completed') ?>

		<?php // echo $form->field($model, 'is_status_completed') ?>

		<?php // echo $form->field($model, 'is_interested_in_one_close') ?>

		<?php // echo $form->field($model, 'is_interested_in_two_close') ?>

		<?php // echo $form->field($model, 'is_interested_in_spec') ?>

		<?php // echo $form->field($model, 'is_interested_in_kiosk') ?>

		<?php // echo $form->field($model, 'is_interested_in_mez') ?>

		<?php // echo $form->field($model, 'note') ?>

		<?php // echo $form->field($model, 'create_time') ?>

		<?php // echo $form->field($model, 'created_by_entity_id') ?>

		<?php // echo $form->field($model, 'update_time') ?>

		<?php // echo $form->field($model, 'updated_by_entity_id') ?>

		<div class="form-group">
			<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
			<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
