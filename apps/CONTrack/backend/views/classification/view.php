<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\Classification $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Classifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classification-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?php echo Html::a('Delete', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => Yii::t('app', 'Are you sure to delete this item?'),
				'method' => 'post',
			],
		]); ?>
	</p>

	<?php echo DetailView::widget([
		'model' => $model,
		'attributes' => [
			'id',
			'is_active',
			'tenant_id',
			'tenant_dbu',
			'type',
			'description',
			'hierarchy',
			'is_commercial',
			'is_residential',
			'term',
			'cost_sf_site',
			'cost_sf_building',
			'cost_sf_gc',
			'cost_sf_total',
			'amortization',
			'is_long_term',
			'is_interest_only',
			'is_rate_fixed',
			'interest_rate',
			'points',
			'fees',
			'note:ntext',
			'create_time',
			'created_by_entity_id',
			'update_time',
			'updated_by_entity_id',
		],
	]); ?>

</div>
