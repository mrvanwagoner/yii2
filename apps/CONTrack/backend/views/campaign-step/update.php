<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\CampaignStep $model
 */

$this->title = 'Update Campaign Step: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Campaign Steps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="campaign-step-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
