<?php
// FIXME This is formatted for the frontend NOT backend. Specificaly to just show basic columns like our competitors
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\Custom;//CHANGED MVW 03//06/14
use backend\models\Entity;//CHANGED MVW 03//06/14
use backend\models\Classification; //CHANGED MVW 03/20/14
use backend\models\Document;//CHANGED MVW 03//06/14
use kartik\widgets\DatePicker; //CHANGED MVW 03/08/14
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;


/**
 * @var yii\web\View $this
 * @var backend\models\Project $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="project-form col-lg-6">

	<?php $form = ActiveForm::begin(); ?>
 


<?php /*?><?= yii\bootstrap\Tabs::widget([

	'items' => [
	[
	'label' => 'One',
	'content' => 'Anim pariatur cliche...',
	'active' => true
	],
	[
	'label' => 'Two',
	'content' => 'Anim pariatur cliche...',
	'options' => ['id' => 'myveryownID'],
	],
	[
	'label' => 'Dropdown',
	'items' => [
	[
	'label' => 'DropdownA',
	'content' => 'DropdownA, Anim pariatur cliche...',
	],
	[
	'label' => 'DropdownB',
	'content' => 'DropdownB, Anim pariatur cliche...',
	],
	],
	],
	],
	]);

?>
<?php */?>
<?php /*?><?= yii\jui\Accordion::widget([
    'items' => [
        [
            'header' => '<i class="fa fa-folder-open fa-fw"></i> Project Info',
            'content' => 
				// [
					'content, more content, and more'
					// $form->field($model, 'project_number')->textInput(['maxlength' => 45]),
					// $form->field($model, 'description')->textInput(['maxlength' => 255]),
					// $form->field($model, 'comment')->textarea(['rows' => 6]), 
					// $form->field($model, 'type')->dropDownList(Custom::listEnum($model, 'type'), ['prompt'=>'Select from list...']), 
					// $form->field($model, 'construction_classification_id')->dropDownList(Classification::listActiveConstructionClassifications(),['prompt'=>'Select from list...']),
					// $form->field($model, 'project_status_picklist_id')->dropDownList(Custom::picklist('Status', 'is_project'),['prompt'=>'Select from list...'])
				// ],
        ],
        [
            'header' => 'Section 2',
            'headerOptions' => ['tag' => 'h1'],
            'content' => 'Sed non urna. Phasellus eu ligula. Vestibulum sit amet purus...',
            'options' => ['tag' => 'div'],
        ],
    ],
    'options' => ['tag' => 'div'],
    'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['tag' => 'h2'],
    'clientOptions' => ['collapsible' => false],
]);
  
  ?><?php */?>


  
  
  
  
  
    
    
    
    <div class="panel panel-default">   
    	<div class="panel-heading">
            <i class="fa fa-folder-open fa-fw"></i> Project Info
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

    <!-- <?= $form->field($model, 'is_active')->checkbox() //CHANGED MVW 03/08/14 ?> -->

    <!-- <?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 11]) //FIXME Only visible to System Admin and System Staff ?> -->

    <!-- <?= $form->field($model, 'tenant_dbu')->textInput(['maxlength' => 16]) //FIXME Only visible to System Admin and System Staff ?> -->

    <!-- <?= $form->field($model, 'is_template')->textInput() ?> -->

		<?= $form->field($model, 'project_number')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

		<?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'type')->dropDownList(Custom::listEnum($model, 'type'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

    <!-- <?= $form->field($model, 'x_address_id')->textInput(['maxlength' => 11]) //FIXME Use tbl_project_has_address to show address ?> -->

		<?= $form->field($model, 'construction_classification_id')->dropDownList(Classification::listActiveConstructionClassifications(),['prompt'=>'Select from list...']) //CHANGED MVW 03/20/14 ?>

		<?= $form->field($model, 'project_status_picklist_id')->dropDownList(Custom::picklist('Status', 'is_project'),['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>

    <!-- <?= $form->field($model, 'sponsor_entity_id')->textInput(['maxlength' => 11]) ?> -->

    <!-- <?= $form->field($model, 'client_entity_id')->textInput(['maxlength' => 11]) ?> -->

    <!-- <?= $form->field($model, 'lead_picklist_id')->textInput(['maxlength' => 11]) ?> -->

    <!-- <?= $form->field($model, 'is_track_loan')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_track_draw')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_track_lien')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_track_progress')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_track_quality')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_track_cost')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_track_compare')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_track_history')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_track_qto')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_track_schedule')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_track_purchase')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_route')->textInput() ?> -->
    

 	</div><!-- end panel-body -->
   </div><!-- end panel --> 
    
 
     <div class="panel panel-default">   
    	<div class="panel-heading">
            <i class="fa fa-calendar-o fa-fw"></i> Schedule Info
            	<!--<div class="pull-right">
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
                                        <li><a href="/admin/project-team/">Project Team</a>
                                        </li>
                                    </ul>
                                  </div>
                       </div>-->
    			</div><!-- end panel-heading -->

 	 <div class="panel-body">

    <?= $form->field($model, 'date_start')->widget(DatePicker::classname(), [ //CHANGED MVW 03/06/14
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
    ]); ?>

    <?= $form->field($model, 'date_finish')->widget(DatePicker::classname(), [ //CHANGED MVW 03/06/14
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
    ]); ?>

    <!-- <?= $form->field($model, 'date_finish_estimated')->textInput(['maxlength' => 255]) ?> -->

    <!-- <?= $form->field($model, 'benchmarks')->textarea(['rows' => 6]) ?> -->

    <!-- <?= $form->field($model, 'damages')->textarea(['rows' => 6]) ?> -->

    <!-- <?= $form->field($model, 'work_week')->textInput() ?> -->

    <!-- <?= $form->field($model, 'work_day')->textInput() ?> -->

    <!-- <H2>Cost Info</H2> CHANGED MVW 03/20/14 -->

    <!-- <?= $form->field($model, 'cost_land')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cost_design')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cost_permit')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cost_site')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cost_gc')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cost_building')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cost_bond')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cost_insurance')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cost_contingency')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cost_fee')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cost_soft')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cost_ti')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cost_ffe')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'location_factor')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'inflation_factor')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'sf_cost_site')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'sf_cost_building')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'sf_cost_ti')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'sf_cost_total')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'percent_gc')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'percent_permit')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'percent_design')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'percent_bond')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'percent_insurance')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'percent_contingency')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'percent_fee')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'percent_soft')->textInput(['maxlength' => 5]) ?> -->

    <!-- <?= $form->field($model, 'template_project_id')->textInput(['maxlength' => 11]) ?> -->
         	</div><!-- end panel-body -->
   </div><!-- end panel --> 
 
 
 
 
 
    
