<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\TeamSearch $searchModel
 */

$this->title = 'Project Teams'; //CHANGED MVW 03/20/14. FIXME Available only to System Admin? Otherwise available through Projects 
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-index">

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
		<?= Html::a('Create Team', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([
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

			'project_id',
      // 'id',
			'is_active',
			'type',
			'entity_id',
      'type_picklist_id',
      'has_access',
			// 'is_client',
			// 'is_partner',
			// 'is_sales_rep',
			// 'is_schedule_visible',
			// 'service_status',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn', 'header'=>'Actions'] //CHANGED MVW 03/11/14: View, Update, Delete icons
		],
	]); ?>

</div>
