<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\TeamSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="team-search">

	<?php $form = ActiveForm::begin([ //CHANGED MVW 03/20/14
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'type') ?>

		<?= $form->field($model, 'project_id') ?>

		<?= $form->field($model, 'entity_id') ?>

		<?php  echo $form->field($model, 'type_picklist_id') ?>

		<?php  echo $form->field($model, 'has_access') ?>

		<?php // echo $form->field($model, 'is_client') ?>

		<?php // echo $form->field($model, 'is_partner') ?>

		<?php // echo $form->field($model, 'is_sales_rep') ?>

		<?php // echo $form->field($model, 'is_schedule_visible') ?>

		<?php // echo $form->field($model, 'service_status') ?>

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
