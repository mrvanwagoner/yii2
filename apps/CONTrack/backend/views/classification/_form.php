<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\Custom;//CHANGED MVW 03//06/14
use backend\models\Entity; //CHANGED MVW 03/08/14

/**
 * @var yii\web\View $this
 * @var backend\models\Classification $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="classification-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) //FIXME Only visible to System Admin and System Staff ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) //FIXME Only visible to System Admin and System Staff ?>

		<?= $form->field($model, 'type')->dropDownList(Custom::listEnum($model, 'type'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'hierarchy')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'is_commercial')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_residential')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'term')->textInput() ?>

		<?= $form->field($model, 'cost_sf_site')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_sf_building')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_sf_gc')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_sf_total')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'amortization')->textInput() ?>

		<?= $form->field($model, 'is_long_term')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_interest_only')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_rate_fixed')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'interest_rate')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'points')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'fees')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <H2>System Info</H2><!-- CHANGED MVW 03/08/14 -->
 
		<?= $form->field($model, 'created_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'create_time')->textInput() //FIXME Autoupdate ?>

		<?= $form->field($model, 'updated_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'update_time')->textInput() //FIXME Autoupdate ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
