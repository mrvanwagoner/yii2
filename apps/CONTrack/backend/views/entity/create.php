<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Entity $model
 */

$this->title = 'Create Entity';
$this->params['breadcrumbs'][] = ['label' => 'Entities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entity-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
