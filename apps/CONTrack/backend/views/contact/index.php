<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\ContactSearch $searchModel
 */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Contact', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'is_active',
			'tenant_id',
			'tenant_dbu',
			'entity_id',
			// 'type',
			// 'description',
			// 'type_picklist_id',
			// 'status_picklist_id',
			// 'address_id',
			// 'phone_id',
			// 'mobile_phone_id',
			// 'fax_phone_id',
			// 'email_id:email',
			// 'contact_method_person_task_picklist_id',
			// 'is_employee',
			// 'trainer_entity_id',
			// 'is_full_time:datetime',
			// 'date_hire',
			// 'date_modified',
			// 'date_rehire',
			// 'date_terminated',
			// 'is_eligible_for_rehire',
			// 'salary',
			// 'wage',
			// 'commission_percent',
			// 'commission_amount',
			// 'grade',
			// 'date_grade_assigned',
			// 'sponsor_entity_id',
			// 'is_preferred',
			// 'account_number',
			// 'sales_rep_entity_id',
			// 'date_sales_rep_assigned',
			// 'service_rep_entity_id',
			// 'date_service_rep_assigned',
			// 'lead_picklist_id',
			// 'credit_limit',
			// 'provider_terms_picklist_id',
			// 'payment_method_provider_task_picklist_id',
			// 'refer_score',
			// 'refer_comment',
			// 'is_named_insured',
			// 'date_first_contact',
			// 'percent_close_out',
			// 'ok_to_email:email',
			// 'ok_to_text',
			// 'comment_differentiation',
			// 'builder_type',
			// 'Jobs_per_year',
			// 'avg_value',
			// 'is_spec_builder',
			// 'number_of_models',
			// 'loan_in_name',
			// 'current_lender_source',
			// 'terms_points',
			// 'terms_rate',
			// 'sales_source',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
