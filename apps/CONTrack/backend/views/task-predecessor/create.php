<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\TaskPredecessor $model
 */

$this->title = 'Create Task Predecessor';
$this->params['breadcrumbs'][] = ['label' => 'Task Predecessors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-predecessor-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
