<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Code $model
 */

$this->title = 'Update Code: '; //CHANGED MVW 03/20/14: from id
$this->params['breadcrumbs'][] = ['label' => 'Codes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->description, 'url' => ['view', 'id' => $model->id]]; //CHANGED MVW 03/20/14: from id
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="code-update">

	<h1><?= Html::encode($this->title) ?><span class="small"><?= $model->description ?></span></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
