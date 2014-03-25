<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Team $model
 */

$this->title = 'Update Team Member: ' ; //CHANGED MVW 03/20/14: from id
$this->params['breadcrumbs'][] = ['label' => 'Project', 'url' => ['index']];//CHANGED MVW 03/20/14 FIXME verify url goes to parent Project
$this->params['breadcrumbs'][] = ['label' => 'Team', 'url' => ['index']];//CHANGED MVW 03/20/14
$this->params['breadcrumbs'][] = ['label' => $model->type, 'url' => ['view', 'id' => $model->id]]; //CHANGED MVW 03/20/14: from id
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="team-update">

	<h1><?= Html::encode($this->title) ?><span class="small"><?= $model->entityFullName ?></span></h1><!-- CHANGED VJT 03/21/14 added span and fullname -->


	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>