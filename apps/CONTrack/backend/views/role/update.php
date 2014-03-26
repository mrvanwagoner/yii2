<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Role $model
 */

$this->title = 'Update Role: ';
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="role-update">

	<h1><?= Html::encode($this->title) ?><span class="small"><?= $model->id ?></span></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
