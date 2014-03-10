<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Mapping $model
 */

$this->title = 'Update Mapping: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mappings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mapping-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
