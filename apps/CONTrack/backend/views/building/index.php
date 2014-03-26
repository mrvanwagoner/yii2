<?php

use yii\helpers\Html;
/*use yii\grid\GridView;*/
use kartik\grid\GridView;

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
		'tableOptions'=>['class'=>'table table-condensed table table-striped table-bordered table-hover'],
		'panel' => [
		'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Project List</h3>',
		'type'=>'primary',
		'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Table', ['index'], ['class' => 'btn btn-info']),
		'showFooter'=>false],
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			['attribute' => 'id', 'width' => '80px'],
[
    'class'=>'kartik\grid\BooleanColumn',
    'attribute'=>'is_active', 
],
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

			['class' => 'kartik\grid\ActionColumn', 'header'=>'Actions', 'width'=>'100px']
		],
	]); ?>

</div>
