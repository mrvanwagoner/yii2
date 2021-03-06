<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\ContactLogSearch $searchModel
 */

$this->title = 'Contact Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-log-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Contact Log', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'is_active',
			'contact_id',
			'contacted_by_entity_id',
			'contact_method_person_task_picklist_id',
			// 'date_contact',
			// 'comment',
			// 'date_to_follow_up',
			// 'date_entered',
			// 'referred_by',
			// 'ref_to_service_rep',
			// 'is_initial_contact',
			// 'is_questionnaire_completed',
			// 'is_status_completed',
			// 'is_interested_in_one_close',
			// 'is_interested_in_two_close',
			// 'is_interested_in_spec',
			// 'is_interested_in_kiosk',
			// 'is_interested_in_mez',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
