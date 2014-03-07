<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Formula $model
 */

$this->title = 'Create Formula';
$this->params['breadcrumbs'][] = ['label' => 'Formulas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formula-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
