<a href="update.php" id="" title="update">update</a><?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Contact $model
 */

$this->title = 'Contact: '; //CHANGED MVW 03/20/14: from 'Update Contact: ' . $model->id //CHANGED VJT 03/21/14 removed . $model->description
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type, 'url' => ['view', 'id' => $model->id]]; //CHANGED MVW 03/20/14: from id //FIXME OR description
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contact-update">

	<h1><?= Html::encode($this->title) ?><span class="small"><?= $model->entityFullName ?></span></h1><!-- CHANGED VJT 03/21/14 added span and entityfullname -->


	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>


