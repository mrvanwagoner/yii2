<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Picklist $model
 */

$this->title = 'Create Picklist';
$this->params['breadcrumbs'][] = ['label' => 'Picklists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="picklist-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
