<a href="update.php" id="" title="update">update</a><?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Contact $model
 */

$this->title = 'Contact: ' .$model->entityFullName; //CHANGED MVW 03/20/14: from 'Update Contact: ' . $model->id
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type, 'url' => ['view', 'id' => $model->id]]; //CHANGED MVW 03/20/14: from id //FIXME OR description
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contact-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
