<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Project $model
 */

$this->title = 'Update Project: ' . $model->description; //CHANGED MVW 03/20/14: from id
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->description, 'url' => ['view', 'id' => $model->id]]; //CHANGED MVW 03/20/14: from id
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
