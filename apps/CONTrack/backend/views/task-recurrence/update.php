<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\TaskRecurrence $model
 */

$this->title = 'Update Task Recurrence: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Task Recurrences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-recurrence-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
