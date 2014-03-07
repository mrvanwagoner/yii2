<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\ContactLog $model
 */

$this->title = 'Create Contact Log';
$this->params['breadcrumbs'][] = ['label' => 'Contact Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-log-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
