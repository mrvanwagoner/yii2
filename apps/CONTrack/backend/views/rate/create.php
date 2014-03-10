<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Rate $model
 */

$this->title = 'Create Rate';
$this->params['breadcrumbs'][] = ['label' => 'Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rate-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
