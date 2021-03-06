<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\BuildingSearch $searchModel
 */

$this->title = 'Buildings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="building-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Building', ['create'], ['class' => 'btn btn-success']) ?>
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
			'construction_classification_id',
			// 'building_number',
			// 'description',
			// 'location',
			// 'plan_number',
			// 'buildings_like_this',
			// 'exterior_finish',
			// 'interior_finish',
			// 'amenities',
			// 'date_built',
			// 'units',
			// 'stories',
			// 'story_height',
			// 'sf_building',
			// 'sf_buiding_finish',
			// 'sf_footprint',
			// 'sf_footprint_new',
			// 'lf_perimeter',
			// 'lf_perimeter_new',
			// 'sf_unfinished',
			// 'sf_vanilla',
			// 'sf_basement',
			// 'percent_finished',
			// 'sf_basement_finish',
			// 'sf_basement_unfinished',
			// 'is_basement_walkout',
			// 'sf_garage',
			// 'is_garage_attached',
			// 'garage_stalls',
			// 'sf_canopy',
			// 'sf_deck_covered',
			// 'sf_deck_uncovered',
			// 'bedrooms',
			// 'baths',
			// 'lf_setback',
			// 'sf_excavate_footings',
			// 'sf_footings_spot',
			// 'sf_glazing',
			// 'windows',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
