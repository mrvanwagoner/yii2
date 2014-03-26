<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\Custom;//CHANGED MVW 03//06/14
use backend\models\Entity; //CHANGED MVW 03/08/14
use kartik\widgets\DatePicker; //CHANGED MVW 03/08/14
use kartik\widgets\FileInput; //CHANGED MVW 03/08/14
use kartik\widgets\Typeahead; //CHANGED MVW 03/08/14
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
/**
 * @var yii\web\View $this
 * @var backend\models\Document $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="Document-form col-lg-6">

	<?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); //CHANGED MVW 03/08/14: Added option so file upload works. See http://www.yiiframework.com/forum/index.php/topic/51243-imagefile-upload-in-yii2/ and http://www.yiiframework.com/wiki/2/how-to-upload-a-file-using-a-model/ ?>
            <div class="panel panel-default">   
    	<div class="panel-heading">
            <i class="fa fa-folder-open fa-fw"></i> Document Info
            	
    	</div><!-- end panel-heading -->

 	 <div class="panel-body">

		<?= $form->field($model, 'is_active')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) //FIXME Only visible to System Admin and System Staff ?>

		<?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) //FIXME Only visible to System Admin and System Staff ?>

		<?= $form->field($model, 'type')->dropDownList(Custom::listEnum($model, 'type'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'document_number')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'date_document')->widget(DatePicker::classname(), [
      // 'name' => 'date_received'
      'type' => DatePicker::TYPE_COMPONENT_APPEND,
      // 'value' => '01/29/2014',
      'size' => 'md',//'sm','md','lg'
      'options' => [
        'placeholder' => 'Enter date...',
        // 'readonly' => true,
      ],
      'pluginOptions' => [
        'autoclose'=>true,
        // 'format' => 'dd-M-yyyy'
        'format' => 'yyyy-mm-dd'
      ]
    ]);//CHANGED MVW 03/08/14: See http://demos.krajee.com/widget-details/datepicker and http://www.yiiframework.com/extension/yii2-widgets/  ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?php //  //FIXME typeahead combobox. =$form->field($model, 'document_type')->widget(Typeahead::classname(), [
    //   'options' => ['placeholder' => 'Select from list ...'],
    //   'dataset' => [
    //     [
    //       'local' => Custom::picklist('Document',null),
    //       // 'valueKey' => 'id',
    //       'limit' => 10
    //     ],
    //   ]
    // ]); //CHANGED MVW 03/08/14 //FIXME Typeahead that puts id in model. See http://demos.krajee.com/widget-details/typeahead also https://github.com/2amigos/yii2-type-ahead-widget ?>

		<?= $form->field($model, 'document_picklist_id')->dropDownList(Custom::picklist('Document', null),['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_file')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'date_received')->widget(DatePicker::classname(), [
      // 'name' => 'date_received'
      'type' => DatePicker::TYPE_COMPONENT_APPEND,
      // 'value' => '01/29/2014',
      'size' => 'md',//'sm','md','lg'
      'options' => [
        'placeholder' => 'Enter date...',
        // 'readonly' => true,
      ],
      'pluginOptions' => [
        'autoclose'=>true,
        // 'format' => 'dd-M-yyyy'
        'format' => 'yyyy-mm-dd'
      ]
    ]);//CHANGED MVW 03/08/14: See http://demos.krajee.com/widget-details/datepicker and http://www.yiiframework.com/extension/yii2-widgets/  ?>

		<?= $form->field($model, 'file_name')->widget(FileInput::classname(), [
      // 'name' => 'attachment_52',
      'buttonOptions' => ['class' => 'btn btn-success'],
      'uploadOptions' => ['class' => 'btn btn-primary'],
      'removeOptions' => ['class' => 'btn btn-danger', 'icon' => 'trash'],
    ]);//fileInput() //CHANGED MVW 03/08/14: See http://demos.krajee.com/widget-details/fileinput and http://www.yiiframework.com/extension/yii2-widgets/ ?> 

		<?= $form->field($model, 'file_content_type')->textInput(['maxlength' => 255]) //FIXME Setup as ENUM: 'pdf', 'bmp', 'gif', 'jpg', 'tif', ?>

		<?= $form->field($model, 'file_size')->textInput() ?>

		<?= $form->field($model, 'file_update_time')->widget(DatePicker::classname(), [
      // 'name' => 'date_received'
      'type' => DatePicker::TYPE_COMPONENT_APPEND,
      // 'value' => '01/29/2014',
      'size' => 'md',//'sm','md','lg'
      'options' => [
        'placeholder' => 'Enter received...',
        // 'readonly' => true,
      ],
      'pluginOptions' => [
        'autoclose'=>true,
        // 'format' => 'dd-M-yyyy'
        'format' => 'yyyy-mm-dd'
      ]
    ]);//CHANGED MVW 03/08/14: See http://demos.krajee.com/widget-details/datepicker and http://www.yiiframework.com/extension/yii2-widgets/ //FIXME This should be a system populated field ?>

		<?= $form->field($model, 'is_email')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_mail_merge')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_deliverable')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'subject')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'is_provided')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_reviewed')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_endorsed')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'is_conforming')->checkbox() //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <!--<H2>System Info</H2>--><!-- CHANGED MVW 03/08/14 -->
 
		<!--<?= $form->field($model, 'created_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'create_time')->textInput() //FIXME Autoupdate ?>

		<?= $form->field($model, 'updated_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'update_time')->textInput() //FIXME Autoupdate ?>
-->
		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

             	</div><!-- end panel-body -->
   </div><!-- end panel --> 

</div><!-- emd col-lg-6 -->
