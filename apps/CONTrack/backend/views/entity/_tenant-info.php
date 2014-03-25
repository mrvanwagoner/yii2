<?php
use yii\widgets\ActiveForm;
?>
<?php


// prints something like: Wednesday the 15th
echo date('l \t\h\e jS');
?><br />
<br /><br /><br /><br /><br /><br /><br />
<?php

/* calculate the sunset time for Lisbon, Portugal
Latitude: 38.4 North
Longitude: 9 West
Zenith ~= 90
offset: +1 GMT
*/

echo date("D M d Y"). ', sunset time : ' .date_sunset(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1);

?><br />

<?php /*?>
<?php $form = ActiveForm::begin(); ?>

   <?php if ($model->is_tenant) //CHANGED MVW 03/07/14
    { // Is Tenant
      echo '<H2>Tenant Info</H2>';
      echo $form->field($model, 'tenant_type_picklist_id')->dropDownList(Custom::picklist('Type', 'is_tenant'),['prompt'=>'Select from list...']);
      echo $form->field($model, 'is_tenant_enabled')->checkbox();
      echo $form->field($model, 'db_username')->textInput(['maxlength' => 16]);
      echo $form->field($model, 'db_password')->passwordInput(); //['maxlength' => 1024]
      echo $form->field($model, 'is_track_customers')->checkbox();
      echo $form->field($model, 'is_track_providers')->checkbox();
      echo $form->field($model, 'is_track_employees')->checkbox();
      echo $form->field($model, 'is_track_projects')->checkbox();
      echo $form->field($model, 'is_track_transactions')->checkbox();
      echo $form->field($model, 'is_track_campaigns')->checkbox();
      echo $form->field($model, 'is_track_content')->checkbox();
      echo $form->field($model, 'is_branded')->checkbox();
      echo $form->field($model, 'slogan')->textInput(['maxlength' => 255]);
      echo $form->field($model, 'logo_document_id')->dropDownList(Document::listFileDocuments(), ['prompt'=>'Select from list...']); //FIXME Create button to go to Document to upload file
      echo $form->field($model, 'folder_location')->textInput(['maxlength' => 255]);
    } ?>
<?php ActiveForm::end(); ?><?php */?>