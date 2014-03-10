<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>
	<div class="wrap">
		<?php
			NavBar::begin([
        //CHANGED MVY 02/25/14: Changed My Company to CONTrack
				'brandLabel' => 'CONTrack',
				'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-inverse navbar-fixed-top',
				],
			]);
			$menuItems = [
				['label' => 'Home', 'url' => ['/site/index']],
				//['label' => 'About', 'url' => ['/site/about']], //CHANGED VJT 03/08/14
				['label' => 'Admin', 'url' => ['/admin/']],
				['label' => 'Contact', 'url' => ['/site/contact']], //CHANGED VJT 03/08/14
			];
			if (Yii::$app->user->isGuest) {
        //CHANGED MVW 02/26/14: Was Signup
				$menuItems[] = ['label' => 'Enroll', 'url' => ['/site/signup']];
				$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
			} else {
				$menuItems[] = [
					'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
					'url' => ['/site/logout'],
					'linkOptions' => ['data-method' => 'post']
				];
			}
			echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-right'],
				'items' => $menuItems,
			]);
			NavBar::end();
		?>

		<div class="container">
		<?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?>
		<?= Alert::widget() ?>
		<?= $content ?>
		</div>
	</div>
	
	<footer class="footer">
		<div class="container">
    <? //CHANGED MVW 02/26/24: From My Company ?>
		<p class="pull-left">&copy; Dutch Web Development <?= date('Y') ?></p>
    <? //CHANGED MVW 02/26/24: Delete powered() ?>
    <p class="pull-right"><?//= Yii::powered() ?></p>
		</div>
	</footer>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
