<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Relationship $model
 */

$this->title = 'Create Relationship';
$this->params['breadcrumbs'][] = ['label' => 'Relationships', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relationship-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
