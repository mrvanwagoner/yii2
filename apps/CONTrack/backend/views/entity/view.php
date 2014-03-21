<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\Entity $model
 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Entities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entity-view">

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
		'attributes' => [//CHANGED MVW 03/20/14
      // 'id',
      // 'is_active',
			'type',
			'name',
			'contact',
			'aka',
			'dba',
			'middle_name',
			'suffix',
			'previous_name',
			'signature:ntext',
			'is_tenant',
			'is_user',
			'is_provider',
			'is_customer',
			'tenant_type_picklist_id',
			'is_tenant_enabled',
      // 'db_username',
      // 'db_password',
			'is_track_customers',
			'is_track_providers',
			'is_track_employees',
			'is_track_projects',
			'is_track_transactions',
			'is_track_campaigns',
			'is_track_content',
			'is_branded',
			'slogan',
			'logo_document_id',
      // 'is_user_enabled',
      // 'username',
      // 'auth_key',
      // 'password_hash',
      // 'password_reset_token',
      // 'salt',
      // 'current_role_id',
      // 'last_sign_in_time',
      // 'x_reset_password_sent_time',
      // 'x_remember_created_time',
      // 'x_sign_in_count',
      // 'x_current_sign_in_time',
      // 'x_current_sign_in_ip',
      // 'x_last_sign_in_ip',
      // 'is_provider_approved',
      // 'organization_type',
      // 'is_1099_eligible',
      // 'is_material_only',
      // 'is_track_license',
      // 'is_track_insurance',
      // 'sponsor_entity_id',
      // 'credit_picklist_id',
      // 'credit_score',
      // 'total_income',
      // 'housing_expense',
      // 'liquid_assets',
      // 'investments',
      // 'personal_property',
      // 'real_property',
      // 'total_assets',
      // 'current_liabilities',
      // 'long_term_liabilities',
      // 'total_liabilities',
      // 'equity',
      // 'order_picklist_id',
      // 'is_renter',
      // 'years_school',
      // 'employment_status',
      // 'occupation',
      // 'employer',
      // 'position',
      // 'years_employed',
      // 'retirement_age',
      // 'date_bankruptcy',
      // 'date_birth',
      // 'date_anniversary',
      // 'gender',
      // 'marital_status',
      // 'ethnicity_picklist_id',
      // 'is_us_citizen',
      // 'military_status',
      // 'is_us_veteran',
      // 'is_disabled',
      // 'description_disability',
      // 'dependents',
      // 'dependent_ages',
      // 'customer_need_picklist_id',
			'folder_location',
			'note:ntext',
			'create_time',
			'created_by_entity_id',
			'update_time',
			'updated_by_entity_id',
		],
	]); ?>

</div>
