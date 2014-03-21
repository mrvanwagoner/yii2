<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\AccountSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="account-search">

	<?php $form = ActiveForm::begin([ //CHANGED MVW 03/20/14
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

    <!-- <?= $form->field($model, 'tenant_id') ?> -->

    <!-- <?= $form->field($model, 'tenant_dbu') ?> -->

		<?= $form->field($model, 'type') ?>

    <?php  echo $form->field($model, 'account_number') ?>

		<?php // echo $form->field($model, 'date_established') ?>

		<?php  echo $form->field($model, 'description') ?>

		<?php // echo $form->field($model, 'location') ?>

		<?php  echo $form->field($model, 'account_picklist_id') ?>

		<?php // echo $form->field($model, 'transaction_status_picklist_id') ?>

		<?php // echo $form->field($model, 'parent_account_id') ?>

		<?php // echo $form->field($model, 'is_track_transactions') ?>

		<?php // echo $form->field($model, 'provider_entity_id') ?>

		<?php // echo $form->field($model, 'gl_code_id') ?>

		<?php // echo $form->field($model, 'project_id') ?>

		<?php // echo $form->field($model, 'ref_number') ?>

		<?php // echo $form->field($model, 'date_ref') ?>

		<?php // echo $form->field($model, 'budget_impact') ?>

		<?php // echo $form->field($model, 'gross_amount') ?>

		<?php // echo $form->field($model, 'adjustment') ?>

		<?php // echo $form->field($model, 'net_amount') ?>

		<?php // echo $form->field($model, 'is_reported') ?>

		<?php // echo $form->field($model, 'comment_budget') ?>

		<?php // echo $form->field($model, 'is_bold') ?>

		<?php // echo $form->field($model, 'beginning_balance') ?>

		<?php // echo $form->field($model, 'current_balance') ?>

		<?php // echo $form->field($model, 'is_asset') ?>

		<?php // echo $form->field($model, 'is_liability') ?>

		<?php // echo $form->field($model, 'date_maturity') ?>

		<?php // echo $form->field($model, 'face_amount') ?>

		<?php // echo $form->field($model, 'current_value') ?>

		<?php // echo $form->field($model, 'address_id') ?>

		<?php // echo $form->field($model, 'is_paid_by_close') ?>

		<?php // echo $form->field($model, 'rate_interest') ?>

		<?php // echo $form->field($model, 'payment_min') ?>

		<?php // echo $form->field($model, 'months_to_pay') ?>

		<?php // echo $form->field($model, 'year') ?>

		<?php // echo $form->field($model, 'make') ?>

		<?php // echo $form->field($model, 'model') ?>

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
