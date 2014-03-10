<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\CodeSearch $searchModel
 */

$this->title = 'Codes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="code-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Code', ['create'], ['class' => 'btn btn-success']) ?>
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
			'type',
			// 'code_number',
			// 'description',
			// 'hierarchy',
			// 'tag_aka',
			// 'prior_number',
			// 'standard_code_id',
			// 'phase_picklist_id',
			// 'is_cost',
			// 'percent_of_cost',
			// 'percent_variance',
			// 'formula_id',
			// 'order_qty',
			// 'unit_picklist_id',
			// 'hours',
			// 'crew_size',
			// 'material_cost',
			// 'labor_cost',
			// 'other_cost',
			// 'sub_cost',
			// 'is_add_tax',
			// 'cost_total',
			// 'provider_entity_id',
			// 'realease',
			// 'postal_code',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
