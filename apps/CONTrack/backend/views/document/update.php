<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Document $model
 */

$this->title = 'Update Document: ';
$this->params['breadcrumbs'][] = ['label' => 'Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="document-update">

	<h1><?= Html::encode($this->title) ?><span class="small"><?= $model->id ?></span></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
