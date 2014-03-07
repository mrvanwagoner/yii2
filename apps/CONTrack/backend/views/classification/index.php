<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\ClassificationSearch $searchModel
 */

$this->title = 'Classifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classification-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Classification', ['create'], ['class' => 'btn btn-success']) ?>
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
			// 'description',
			// 'hierarchy',
			// 'is_commercial',
			// 'is_residential',
			// 'term',
			// 'cost_sf_site',
			// 'cost_sf_building',
			// 'cost_sf_gc',
			// 'cost_sf_total',
			// 'amortization',
			// 'is_long_term',
			// 'is_interest_only',
			// 'is_rate_fixed',
			// 'interest_rate',
			// 'points',
			// 'fees',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
