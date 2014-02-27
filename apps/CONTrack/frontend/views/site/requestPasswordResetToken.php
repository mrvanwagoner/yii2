<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var \frontend\models\PasswordResetRequestForm $model
 */
//CHANGED MVW 02/26/14: Was Request password reset
$this->title = 'Request new password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">
	<h1><?= Html::encode($this->title) ?></h1>

  <? //CHANGED MVW 02/26/14: Was 'Please fill out your email. A link to reset password will be sent there' ?>
  <? //FIXME Shouldn't the email be automatic? If not, anyone could get a new password? VERIFY ?>
	<p>Please enter your email and a link to reset your password will be sent to you.</p>

	<div class="row">
		<div class="col-lg-5">
			<?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
				<?= $form->field($model, 'email') ?>
				<div class="form-group">
					<?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
