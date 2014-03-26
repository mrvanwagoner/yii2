<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var backend\models\Code $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="code-form col-lg-12">

	<?php $form = ActiveForm::begin(); ?>
    

         <div class="panel panel-default">   
    	<div class="panel-heading">
            <i class="fa fa-folder-open fa-fw"></i> Code Info
            	
    	</div><!-- end panel-heading -->

 	 <div class="panel-body">
          <div class="project-form col-lg-6">

		<?= $form->field($model, 'is_active')->textInput() ?>

    <!-- <?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) ?> -->

    <!-- <?= $form->field($model, 'standard_code_id')->textInput(['maxlength' => 11]) ?> -->

		<?= $form->field($model, 'phase_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'is_cost')->textInput() ?>

		<?= $form->field($model, 'formula_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'unit_picklist_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'crew_size')->textInput() ?>

		<?= $form->field($model, 'is_add_tax')->textInput() ?>

		<?= $form->field($model, 'provider_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'created_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'updated_by_entity_id')->textInput(['maxlength' => 11]) ?>

		<?= $form->field($model, 'type')->textInput() ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'percent_of_cost')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'percent_variance')->textInput(['maxlength' => 5]) ?>

		<?= $form->field($model, 'order_qty')->textInput(['maxlength' => 19]) ?>
       </div><!-- emd col-lg-6 -->
        <div class="project-form col-lg-6">

		<?= $form->field($model, 'hours')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'material_cost')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'labor_cost')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'other_cost')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'sub_cost')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'cost_total')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'create_time')->textInput() ?>

		<?= $form->field($model, 'update_time')->textInput() ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) ?>

		<?= $form->field($model, 'code_number')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'hierarchy')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'tag_aka')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'prior_number')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'realease')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'postal_code')->textInput(['maxlength' => 10]) ?>
        </div><!-- emd col-lg-6 -->

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

         	</div><!-- end panel-body -->
   </div><!-- end panel --> 
   

 
</div><!-- end col-lg-12 --> 