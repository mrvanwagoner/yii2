<?php

use yii\helpers\Html;
/*use yii\grid\GridView;*/
use kartik\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\ProjectSearch $searchModel
 */

$this->title = 'Project List'; //CHANGED MVW 03/20/14
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php  //CHANGED MVW 03/11/14 Expandable search button. See http://stackoverflow.com/questions/20348666/add-jquery-in-yii-2-0
  $this->registerJs( //FIXME What to put after yiiGridView: 'update', 'search', and why
    "
      $('.search-button').click(function() {
  	    $('.search-form').toggle();
  	    return false;
        });
      $('.search-form form').submit(function() {
  	    $('#entity-grid').yiiGridView('search', {
  		    data: $(this).serialize()
  	  });
  	  return false;
      });
    ",
  yii\web\View::POS_END, 'search-form'); //FIXME POS_READY? What is the difference?
  // $this->registerJs($js, \yii\web\View::POS_READY);
   ?>
   <!-- <p>You may optionally enter a comparison operator (
     <b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done. </p> -->
	<p>
    <?= Html::a('Advanced Search', '#', ['class'=>'search-button']); ?>
    <div class="search-form" style="display:none">
    <?php //$this->context->renderPartial('_search', [
    	//'model'=>$searchModel,
      //]);
      echo $this->render('_search', ['model' => $searchModel]); //FIXME Reset button only works prior to search not when reopened
   ?>
    </div><!-- search-form -->
	</p><!-- End of Search Button -->

	<p>
		<?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([ //CHANGED MVW 03/10/14: See http://yii2-api.yupe.ru/class-yii.grid.GridView.html#$caption
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'tableOptions'=>['class'=>'table table-condensed table table-striped table-bordered table-hover'],
		'panel' => [
		'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Project List</h3>',
		'type'=>'primary',
		'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Table', ['index'], ['class' => 'btn btn-info']),
		'showFooter'=>false],
		'columns' => 
[
      	['class' => 'yii\grid\CheckboxColumn', 'header'=>'Select'], //CHANGED MVW 03/10/1: Adds a checkbox column to select certain records. Requires Javascript code. // FIXME you may configure additional properties in this array (not sure what...)
      /* ~~~
      * var keys = $('#grid').yiiGridView('getSelectedRows');
      * // keys is an array consisting of the keys associated with the selected rows
      * ~~~ */
		['class' => 'yii\grid\SerialColumn'], //CHANGED MVW 03/11/14: A sequentially numbered column

      // 'id',
		/*	'is_active',*///CHANGED vjt 03/25/14: hid to display other format below
      [
        'class'=>'kartik\grid\BooleanColumn', 'attribute'=>'is_active', 
      ],
      // 'tenant_id',
      // 'tenant_dbu',
			'type',
			// 'is_template',
      'project_number',
      'description',
			// 'comment:ntext',
			// 'x_address_id',
			// 'construction_classification_id',
			// 'project_status_picklist_id',
			// 'sponsor_entity_id',
			// 'client_entity_id',
			// 'lead_picklist_id',
			// 'is_track_loan',
			// 'is_track_draw',
			// 'is_track_lien',
			// 'is_track_progress',
			// 'is_track_quality',
			// 'is_track_cost',
			// 'is_track_compare',
			// 'is_track_history',
			// 'is_track_qto',
			// 'is_track_schedule',
			// 'is_track_purchase',
			// 'is_route',
			// 'project_document_picklist_id',
			// 'percent_retainage',
			// 'percent_variance',
			// 'need_picklist_id',
			// 'purpose_picklist_id',
			// 'property_use',
      'loan_number',
			// 'account_number',
			// 'loan_classification_id',
			// 'can_pull_credit',
			// 'can_lock_loan',
			// 'appraised_value',
			// 'loan_amount',
			// 'ltv',
			// 'loan_balance',
			// 'loan_term',
			// 'loan_term_remaining',
			// 'rate_interest',
			// 'is_rate_fixed',
			// 'points',
			// 'loan_fees',
			// 'date_close',
			// 'date_maturity',
			// 'date_reprice',
			// 'date_balloon',
			// 'is_first_time:datetime',
			// 'is_first_position',
			// 'is_long_term',
			// 'is_waive_escrow',
			// 'down_payment',
			// 'payment_max',
			// 'payment_pi',
			// 'payment_total',
			// 'is_payment_fixed',
			// 'is_current_on_payments',
			// 'equity_in_property',
			// 'subordination_amount',
			// 'cash_out_amount',
			// 'property_tax',
			// 'hazard_insurance',
			// 'is_pmi',
			// 'date_end_pmi',
			// 'amount_pmi',
			// 'date_purchase',
			// 'selling_price',
			// 'purchase_price',
			// 'is_fsbo',
			// 'date_listing',
			// 'is_listing_expired',
			// 'gross_rent',
			// 'rate_occupancy',
			// 'date_start',
			// 'date_finish',
			// 'date_finish_estimated',
			// 'benchmarks:ntext',
			// 'damages:ntext',
			// 'work_week',
			// 'work_day',
			// 'cost_land',
			// 'cost_design',
			// 'cost_permit',
			// 'cost_site',
			// 'cost_gc',
			// 'cost_building',
			// 'cost_bond',
			// 'cost_insurance',
			// 'cost_contingency',
			// 'cost_fee',
			// 'cost_soft',
			// 'cost_ti',
			// 'cost_ffe',
			// 'location_factor',
			// 'inflation_factor',
			// 'sf_cost_site',
			// 'sf_cost_building',
			// 'sf_cost_ti',
			// 'sf_cost_total',
			// 'percent_gc',
			// 'percent_permit',
			// 'percent_design',
			// 'percent_bond',
			// 'percent_insurance',
			// 'percent_contingency',
			// 'percent_fee',
			// 'percent_soft',
			// 'template_project_id',
			// 'folder',
			// 'date_archive',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',
			['class' => 'kartik\grid\ActionColumn', 'header'=>'Actions', 'width'=>'100px']
			//['class' => 'yii\grid\ActionColumn', 'header'=>'Actions', 'width'=>'100px'] //CHANGED MVW 03/11/14: View, Update, Delete icons
		],
	]); ?>

</div>
