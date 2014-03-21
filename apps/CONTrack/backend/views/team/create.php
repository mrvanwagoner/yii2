<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Team $model
 */

$this->title = 'Add Team Member'; //CHANGED MVW 03/20/14
$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
