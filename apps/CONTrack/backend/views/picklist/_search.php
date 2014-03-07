<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\PicklistSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="picklist-search">

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

		<?php // echo $form->field($model, 'comment') ?>

		<?php // echo $form->field($model, 'location') ?>

		<?php // echo $form->field($model, 'hierarchy') ?>

		<?php // echo $form->field($model, 'sort_order') ?>

		<?php // echo $form->field($model, 'code_id') ?>

		<?php // echo $form->field($model, 'is_tenant') ?>

		<?php // echo $form->field($model, 'is_company') ?>

		<?php // echo $form->field($model, 'is_person') ?>

		<?php // echo $form->field($model, 'is_role') ?>

		<?php // echo $form->field($model, 'is_customer') ?>

		<?php // echo $form->field($model, 'is_provider') ?>

		<?php // echo $form->field($model, 'is_license') ?>

		<?php // echo $form->field($model, 'is_transaction') ?>

		<?php // echo $form->field($model, 'is_project') ?>

		<?php // echo $form->field($model, 'is_loan') ?>

		<?php // echo $form->field($model, 'is_commercial') ?>

		<?php // echo $form->field($model, 'is_residential') ?>

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
