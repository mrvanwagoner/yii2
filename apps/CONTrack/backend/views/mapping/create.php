<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Mapping $model
 */

$this->title = 'Create Mapping';
$this->params['breadcrumbs'][] = ['label' => 'Mappings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mapping-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
