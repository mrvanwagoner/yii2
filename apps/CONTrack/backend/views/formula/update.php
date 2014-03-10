<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Formula $model
 */

$this->title = 'Update Formula: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Formulas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="formula-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