<!--    <div class="panel panel-default">   
    	<div class="panel-heading">
            <i class="fa fa-folder-open fa-fw"></i> System Info
            	<div class="pull-right">


 	 <div class="panel-body">  -->  
    


  <!--  <?= $form->field($model, 'folder')->textInput(['maxlength' => 255]) ?>-->

  <?php /*?> <?= $form->field($model, 'date_archive')->widget(DatePicker::classname(), [ //CHANGED MVW 03/06/14 -->
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
    ]); ?><?php */?>

		<?php /*?><?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

		<?= $form->field($model, 'created_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'create_time')->textInput() //FIXME Autoupdate ?>

		<?= $form->field($model, 'updated_by_entity_id')->dropDownList(Entity::listActiveUsers(), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?>

		<?= $form->field($model, 'update_time')->textInput() //FIXME Autoupdate ?><?php */?>
        
       <!-- </div>--><!-- end panel-body -->
   <!--</div>--><!-- end panel --> 

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?> 
            
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="/admin/budget/" class="btn btn-success" role="button">Budgets</a> <a href="/admin/draw/" class="btn btn-success" role="button">Draws</a> <a href="/admin/team/" class="btn btn-success" role="button">Project Team</a> 
		</div>

	<?php ActiveForm::end(); ?>
    
    

</div><!-- end col-lg-6 -->
    
