<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Building $model
 * @var yii\widgets\ActiveForm $form
 */
?>


<div class="building-form col-lg-6">

	<?php $form = ActiveForm::begin(); ?>
   <div class="panel panel-default">   
    	<div class="panel-heading">
            <i class="fa fa-folder-house fa-fw"></i> Building Info
            	<div class="pull-right">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul role="menu" class="dropdown-menu pull-right">
                                        <li><a href="#">Budget</a>
                                        </li>
                                        <li><a href="#">Draws</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="/admin/team/">Project Team</a>
                                        </li>
                                    </ul>
                                  </div>
                       </div>
    			</div><!-- end panel-heading -->

 	 <div class="panel-body">

		<?= $form->field($model, 'is_active')->textInput() ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'construction_classification_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'units')->textInput() ?>

		<?= $form->field($model, 'stories')->textInput() ?>

		<?= $form->field($model, 'story_height')->textInput() ?>

		<?= $form->field($model, 'sf_building')->textInput() ?>

		<?= $form->field($model, 'sf_buiding_finish')->textInput() ?>

		<?= $form->field($model, 'sf_footprint')->textInput() ?>

		<?= $form->field($model, 'sf_footprint_new')->textInput() ?>

		<?= $form->field($model, 'lf_perimeter')->textInput() ?>

		<?= $form->field($model, 'lf_perimeter_new')->textInput() ?>

		<?= $form->field($model, 'sf_unfinished')->textInput() ?>

		<?= $form->field($model, 'sf_vanilla')->textInput() ?>

		<?= $form->field($model, 'sf_basement')->textInput() ?>

		<?= $form->field($model, 'sf_basement_finish')->textInput() ?>

		<?= $form->field($model, 'sf_basement_unfinished')->textInput() ?>

		<?= $form->field($model, 'is_basement_walkout')->textInput() ?>

		<?= $form->field($model, 'sf_garage')->textInput() ?>

		<?= $form->field($model, 'is_garage_attached')->textInput() ?>

		<?= $form->field($model, 'garage_stalls')->textInput() ?>

		<?= $form->field($model, 'sf_canopy')->textInput() ?>

		<?= $form->field($model, 'sf_deck_covered')->textInput() ?>

		<?= $form->field($model, 'sf_deck_uncovered')->textInput() ?>

		<?= $form->field($model, 'bedrooms')->textInput() ?>

		<?= $form->field($model, 'baths')->textInput() ?>

		<?= $form->field($model, 'lf_setback')->textInput() ?>

		<?= $form->field($model, 'sf_excavate_footings')->textInput() ?>

		<?= $form->field($model, 'sf_footings_spot')->textInput() ?>

		<?= $form->field($model, 'sf_glazing')->textInput() ?>

		<?= $form->field($model, 'windows')->textInput() ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'date_built')->textInput() ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'percent_finished')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'building_number')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'location')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'plan_number')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'buildings_like_this')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'exterior_finish')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'interior_finish')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'amenities')->textInput(['maxlength' => 255]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>
         	</div><!-- end panel-body -->
   </div><!-- end panel --> 
   


	<?php ActiveForm::end(); ?>

</div><!-- end col-lg-6 -->
