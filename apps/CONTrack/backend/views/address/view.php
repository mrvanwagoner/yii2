<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\Address $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-view">

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
			'type',
			'description',
			'address1',
			'address2',
			'city',
			'state',
			'postal_code',
			'zip_plus_4',
			'county',
			'default_city',
			'country',
			'is_standardized',
			'is_deliverable',
			'delivery_point_barcode',
			'latitude',
			'longitude',
			'site_classification_id',
			'directions',
			'property_url:url',
			'legal_description',
			'lot_number',
			'parcel_number',
			'is_flood_zone',
			'date_in_service',
			'years_occupied',
			'property_value',
			'description_site',
			'description_building',
			'description_amenities',
			'number_buildings',
			'sf_site',
			'sf_site_disrupted',
			'sf_site_landscaped',
			'sf_paving',
			'sf_road',
			'lf_road',
			'sf_site_concrete',
			'sf_sidewalk',
			'parking_stalls',
			'parking_stalls_hc',
			'note:ntext',
			'create_time',
			'created_by_entity_id',
			'update_time',
			'updated_by_entity_id',
		],
	]); ?>

</div>
