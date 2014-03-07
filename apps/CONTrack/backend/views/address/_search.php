<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\AddressSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="address-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'type') ?>

		<?= $form->field($model, 'description') ?>

		<?= $form->field($model, 'address1') ?>

		<?php // echo $form->field($model, 'address2') ?>

		<?php // echo $form->field($model, 'city') ?>

		<?php // echo $form->field($model, 'state') ?>

		<?php // echo $form->field($model, 'postal_code') ?>

		<?php // echo $form->field($model, 'zip_plus_4') ?>

		<?php // echo $form->field($model, 'county') ?>

		<?php // echo $form->field($model, 'default_city') ?>

		<?php // echo $form->field($model, 'country') ?>

		<?php // echo $form->field($model, 'is_standardized') ?>

		<?php // echo $form->field($model, 'is_deliverable') ?>

		<?php // echo $form->field($model, 'delivery_point_barcode') ?>

		<?php // echo $form->field($model, 'latitude') ?>

		<?php // echo $form->field($model, 'longitude') ?>

		<?php // echo $form->field($model, 'site_classification_id') ?>

		<?php // echo $form->field($model, 'directions') ?>

		<?php // echo $form->field($model, 'property_url') ?>

		<?php // echo $form->field($model, 'legal_description') ?>

		<?php // echo $form->field($model, 'lot_number') ?>

		<?php // echo $form->field($model, 'parcel_number') ?>

		<?php // echo $form->field($model, 'is_flood_zone') ?>

		<?php // echo $form->field($model, 'date_in_service') ?>

		<?php // echo $form->field($model, 'years_occupied') ?>

		<?php // echo $form->field($model, 'property_value') ?>

		<?php // echo $form->field($model, 'description_site') ?>

		<?php // echo $form->field($model, 'description_building') ?>

		<?php // echo $form->field($model, 'description_amenities') ?>

		<?php // echo $form->field($model, 'number_buildings') ?>

		<?php // echo $form->field($model, 'sf_site') ?>

		<?php // echo $form->field($model, 'sf_site_disrupted') ?>

		<?php // echo $form->field($model, 'sf_site_landscaped') ?>

		<?php // echo $form->field($model, 'sf_paving') ?>

		<?php // echo $form->field($model, 'sf_road') ?>

		<?php // echo $form->field($model, 'lf_road') ?>

		<?php // echo $form->field($model, 'sf_site_concrete') ?>

		<?php // echo $form->field($model, 'sf_sidewalk') ?>

		<?php // echo $form->field($model, 'parking_stalls') ?>

		<?php // echo $form->field($model, 'parking_stalls_hc') ?>

		<?php // echo $form->field($model, 'note') ?>

		<?php // echo $form->field($model, 'create_time') ?>

		<?php // echo $form->field($model, 'created_by_entity_id') ?>

		<?php // echo $form->field($model, 'update_time') ?>

		<?php // echo $form->field($model, 'updated_by_entity_id') ?>

		<div class="form-group">
			<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
			<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
