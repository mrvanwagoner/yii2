<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\ProjectTeam $model
 */

$this->title = 'Create Project Team';
$this->params['breadcrumbs'][] = ['label' => 'Project Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-team-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
