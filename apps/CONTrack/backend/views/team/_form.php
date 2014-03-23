<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\Custom;//CHANGED MVW 03/06/14
use backend\models\Entity; //CHANGED MVW 03/08/14
use backend\models\Project; //CHANGED MVW 03/08/14
use backend\models\Contact; //CHANGED MVW 03/20/14
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var backend\models\Team $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<!--<div class="team-form">-->
<div class="team-form col-lg-6">

	<?php $form = ActiveForm::begin(); ?>
    
    <div class="panel panel-default">   
    	<div class="panel-heading">
            <i class="fa fa-users fa-fw"></i> Update Team Member
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
                                        <li><a href="/admin/contact/">Contacts</a></li>
                                        <li><a href="/admin/project/">Project</a>
                                        </li>
                                    </ul>
                                  </div>
                       </div>
    			</div><!-- end panel-heading -->

 	 <div class="panel-body">

		<?= $form->field($model, 'is_active')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'project_id')->dropDownList(Project::listActiveProjects(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 /FIXME shuold pull Project ID ?>

		<?= $form->field($model, 'type')->dropDownList(Custom::listEnum($model, 'type'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

    <!-- <?= $form->field($model, 'entity_id')->dropDownList(Entity::listActiveEntities(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?> -->

		<?= $form->field($model, 'entity_id')->dropDownList(Contact::listMyContacts(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'type_picklist_id')->dropDownList(Custom::picklist('Type', null),['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 //FIXME Make sure list is providing correct info ?>

		<?= $form->field($model, 'has_access')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_client')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_partner')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_sales_rep')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_schedule_visible')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'service_status')->textInput(['maxlength' => 255]) ?>

   <!-- <H2>System Info</H2>--><!-- CHANGED MVW 03/08/14 -->

		<!--<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>
 
		<?= $form->field($model, 'created_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'create_time')->textInput() //FIXME Autoupdate ?>

		<?= $form->field($model, 'updated_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'update_time')->textInput() //FIXME Autoupdate ?>-->

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>


	<?php ActiveForm::end(); ?>


            	</div><!-- end panel-body -->
   </div><!-- end panel --> 

 
</div><!-- end col-lg-6 --> 
