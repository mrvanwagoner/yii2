<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\MappingSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="mapping-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'tenant_id') ?>

		<?= $form->field($model, 'tenant_dbu') ?>

		<?= $form->field($model, 'lead_picklist_id') ?>

		<?php // echo $form->field($model, 'source_field') ?>

		<?php // echo $form->field($model, 'description_field') ?>

		<?php // echo $form->field($model, 'is_map_field') ?>

		<?php // echo $form->field($model, 'map_to_table') ?>

		<?php // echo $form->field($model, 'map_to_field') ?>

		<?php // echo $form->field($model, 'type') ?>

		<?php // echo $form->field($model, 'record') ?>

		<?php // echo $form->field($model, 'import_function') ?>

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
