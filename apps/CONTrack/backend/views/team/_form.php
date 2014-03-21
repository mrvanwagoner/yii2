<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\Custom;//CHANGED MVW 03/06/14
use backend\models\Entity; //CHANGED MVW 03/08/14
use backend\models\Project; //CHANGED MVW 03/08/14
use backend\models\Contact; //CHANGED MVW 03/20/14

/**
 * @var yii\web\View $this
 * @var backend\models\Team $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="team-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'is_active')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'project_id')->dropDownList(Project::listActiveProjects(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'type')->dropDownList(Custom::listEnum($model, 'type'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'entity_id')->dropDownList(Entity::listActiveEntities(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'type_picklist_id')->dropDownList(Custom::picklist('Type', null),['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 //FIXME based on entity type ?>

		<?= $form->field($model, 'has_access')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_client')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_partner')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_sales_rep')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_schedule_visible')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'service_status')->textInput(['maxlength' => 255]) ?>

    <H2>System Info</H2><!-- CHANGED MVW 03/08/14 -->

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>
 
		<?= $form->field($model, 'created_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'create_time')->textInput() //FIXME Autoupdate ?>

		<?= $form->field($model, 'updated_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'update_time')->textInput() //FIXME Autoupdate ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
