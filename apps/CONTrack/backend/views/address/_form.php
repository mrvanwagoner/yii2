<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Address $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="address-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'is_standardized')->textInput() ?>

		<?= $form->field($model, 'is_deliverable')->textInput() ?>

		<?= $form->field($model, 'site_classification_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_flood_zone')->textInput() ?>

		<?= $form->field($model, 'years_occupied')->textInput() ?>

		<?= $form->field($model, 'number_of_buildings')->textInput() ?>

		<?= $form->field($model, 'sf_site')->textInput() ?>

		<?= $form->field($model, 'sf_site_disrupted')->textInput() ?>

		<?= $form->field($model, 'sf_site_landscaped')->textInput() ?>

		<?= $form->field($model, 'sf_paving')->textInput() ?>

		<?= $form->field($model, 'sf_road')->textInput() ?>

		<?= $form->field($model, 'lf_road')->textInput() ?>

		<?= $form->field($model, 'sf_site_concrete')->textInput() ?>

		<?= $form->field($model, 'sf_sidewalk')->textInput() ?>

		<?= $form->field($model, 'parking_stalls')->textInput() ?>

		<?= $form->field($model, 'parking_stalls_hc')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'date_in_service')->textInput() ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'property_value')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'property_url')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'legal_description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'lot_number')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'parcel_number')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'description_site')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'description_building')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'description_amenities')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'address1')->textInput(['maxlength' => 50]) ?>

		<?= $form->field($model, 'address2')->textInput(['maxlength' => 50]) ?>

		<?= $form->field($model, 'city')->textInput(['maxlength' => 50]) ?>

		<?= $form->field($model, 'state')->textInput(['maxlength' => 2]) ?>

		<?= $form->field($model, 'postal_code')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'zip_plus_4')->textInput(['maxlength' => 4]) ?>

		<?= $form->field($model, 'county')->textInput(['maxlength' => 30]) ?>

		<?= $form->field($model, 'default_city')->textInput(['maxlength' => 128]) ?>

		<?= $form->field($model, 'country')->textInput(['maxlength' => 15]) ?>

		<?= $form->field($model, 'delivery_point_barcode')->textInput(['maxlength' => 14]) ?>

		<?= $form->field($model, 'latitude')->textInput(['maxlength' => 24]) ?>

		<?= $form->field($model, 'longitude')->textInput(['maxlength' => 24]) ?>

		<?= $form->field($model, 'directions')->textInput(['maxlength' => 155]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
