<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\ContactLog $model
 */

$this->title = 'Update Contact Log: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contact Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contact-log-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
