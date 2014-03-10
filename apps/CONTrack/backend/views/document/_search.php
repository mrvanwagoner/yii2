<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\DocumentSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="document-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'tenant_id') ?>

		<?= $form->field($model, 'tenant_dbu') ?>

		<?= $form->field($model, 'type') ?>

		<?php // echo $form->field($model, 'document_number') ?>

		<?php // echo $form->field($model, 'date_document') ?>

		<?php // echo $form->field($model, 'description') ?>

		<?php // echo $form->field($model, 'document_picklist_id') ?>

		<?php // echo $form->field($model, 'is_file') ?>

		<?php // echo $form->field($model, 'date_received') ?>

		<?php // echo $form->field($model, 'file_name') ?>

		<?php // echo $form->field($model, 'file_content_type') ?>

		<?php // echo $form->field($model, 'file_size') ?>

		<?php // echo $form->field($model, 'file_update_time') ?>

		<?php // echo $form->field($model, 'is_email') ?>

		<?php // echo $form->field($model, 'is_mail_merge') ?>

		<?php // echo $form->field($model, 'is_deliverable') ?>

		<?php // echo $form->field($model, 'subject') ?>

		<?php // echo $form->field($model, 'body') ?>

		<?php // echo $form->field($model, 'is_provided') ?>

		<?php // echo $form->field($model, 'is_reviewed') ?>

		<?php // echo $form->field($model, 'is_endorsed') ?>

		<?php // echo $form->field($model, 'is_conforming') ?>

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
