<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\ClassificationSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="classification-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'tenant_id') ?>

		<?= $form->field($model, 'tenant_dbu') ?>

		<?= $form->field($model, 'type') ?>

		<?php // echo $form->field($model, 'description') ?>

		<?php // echo $form->field($model, 'hierarchy') ?>

		<?php // echo $form->field($model, 'is_commercial') ?>

		<?php // echo $form->field($model, 'is_residential') ?>

		<?php // echo $form->field($model, 'term') ?>

		<?php // echo $form->field($model, 'cost_sf_site') ?>

		<?php // echo $form->field($model, 'cost_sf_building') ?>

		<?php // echo $form->field($model, 'cost_sf_gc') ?>

		<?php // echo $form->field($model, 'cost_sf_total') ?>

		<?php // echo $form->field($model, 'amortization') ?>

		<?php // echo $form->field($model, 'is_long_term') ?>

		<?php // echo $form->field($model, 'is_interest_only') ?>

		<?php // echo $form->field($model, 'is_rate_fixed') ?>

		<?php // echo $form->field($model, 'interest_rate') ?>

		<?php // echo $form->field($model, 'points') ?>

		<?php // echo $form->field($model, 'fees') ?>

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
