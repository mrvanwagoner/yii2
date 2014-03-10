<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Classification $model
 */

$this->title = 'Create Classification';
$this->params['breadcrumbs'][] = ['label' => 'Classifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classification-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