<div class="col-lg-6">
 <div class="panel panel-default">   
    	<div class="panel-heading">
            <i class="fa fa-money fa-fw"></i> Loan Info
            	<!--<div class="pull-right">
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
                                        <li><a href="/admin/project-team/">Project Team</a>
                                        </li>
                                    </ul>
                                  </div>
                       </div>-->
    			</div><!-- end panel-heading -->

   <!-- <H2>Project Info</H2>-->
 	 <div class="panel-body">


    <!-- <?= $form->field($model, 'need_picklist_id')->textInput(['maxlength' => 11]) ?> -->

    <!-- <?= $form->field($model, 'purpose_picklist_id')->textInput(['maxlength' => 11]) ?> -->

    <!-- <?= $form->field($model, 'property_use')->dropDownList(Custom::listEnum($model, 'property_use'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?> -->

    <?= $form->field($model, 'loan_number')->textInput(['maxlength' => 255]) ?>

    <!-- <?= $form->field($model, 'account_number')->textInput(['maxlength' => 255]) ?> -->

    <?= $form->field($model, 'loan_classification_id')->dropDownList(Classification::listActiveLoanClassifications(),['prompt'=>'Select from list...']) //CHANGED MVW 03/20/14 ?>

    <!-- <?= $form->field($model, 'can_pull_credit')->dropDownList(Custom::listEnum($model, 'can_pull_credit'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?> -->

    <!-- <?= $form->field($model, 'can_lock_loan')->dropDownList(Custom::listEnum($model, 'can_lock_loan'), ['prompt'=>'Select from list...']) //CHANGED MVW 03/06/14 ?> -->

    <?= $form->field($model, 'appraised_value')->textInput(['maxlength' => 19]) ?>

    <?= $form->field($model, 'loan_amount')->textInput(['maxlength' => 19]) ?>

    <?= $form->field($model, 'ltv')->textInput(['maxlength' => 19]) ?>

    <!-- <?= $form->field($model, 'loan_balance')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'loan_term')->textInput() ?> -->

    <!-- <?= $form->field($model, 'loan_term_remaining')->textInput() ?> -->

    <!-- <?= $form->field($model, 'rate_interest')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'is_rate_fixed')->textInput() ?> -->

    <!-- <?= $form->field($model, 'points')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'loan_fees')->textInput(['maxlength' => 19]) ?> -->

    <?= $form->field($model, 'date_close')->widget(DatePicker::classname(), [ //CHANGED MVW 03/06/14
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
    ]); ?>

    <?= $form->field($model, 'date_maturity')->widget(DatePicker::classname(), [ //CHANGED MVW 03/06/14
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
    ]); ?>

    <!-- <?= $form->field($model, 'date_reprice')->textInput() ?> -->

    <!-- <?= $form->field($model, 'date_balloon')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_first_time')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_first_position')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_long_term')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_waive_escrow')->textInput() ?> -->

    <!-- <?= $form->field($model, 'down_payment')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'payment_max')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'payment_pi')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'payment_total')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'is_payment_fixed')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_current_on_payments')->textInput() ?> -->

    <!-- <?= $form->field($model, 'equity_in_property')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'subordination_amount')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'cash_out_amount')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'property_tax')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'hazard_insurance')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'is_pmi')->textInput() ?> -->

    <!-- <?= $form->field($model, 'date_end_pmi')->textInput() ?> -->

    <!-- <?= $form->field($model, 'amount_pmi')->textInput(['maxlength' => 19]) ?> -->
     	</div><!-- end panel-body -->
   </div><!-- end panel --> 
   
   
    <div class="panel panel-default">   
    	<div class="panel-heading">
            <i class="fa fa-pencil-square fa-fw"></i> Draw Info
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


		<?= $form->field($model, 'project_document_picklist_id')->dropDownList(Custom::picklist('Document', 'is_project'),['prompt'=>'Select from list...']) //CHANGED MVW 03/08/14 ?>

		<?= $form->field($model, 'percent_retainage')->textInput(['maxlength' => 19]) ?>

		<?= $form->field($model, 'percent_variance')->textInput(['maxlength' => 19]) ?>

    <!-- <H2>Sales Info</H2> CHANGED MVW 03/20/14 -->

    <!-- <?= $form->field($model, 'date_purchase')->textInput() ?> -->

    <!-- <?= $form->field($model, 'selling_price')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'purchase_price')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'is_fsbo')->textInput() ?> -->

    <!-- <?= $form->field($model, 'date_listing')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_listing_expired')->textInput() ?> -->

    <!-- <?= $form->field($model, 'gross_rent')->textInput(['maxlength' => 19]) ?> -->

    <!-- <?= $form->field($model, 'rate_occupancy')->textInput(['maxlength' => 5]) ?> -->
         	</div><!-- end panel-body -->
   </div><!-- end panel --> 
   

 
</div><!-- end col-lg-6 --> 
