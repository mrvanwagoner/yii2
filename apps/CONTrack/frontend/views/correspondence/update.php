<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Correspondence $model
 */

$this->title = 'Update Correspondence: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Correspondences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="correspondence-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
