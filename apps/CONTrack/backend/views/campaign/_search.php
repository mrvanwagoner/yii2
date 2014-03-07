<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\CampaignSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="campaign-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'tenant_id') ?>

		<?= $form->field($model, 'tenant_dbu') ?>

		<?= $form->field($model, 'campaign_picklist_id') ?>

		<?php // echo $form->field($model, 'description') ?>

		<?php // echo $form->field($model, 'is_contractor_campaign') ?>

		<?php // echo $form->field($model, 'is_lender_campaign') ?>

		<?php // echo $form->field($model, 'is_mortgage_campaign') ?>

		<?php // echo $form->field($model, 'is_realtor_campaign') ?>

		<?php // echo $form->field($model, 'is_service_campaign') ?>

		<?php // echo $form->field($model, 'originating_entity_id') ?>

		<?php // echo $form->field($model, 'is_project_based') ?>

		<?php // echo $form->field($model, 'recipient_entity_ids') ?>

		<?php // echo $form->field($model, 'start_time') ?>

		<?php // echo $form->field($model, 'project_status_picklist_id') ?>

		<?php // echo $form->field($model, 'stop_time') ?>

		<?php // echo $form->field($model, 'recur_every') ?>

		<?php // echo $form->field($model, 'period_picklist_id') ?>

		<?php // echo $form->field($model, 'number_of_occurences') ?>

		<?php // echo $form->field($model, 'sent_occurences') ?>

		<?php // echo $form->field($model, 'last_sent_time') ?>

		<?php // echo $form->field($model, 'current_step') ?>

		<?php // echo $form->field($model, 'x_filter_id') ?>

		<?php // echo $form->field($model, 'x_search_condtions') ?>

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
