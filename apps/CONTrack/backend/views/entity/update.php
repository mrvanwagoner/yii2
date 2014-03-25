<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Entity $model
 */

$this->title = 'Update Entity: ';//CHANGED VJT 03/24/14 deleted .$model->name
$this->params['breadcrumbs'][] = ['label' => 'Entities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="entity-update">

		<h1><?= Html::encode($this->title) ?><span class="small"><?= $model->name ?></span></h1><!-- CHANGED VJT 03/21/14 added span and entityfullname -->

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
