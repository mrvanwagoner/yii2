<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\search\BuildingSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="building-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'is_active') ?>

		<?= $form->field($model, 'tenant_id') ?>

		<?= $form->field($model, 'tenant_dbu') ?>

		<?= $form->field($model, 'construction_classification_id') ?>

		<?php // echo $form->field($model, 'building_number') ?>

		<?php // echo $form->field($model, 'description') ?>

		<?php // echo $form->field($model, 'location') ?>

		<?php // echo $form->field($model, 'plan_number') ?>

		<?php // echo $form->field($model, 'buildings_like_this') ?>

		<?php // echo $form->field($model, 'exterior_finish') ?>

		<?php // echo $form->field($model, 'interior_finish') ?>

		<?php // echo $form->field($model, 'amenities') ?>

		<?php // echo $form->field($model, 'date_built') ?>

		<?php // echo $form->field($model, 'units') ?>

		<?php // echo $form->field($model, 'stories') ?>

		<?php // echo $form->field($model, 'story_height') ?>

		<?php // echo $form->field($model, 'sf_building') ?>

		<?php // echo $form->field($model, 'sf_buiding_finish') ?>

		<?php // echo $form->field($model, 'sf_footprint') ?>

		<?php // echo $form->field($model, 'sf_footprint_new') ?>

		<?php // echo $form->field($model, 'lf_perimeter') ?>

		<?php // echo $form->field($model, 'lf_perimeter_new') ?>

		<?php // echo $form->field($model, 'sf_unfinished') ?>

		<?php // echo $form->field($model, 'sf_vanilla') ?>

		<?php // echo $form->field($model, 'sf_basement') ?>

		<?php // echo $form->field($model, 'percent_finished') ?>

		<?php // echo $form->field($model, 'sf_basement_finish') ?>

		<?php // echo $form->field($model, 'sf_basement_unfinished') ?>

		<?php // echo $form->field($model, 'is_basement_walkout') ?>

		<?php // echo $form->field($model, 'sf_garage') ?>

		<?php // echo $form->field($model, 'is_garage_attached') ?>

		<?php // echo $form->field($model, 'garage_stalls') ?>

		<?php // echo $form->field($model, 'sf_canopy') ?>

		<?php // echo $form->field($model, 'sf_deck_covered') ?>

		<?php // echo $form->field($model, 'sf_deck_uncovered') ?>

		<?php // echo $form->field($model, 'bedrooms') ?>

		<?php // echo $form->field($model, 'baths') ?>

		<?php // echo $form->field($model, 'lf_setback') ?>

		<?php // echo $form->field($model, 'sf_excavate_footings') ?>

		<?php // echo $form->field($model, 'sf_footings_spot') ?>

		<?php // echo $form->field($model, 'sf_glazing') ?>

		<?php // echo $form->field($model, 'windows') ?>

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
