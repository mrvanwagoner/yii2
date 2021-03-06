<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\PicklistSearch $searchModel
 */

$this->title = 'Picklists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="picklist-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Picklist', ['create'], ['class' => 'btn btn-success']) ?>
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
			'type',
			// 'description:ntext',
			// 'comment:ntext',
			// 'location',
			// 'hierarchy',
			// 'sort_order',
			// 'code_id',
			// 'is_tenant',
			// 'is_company',
			// 'is_person',
			// 'is_role',
			// 'is_customer',
			// 'is_provider',
			// 'is_license',
			// 'is_transaction',
			// 'is_project',
			// 'is_loan',
			// 'is_commercial',
			// 'is_residential',
			// 'note:ntext',
			// 'create_time',
			// 'created_by_entity_id',
			// 'update_time',
			// 'updated_by_entity_id',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
