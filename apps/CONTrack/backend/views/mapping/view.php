<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\Mapping $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mappings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mapping-view">

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
			'lead_picklist_id',
			'source_field',
			'description_field',
			'is_map_field',
			'map_to_table',
			'map_to_field',
			'type',
			'record',
			'import_function',
			'note:ntext',
			'create_time',
			'created_by_entity_id',
			'update_time',
			'updated_by_entity_id',
		],
	]); ?>

</div>
