<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Classification $model
 */

$this->title = 'Update Classification: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Classifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="classification-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
