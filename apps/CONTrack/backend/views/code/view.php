<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\Code $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Codes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="code-view">

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
			'code_number',
			'description',
			'hierarchy',
			'tag_aka',
			'prior_number',
			'standard_code_id',
			'phase_picklist_id',
			'is_cost',
			'percent_of_cost',
			'percent_variance',
			'formula_id',
			'order_qty',
			'unit_picklist_id',
			'hours',
			'crew_size',
			'material_cost',
			'labor_cost',
			'other_cost',
			'sub_cost',
			'is_add_tax',
			'cost_total',
			'provider_entity_id',
			'realease',
			'postal_code',
			'note:ntext',
			'create_time',
			'created_by_entity_id',
			'update_time',
			'updated_by_entity_id',
		],
	]); ?>

</div>
