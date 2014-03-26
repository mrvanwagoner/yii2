<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Account $model
 */

$this->title = 'Update Account: '; //CHANGED MVW 03/20/14: from id //FIXME Conditional base on type
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->description, 'url' => ['view', 'id' => $model->id]]; //CHANGED MVW 03/20/14: from id
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="account-update">

	<h1><?= Html::encode($this->title) ?><span class="small"><?= $model->description ?></span></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
