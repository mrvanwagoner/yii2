<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\DocumentSearch $searchModel
 */

$this->title = 'Documents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-index">

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
		<?= Html::a('Create Document', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
    'tableOptions'=>['class'=>'table table-condensed table table-striped table-bordered'], //CHANGED MVW 03/11/14
		'columns' => [
      ['class' => 'yii\grid\CheckboxColumn', 'header'=>'Select'], //CHANGED MVW 03/11/14
			['class' => 'yii\grid\SerialColumn'],

      // 'id',
			'is_active',
      // 'tenant_id',
      // 'tenant_dbu',
			'type',
      'document_number',
      'date_document',
      'description',
      // 'document_picklist_id',//FIXME Show description not id
			// 'is_file',
      'date_received',
      'file_name',
			// 'file_content_type',
			// 'file_size',
			// 'file_update_time',
			// 'is_email:email',
			// 'is_mail_merge',
			// 'is_deliverable',
			// 'subject',
			// 'body:ntext',
			// 'is_provided',
			// 'is_reviewed',
			// 'is_endorsed',
			// 'is_conforming',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn', 'header'=>'Actions'] //CHANGED MVW 03/11/14:
		],
	]); ?>

</div>
