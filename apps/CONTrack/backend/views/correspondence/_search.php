<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\CorrespondenceSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="correspondence-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'task_id') ?>

		<?= $form->field($model, 'type') ?>

		<?= $form->field($model, 'from_entity_id') ?>

		<?php // echo $form->field($model, 'to_entities') ?>

		<?php // echo $form->field($model, 'cc_entities') ?>

		<?php // echo $form->field($model, 'bcc_entities') ?>

		<?php // echo $form->field($model, 'subject') ?>

		<?php // echo $form->field($model, 'body') ?>

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
