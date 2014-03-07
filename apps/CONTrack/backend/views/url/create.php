<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Url $model
 */

$this->title = 'Create Url';
$this->params['breadcrumbs'][] = ['label' => 'Urls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="url-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
