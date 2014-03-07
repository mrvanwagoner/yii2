<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\CampaignStep $model
 */

$this->title = 'Create Campaign Step';
$this->params['breadcrumbs'][] = ['label' => 'Campaign Steps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-step-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
