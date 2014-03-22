<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\Code $model
 */

$this->title = $model->description; //CHANGED MVW 03/20/14: from id
$this->params['breadcrumbs'][] = ['label' => 'Codes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="code-view">

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

	<?php echo DetailView::widget([ //CHANGED MVW 03/22/14
		'model' => $model,
		'attributes' => [
			'id',
			'is_active',
      // 'tenant_id',
      // 'tenant_dbu',
			'type',
			'code_number',
			'description',
			'hierarchy',
			'tag_aka',
			'prior_number',
			'standardCode.code_number',
			'standardCode.description',
			'phasePicklist.description',
			'is_cost',
			'percent_of_cost',
			'percent_variance',
			'formula.description',
			'order_qty',
			'unitPicklist.description',
			'hours',
			'crew_size',
			'material_cost',
			'labor_cost',
			'other_cost',
			'sub_cost',
			'is_add_tax',
			'cost_total',
			'providerEntity.fullName',
			'realease',
			'postal_code',
			'note:ntext',
			'create_time',
			'createdByEntity.fullName',
			'update_time',
			'updatedByEntity.fullName',
		],
	]); ?>

</div>
