<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\MappingSearch $searchModel
 */

$this->title = 'Mappings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mapping-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Mapping', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php echo GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'is_active',
			'tenant_id',
			'tenant_dbu',
			'lead_picklist_id',
			// 'source_field',
			// 'description_field',
			// 'is_map_field',
			// 'map_to_table',
			// 'map_to_field',
			// 'type',
			// 'record',
			// 'import_function',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
