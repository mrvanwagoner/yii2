<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\ContactLog $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contact Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-log-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?php echo Html::a('Delete', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => Yii::t('app', 'Are you sure to delete this item?'),
				'method' => 'post',
			],
		]); ?>
	</p>

	<?php echo DetailView::widget([
		'model' => $model,
		'attributes' => [
			'id',
			'is_active',
			'contact_id',
			'contacted_by_entity_id',
			'contact_method_person_task_picklist_id',
			'date_contact',
			'comment',
			'date_to_follow_up',
			'date_entered',
			'referred_by',
			'ref_to_service_rep',
			'is_initial_contact',
			'is_questionnaire_completed',
			'is_status_completed',
			'is_interested_in_one_close',
			'is_interested_in_two_close',
			'is_interested_in_spec',
			'is_interested_in_kiosk',
			'is_interested_in_mez',
			'note:ntext',
			'create_time',
			'created_by_entity_id',
			'update_time',
			'updated_by_entity_id',
		],
	]); ?>

</div>
