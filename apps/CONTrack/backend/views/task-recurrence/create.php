<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\TaskRecurrence $model
 */

$this->title = 'Create Task Recurrence';
$this->params['breadcrumbs'][] = ['label' => 'Task Recurrences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-recurrence-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
