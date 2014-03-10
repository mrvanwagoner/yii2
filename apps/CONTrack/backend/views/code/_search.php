<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\CodeSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="code-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'tenant_id') ?>

		<?= $form->field($model, 'tenant_dbu') ?>

		<?= $form->field($model, 'type') ?>

		<?php // echo $form->field($model, 'code_number') ?>

		<?php // echo $form->field($model, 'description') ?>

		<?php // echo $form->field($model, 'hierarchy') ?>

		<?php // echo $form->field($model, 'tag_aka') ?>

		<?php // echo $form->field($model, 'prior_number') ?>

		<?php // echo $form->field($model, 'standard_code_id') ?>

		<?php // echo $form->field($model, 'phase_picklist_id') ?>

		<?php // echo $form->field($model, 'is_cost') ?>

		<?php // echo $form->field($model, 'percent_of_cost') ?>

		<?php // echo $form->field($model, 'percent_variance') ?>

		<?php // echo $form->field($model, 'formula_id') ?>

		<?php // echo $form->field($model, 'order_qty') ?>

		<?php // echo $form->field($model, 'unit_picklist_id') ?>

		<?php // echo $form->field($model, 'hours') ?>

		<?php // echo $form->field($model, 'crew_size') ?>

		<?php // echo $form->field($model, 'material_cost') ?>

		<?php // echo $form->field($model, 'labor_cost') ?>

		<?php // echo $form->field($model, 'other_cost') ?>

		<?php // echo $form->field($model, 'sub_cost') ?>

		<?php // echo $form->field($model, 'is_add_tax') ?>

		<?php // echo $form->field($model, 'cost_total') ?>

		<?php // echo $form->field($model, 'provider_entity_id') ?>

		<?php // echo $form->field($model, 'realease') ?>

		<?php // echo $form->field($model, 'postal_code') ?>

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
