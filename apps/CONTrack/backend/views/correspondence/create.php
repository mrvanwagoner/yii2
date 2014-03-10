<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Correspondence $model
 */

$this->title = 'Create Correspondence';
$this->params['breadcrumbs'][] = ['label' => 'Correspondences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="correspondence-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
