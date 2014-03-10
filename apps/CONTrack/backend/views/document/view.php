<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var backend\models\Document $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-view">

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
			'document_number',
			'date_document',
			'description',
			'document_picklist_id',
			'is_file',
			'date_received',
			'file_name',
			'file_content_type',
			'file_size',
			'file_update_time',
			'is_email:email',
			'is_mail_merge',
			'is_deliverable',
			'subject',
			'body:ntext',
			'is_provided',
			'is_reviewed',
			'is_endorsed',
			'is_conforming',
			'note:ntext',
			'create_time',
			'created_by_entity_id',
			'update_time',
			'updated_by_entity_id',
		],
	]); ?>

</div>
