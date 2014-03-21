<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Contact $model
 */

$this->title = 'Create Contact'; //CHANGED MVW 03/20/14
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
