<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\ProjectTeam $model
 */

$this->title = 'Update Project Team: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Project Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-team-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
