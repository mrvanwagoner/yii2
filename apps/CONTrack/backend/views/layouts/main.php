<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use kartik\widgets\SideNav;

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
				'brandLabel' => 'CONTrack', //CHANGED MVY 02/25/14: Changed My Company to CONTrack
				'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-inverse navbar-fixed-top',
				],
			]);
			$menuItems = [
				['label' => 'Home', 'url' => ['/site/index']],
				['label' => 'Main', 'url' => ['../']], //CHANGED VJT 03/10/14
				['label' => 'Admin Pages', 'url' => ['/entity']] //CHANGED VJT 03/10/14,
      ];
			if (Yii::$app->user->isGuest) {
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

		<div class="container-fluid"><!--CHANGED VJT 03/10/14 -->
		<?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?>
    <div ><!--CHANGED VJT 3/10/14: add side links div sidenav-->
      	<ul style="list-style-type:none;margin:0 auto;">
        	<li style="display:inline;padding-right:15px;"><a href="/admin/account/">Accounts</a></li>
        	<li style="display:inline;padding-right:15px;"><a href="/admin/address/">Addresses</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/building/">Buildings</a></li>
        	<li style="display:inline;padding-right:15px;"><a href="/admin/campaign/">Campaigns</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/classification/">Classifications</a></li>
        	<li style="display:inline;padding-right:15px;"><a href="/admin/code/">Codes</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/contact/">Contacts</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/correspondence/">Correspondence</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/document/">Documents</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/email/">Email</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/entity/">Entities</a></li>
<!--          <li style="display:inline;padding-right:15px;"><a href="/admin/phone/">Phone</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/picklist/">Picklist</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/project/">Projects</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/project-team/">Project Team</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/rate/">Rates</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/relationship/">Relationships</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/role/">Roles</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/task/">Tasks</a></li>              
        </ul>-->
        
        <?php
        echo SideNav::widget([
	'type' => SideNav::TYPE_DEFAULT,
	'heading' => 'Options',
	'items' => [
		[
			'url' => '#',
			'label' => 'Home',
			'icon' => 'home'
		],
		[
			'label' => 'Help',
			'icon' => 'question-sign',
			'items' => [
				['label' => 'About', 'icon'=>'info-sign', 'url'=>'#'],
				['label' => 'Contact', 'icon'=>'phone', 'url'=>'#'],
			],
		],
	],
]);
        
        
        
        ?>
        
    </div><!-- end sidenav -->
		<?= $content ?>
		</div>
	</div>

	<footer class="footer">
		<div class="container-fluid"><!--CHANGED VJT 03/10/14 -->
  		<p class="pull-left">&copy; Dutch Web Development <?= date('Y') //CHANGED MVW 02/26/24: From My Company ?></p>
      <p class="pull-right"><?//= Yii::powered() //CHANGED MVW 02/26/24: Delete powered() ?></p>
		</div>
	</footer>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
