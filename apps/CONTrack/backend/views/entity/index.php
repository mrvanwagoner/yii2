<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Entity;//CHANGED MVW 03//06/14

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\Entity $model
 * @var backend\models\search\EntitySearch $searchModel
 * See http://stackoverflow.com/questions/20136776/combobox-filter-for-join-tables-using-yii-cgridview
 * See http://www.yiiframework.com/wiki/281/searching-and-sorting-by-related-model-in-cgridview/
 * See http://www.yiiframework.com/forum/index.php/topic/49447-how-to-use-filters-in-the-gridview-widget-when-table-relationship-is-present/
 * See http://stackoverflow.com/questions/20799869/how-to-change-gridview-column-size-in-yii
 * See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/
 * See http://www.yiiframework.com/wiki/323/dynamic-parent-and-child-cgridview-on-single-view-using-ajax-to-update-child-gridview-via-controller-after-row-in-parent-gridview-was-clicked
 * See http://www.yiiframework.com/wiki/597/update-a-part-of-content-using-ajax-when-select-a-gridview-row
 * See http://www.yiiframework.com/wiki/535/display-status-image-on-cgridview-column
 * See http://www.yiiframework.com/wiki/385/displaying-sorting-and-filtering-hasmany-manymany-relations-in-cgridview
 * See http://www.yiiframework.com/wiki/324/cgridview-keep-state-of-page-and-sort
 * See http://www.yiiframework.com/wiki/545/display-image-on-cgridview-column-and-open-a-fancy-box/
 * See http://www.yiiframework.com/extension/remember-filters-gridview
 * See http://www.yiiframework.com/extension/clear-filters-gridview
 * See http://www.yiiframework.com/extension/sortablegridview
 * See http://www.yiiframework.com/extension/livegridview
 * See http://www.yiiframework.com/extension/checkboxprevnextcheckall
 * See http://www.yiiframework.com/extension/tablesorter
 */

$this->title = 'Entities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entity-index">

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
	</p>
<!-- End of Search Button -->

	<p>
		<?= Html::a('Create Entity', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([ //CHANGED MVW 03/10/14: See http://yii2-api.yupe.ru/class-yii.grid.GridView.html#$caption
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
    'tableOptions'=>['class'=>'table table-condensed table table-striped table-bordered'], //CHANGED MVW 03/10/14: 'table table-condensed', 'table table-striped', 'table-bordered'
		'columns' => [
      ['class' => 'yii\grid\CheckboxColumn', 'header'=>'Select'], //CHANGED MVW 03/10/1: Adds a checkbox column to select certain records. Requires Javascript code. // FIXME you may configure additional properties in this array (not sure what...)
      /* ~~~
      * var keys = $('#grid').yiiGridView('getSelectedRows');
      * // keys is an array consisting of the keys associated with the selected rows
      * ~~~ */
			['class' => 'yii\grid\SerialColumn'], //CHANGED MVW 03/11/14: A sequentially numbered column
      // 'id',
      'is_active',
      'type',
      'name',
      'contact',
      // 'aka',
			// 'dba',
			// 'middle_name',//FIXME show conditionally
			// 'suffix',
			// 'previous_name',
			// 'signature:ntext',
      'is_tenant',
      'is_user',
      'is_provider',
      'is_customer',
			// 'tenant_type_picklist_id',
			// 'is_tenant_enabled',
			// 'db_username',
			// 'db_password',
			// 'is_track_customers',
			// 'is_track_providers',
			// 'is_track_employees',
			// 'is_track_projects',
			// 'is_track_transactions',
			// 'is_track_campaigns',
			// 'is_track_content',
			// 'is_branded',
			// 'slogan',
			// 'logo_document_id',
			// 'is_user_enabled',
			// 'username',
			// 'auth_key',
			// 'password_hash',
			// 'password_reset_token',
			// 'salt',
			// 'current_role_id',
			// 'last_sign_in_time',
			// 'x_reset_password_sent_time',
			// 'x_remember_created_time',
			// 'x_sign_in_count',
			// 'x_current_sign_in_time',
			// 'x_current_sign_in_ip',
			// 'x_last_sign_in_ip',
			// 'is_provider_approved',
			// 'organization_type',
			// 'is_1099_eligible',
			// 'is_material_only',
			// 'is_track_license',
			// 'is_track_insurance',
			// 'sponsor_entity_id',
			// 'credit_picklist_id',
			// 'credit_score',
			// 'total_income',
			// 'housing_expense',
			// 'liquid_assets',
			// 'investments',
			// 'personal_property',
			// 'real_property',
			// 'total_assets',
			// 'current_liabilities',
			// 'long_term_liabilities',
			// 'total_liabilities',
			// 'equity',
			// 'order_picklist_id',
			// 'is_renter',
			// 'years_school',
			// 'employment_status',
			// 'occupation',
			// 'employer',
			// 'position',
			// 'years_employed',
			// 'retirement_age',
			// 'date_bankruptcy',
			// 'date_birth',
			// 'date_anniversary',
			// 'gender',
			// 'marital_status',
			// 'ethnicity_picklist_id',
			// 'is_us_citizen',
			// 'military_status',
			// 'is_us_veteran',
			// 'is_disabled',
			// 'description_disability',
			// 'dependents',
			// 'dependent_ages',
			// 'customer_need_picklist_id',
			// 'folder_location',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn', 'header'=>'Actions'] //CHANGED MVW 03/11/14: View, Update, Delete icons
		],
	]); ?>

</div>
