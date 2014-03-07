<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Code $model
 */

$this->title = 'Create Code';
$this->params['breadcrumbs'][] = ['label' => 'Codes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="code-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
