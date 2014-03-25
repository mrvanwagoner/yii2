<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\i18n;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\AccountSearch $searchModel
 */

$this->title = 'Account List'; //CHANGED MVW 03/20/14: Changed from 'Accounts'
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-index">

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
		<?= Html::a('Create Account', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
      ['class' => 'yii\grid\CheckboxColumn', 'header'=>'Select'], //CHANGED MVW 03/10/1: Adds a checkbox column to select certain records. Requires Javascript code.
      /* ~~~
      * var keys = $('#grid').yiiGridView('getSelectedRows');
      * // keys is an array consisting of the keys associated with the selected rows
      * ~~~ */
			['class' => 'yii\grid\SerialColumn'], //CHANGED MVW 03/11/14: A sequentially numbered column

			'id',
			'is_active',
      // 'tenant_id',
      // 'tenant_dbu',
			'project_id',
      'projectDescription', //FIXME MVW 03/22/14: To allow filter/sort/search on relationship field. See http://www.yiiframework.com/wiki/281/searching-and-sorting-by-related-model-in-cgridview/ also see http://www.mrsoundless.com/php/yii/searching-and-sorting-a-column-from-a-related-table-in-a-cgridview/
      'type',
      'account_number',
      'craft_number',
      'client_number',
      'date_established', //FIXME Figure out how to format grids
      [
        // 'name'=>'date_established',
        // // 'header'=>'Date',
        // //'value'=>'date("d M Y",strtotime($data["work_date"]))'
        // 'value'=>'Yii::app()->dateFormatter->format("d MMM y",strtotime($data->date))'
      ],
			// 'description',
			// 'location',
			// 'original_amount',
			// 'budget_impact',
			// 'cost_code_id',
			// 'account_picklist_id',
			// 'transaction_status_picklist_id',
			// 'comment_budget:ntext',
			// 'is_estimate',
			// 'is_track_draws',
			// 'is_track_transactions',
			// 'analyze',
			// 'budget_account_id',
			// 'breakdown_account_id',
			// 'contract_account_id',
			// 'project_documents_picklist_id',
			// 'percent_retainage',
			// 'percent_variance',
			// 'ref_number',
			// 'date_ref',
			// 'date_requested',
			// 'date_received',
			// 'revision',
			// 'retainage',
			// 'net_amount',
			// 'completed',
			// 'previous_payment',
			// 'provider_entity_id',
			// 'draw_account_id',
			// 'date_paid',
			// 'check_number',
			// 'gl_code_id',
			// 'inspector_entity_id',
			// 'route_project_id',
			// 'date_inspected',
			// 'percent_previous',
			// 'percent_current',
			// 'comment_inspection:ntext',
			// 'is_reported',
			// 'is_bold',
			// 'owner_entity_id',
			// 'is_asset',
			// 'is_liability',
			// 'is_paid_by_close',
			// 'address_id',
			// 'date_maturity',
			// 'rate_interest',
			// 'payment_min',
			// 'months_to_pay',
			// 'year',
			// 'make',
			// 'model',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn', 'header'=>'Actions'] //CHANGED MVW 03/11/14: View, Update, Delete icons
		],
	]); ?>

</div>
