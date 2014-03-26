<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Relationship $model
 */

$this->title = 'Update Relationship: ';
$this->params['breadcrumbs'][] = ['label' => 'Relationships', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="relationship-update">

	<h1><?= Html::encode($this->title) ?><span class="small"><?= $model->id ?></span></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
