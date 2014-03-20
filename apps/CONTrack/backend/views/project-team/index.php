<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\ProjectTeamSearch $searchModel
 */

$this->title = 'Project Team'; //CHANGED MVW 03/15/14
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-team-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php  //CHANGED MVW 03/15/14
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
		<?= Html::a('Add Team Member', ['create'], ['class' => 'btn btn-success']) //CHANGED MVW 03/15/14 ?>
	</p>

	<?php echo GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
    'tableOptions'=>['class'=>'table table-condensed table table-striped table-bordered'], //CHANGED MVW 03/15/14
		'columns' => [
      ['class' => 'yii\grid\CheckboxColumn', 'header'=>'Select'], //CHANGED MVW 03/15/14
			['class' => 'yii\grid\SerialColumn'],

      // 'id',
			'is_active',
			'project_id',
			'entity_id',
			'type_picklist_id',
      'is_client',
      'is_partner',
      'is_sales_rep',
      'is_schedule_visible',
      'service_status',
      'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn', 'header'=>'Actions'] //CHANGED MVW 03/15/14:
		],
	]); ?>

</div>
