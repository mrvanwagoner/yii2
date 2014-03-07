<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\Picklist $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Picklists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="picklist-view">

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
			'tenant_id',
			'tenant_dbu',
			'type',
			'description:ntext',
			'comment:ntext',
			'location',
			'hierarchy',
			'sort_order',
			'code_id',
			'is_tenant',
			'is_company',
			'is_person',
			'is_role',
			'is_customer',
			'is_provider',
			'is_license',
			'is_transaction',
			'is_project',
			'is_loan',
			'is_commercial',
			'is_residential',
			'note:ntext',
			'create_time',
			'created_by_entity_id',
			'update_time',
			'updated_by_entity_id',
		],
	]); ?>

</div>
