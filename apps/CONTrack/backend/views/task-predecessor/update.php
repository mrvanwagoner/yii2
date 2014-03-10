<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\TaskPredecessor $model
 */

$this->title = 'Update Task Predecessor: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Task Predecessors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-predecessor-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
