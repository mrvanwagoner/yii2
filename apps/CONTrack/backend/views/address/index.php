<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\AddressSearch $searchModel
 */

$this->title = 'Addresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Address', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'tableOptions'=>['class'=>'table table-condensed table table-striped table-bordered table-hover'],
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'is_active',
			'type',
			'description',
			'address1',
			// 'address2',
			// 'city',
			// 'state',
			// 'postal_code',
			// 'zip_plus_4',
			// 'county',
			// 'default_city',
			// 'country',
			// 'is_standardized',
			// 'is_deliverable',
			// 'delivery_point_barcode',
			// 'latitude',
			// 'longitude',
			// 'site_classification_id',
			// 'directions',
			// 'property_url:url',
			// 'legal_description',
			// 'lot_number',
			// 'parcel_number',
			// 'is_flood_zone',
			// 'date_in_service',
			// 'years_occupied',
			// 'property_value',
			// 'description_site',
			// 'description_building',
			// 'description_amenities',
			// 'number_of_buildings',
			// 'sf_site',
			// 'sf_site_disrupted',
			// 'sf_site_landscaped',
			// 'sf_paving',
			// 'sf_road',
			// 'lf_road',
			// 'sf_site_concrete',
			// 'sf_sidewalk',
			// 'parking_stalls',
			// 'parking_stalls_hc',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
