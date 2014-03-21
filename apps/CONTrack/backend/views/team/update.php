<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Team $model
 */

$this->title = 'Update Team Member: ' . $model->entityFullName; //CHANGED MVW 03/20/14: from id
$this->params['breadcrumbs'][] = ['label' => 'Project', 'url' => ['index']];//CHANGED MVW 03/20/14 FIXME verify url goes to parent Project
$this->params['breadcrumbs'][] = ['label' => 'Team', 'url' => ['index']];//CHANGED MVW 03/20/14
$this->params['breadcrumbs'][] = ['label' => $model->type, 'url' => ['view', 'id' => $model->id]]; //CHANGED MVW 03/20/14: from id
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="team-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
