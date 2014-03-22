<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Project $model
 */

<<<<<<< HEAD
$this->title = $model->description; //CHANGED MVW 03/20/14: from 'Update Project: ' . $model->id
=======
$this->title = 'Project: ' ; //CHANGED MVW 03/20/14: from id  //CHANGED VJT 03/20/14 removed . $model->description
>>>>>>> 2f28c0dd125f674959bedfc132e99d8023bf854a
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->description, 'url' => ['view', 'id' => $model->id]]; //CHANGED MVW 03/20/14: from id

$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-update">

	<h1><?= Html::encode($this->title) ?><span class="small"><?= $model->description ?></span></h1><!-- CHANGED VJT 03/20/14 added span and description -->

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
