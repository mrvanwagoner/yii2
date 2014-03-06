<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var \frontend\models\SignupForm $model
 */
//CHANGED MVW 02/26/14: Was Signup
$this->title = 'Enroll';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
	<h1><?= Html::encode($this->title) ?></h1>

  <? //CHANGED MVW 02/26/14: Was 'signup' ?>
	<p>Please fill out the following fields to enroll:</p>

	<div class="row">
		<div class="col-lg-5">
			<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
				<?= $form->field($model, 'username') ?>
        <? //CHANGED MVW 02/26/14: Username is email ?>
        <!-- <?= $form->field($model, 'email') ?> -->
				<?= $form->field($model, 'password')->passwordInput() ?>
				<div class="form-group">
          <? //CHANGED MVW 02/26/14: Was 'Signup' ?>
					<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
