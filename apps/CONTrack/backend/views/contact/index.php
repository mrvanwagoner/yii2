<?php

use yii\helpers\Html;
/*use yii\grid\GridView;*/
use kartik\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\ContactSearch $searchModel
 */

$this->title = 'Contact List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php  //CHANGED MVW 03/11/14
  $this->registerJs("
      $('.search-button').click(function() {
  	    $('.search-form').toggle();
  	    return false;
        });
      $('.search-form form').submit(function() {
  	    $('#entity-grid').yiiGridView('search', {
  		    data: $(this).serialize()
  	  });
  	  return false;
      });",
  yii\web\View::POS_END, 'search-form');
   ?>
	<p>
    <?= Html::a('Advanced Search', '#', ['class'=>'search-button']); ?>
    <div class="search-form" style="display:none">
    <?php 
      echo $this->render('_search', ['model' => $searchModel]);
   ?>
    </div>
	</p>

	<p>
		<?= Html::a('Create Contact', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([
		'dataProvider' => $dataProvider,    
		'filterModel' => $searchModel,
		'tableOptions'=>['class'=>'table table-condensed table table-striped table-bordered table-hover'],
		'panel' => [
		'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Project List</h3>',
		'type'=>'primary',
		'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Table', ['index'], ['class' => 'btn btn-info']),
		'showFooter'=>false],
		'columns' => [
      ['class' => 'yii\grid\CheckboxColumn', 'header'=>'Select'], //CHANGED MVW 03/10/1: Adds a checkbox column to select certain records. Requires Javascript code. // FIXME you may configure additional properties in this array (not sure what...)
      /* ~~~
      * var keys = $('#grid').yiiGridView('getSelectedRows');
      * // keys is an array consisting of the keys associated with the selected rows
      * ~~~ */
			['class' => 'yii\grid\SerialColumn'], //CHANGED MVW 03/11/14: A sequentially numbered column
      // 'id',
[
    'class'=>'kartik\grid\BooleanColumn',
    'attribute'=>'is_active', 
],
      // 'tenant_id',
      // 'tenant_dbu',
			//'entity_id',
			['attribute' => 'entity_id', 'width' => '120px'],
      'type',
      'description',
			// 'type_picklist_id',
			// 'status_picklist_id',
			// 'address_id',
			// 'phone_id',
			// 'mobile_phone_id',
			// 'fax_phone_id',
			// 'email_id:email',
			// 'contact_method_person_task_picklist_id',
			// 'is_employee',
			// 'trainer_entity_id',
			// 'is_full_time:datetime',
			// 'date_hire',
			// 'date_modified',
			// 'date_rehire',
			// 'date_terminated',
			// 'is_eligible_for_rehire',
			// 'salary',
			// 'wage',
			// 'commission_percent',
			// 'commission_amount',
			// 'grade',
			// 'date_grade_assigned',
			// 'sponsor_entity_id',
			// 'is_preferred',
			// 'account_number',
			// 'sales_rep_entity_id',
			// 'date_sales_rep_assigned',
			// 'service_rep_entity_id',
			// 'date_service_rep_assigned',
			// 'lead_picklist_id',
			// 'credit_limit',
			// 'provider_terms_picklist_id',
			// 'payment_method_provider_task_picklist_id',
			// 'refer_score',
			// 'refer_comment',
			// 'is_named_insured',
			// 'date_first_contact',
			// 'percent_close_out',
			// 'is_ok_to_email:email',
			// 'is_ok_to_text',
			// 'comment_differentiation',
			// 'builder_type',
			// 'Jobs_per_year',
			// 'avg_value',
			// 'is_spec_builder',
			// 'number_of_models',
			// 'loan_in_name',
			// 'current_lender_source',
			// 'terms_points',
			// 'terms_rate',
			// 'sales_source',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'kartik\grid\ActionColumn', 'header'=>'Actions', 'width'=>'100px']
		],
	]); ?>

</div>
