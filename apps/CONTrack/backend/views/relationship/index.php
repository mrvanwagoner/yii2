<?php

use yii\helpers\Html;
/*use yii\grid\GridView;*/
use kartik\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\RelationshipSearch $searchModel
 */

$this->title = 'Relationships';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relationship-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Relationship', ['create'], ['class' => 'btn btn-success']) ?>
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
			['class' => 'yii\grid\SerialColumn'],

			['attribute' => 'id', 'width' => '80px'],
[
    'class'=>'kartik\grid\BooleanColumn',
    'attribute'=>'is_active', 
],
			'entity_id',
			'child_entity_id',
			'type',
			// 'division_entity_id',
			// 'supervisor_entity_id',
			// 'is_private',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'kartik\grid\ActionColumn', 'header'=>'Actions', 'width'=>'100px']
		],
	]); ?>

</div>
