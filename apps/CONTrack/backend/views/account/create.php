<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Account $model
 */

$this->title = 'Add Account'; //CHANGED MVW 03/22/14 //FIXME Conditional based on type
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
