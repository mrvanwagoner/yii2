<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use kartik\widgets\SideNav;
use kartik\icons\Icon;
Icon::map($this);

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
				'brandLabel' => ' ',
				'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-inverse navbar-fixed-top',
				],
			]);
			$menuItems = [
				['label' => 'Home', 'url' => ['/site/index']],
				['label' => 'Main', 'url' => ['../']], //CHANGED VJT 03/10/14
				['label' => 'Admin Pages', 'url' => ['/project']] //CHANGED VJT 03/10/14,
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

		<div class="container-fluid">
        <div class="row-fluid">
        
		<?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?><br>
<!--    <div >
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
          <li style="display:inline;padding-right:15px;"><a href="/admin/phone/">Phone</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/picklist/">Picklist</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/project/">Projects</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/project-team/">Project Team</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/rate/">Rates</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/relationship/">Relationships</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/role/">Roles</a></li>
          <li style="display:inline;padding-right:15px;"><a href="/admin/task/">Tasks</a></li>              
        </ul>
    </div> --><!-- end inline nav -->
     <div class="col-lg-3" role="navigation">     
        <?php
        echo SideNav::widget([
	'type' => SideNav::TYPE_DEFAULT,
	'heading' => 'Admin Pages',
	'items' => [
		[
			'url' => '/admin',
			'label' => 'Home',
			'icon' => 'home' //FIXME List of icons: http://getbootstrap.com/2.3.2/base-css.html#images, http://glyphicons.com
		],
		[
			'label' => 'Projects',
			'icon' => 'picture', //'icon'=>'th', 'icon' => 'th-large', 'picture'
			'items' => [
				['label' => 'Project', 'icon'=>'th-list', 'url'=>'/admin/project'],
				['label' => 'Addresses', 'icon'=>'tree-deciduous', 'url'=>'/admin/address'],
				['label' => 'Buildings', 'icon'=>'tower', 'url'=>'/admin/building'],
				['label' => 'Project Team', 'icon'=>'user', 'url'=>'/admin/team'],
				['label' => 'Tasks', 'icon'=>'list-alt', 'url'=>'/admin/task'], //'icon'=>'list-alt', 'calendar'
			],
		],
		[
			'label' => 'Contacts',
			'icon' => 'user',  //'user', 'globe'
			'items' => [
				['label' => 'Contacts', 'icon'=>'earphone', 'url'=>'/admin/contact'], //'phone'
				['label' => 'Roles', 'icon'=>'user', 'url'=>'/admin/role'],
				['label' => 'Addresses', 'icon'=>'tree-deciduous', 'url'=>'/admin/address'], //'tree-deciduous', 'tree-conifer'
				['label' => 'Phone', 'icon'=>'phone-alt', 'url'=>'/admin/phone'],
				['label' => 'Email', 'icon'=>'envelope', 'url'=>'/admin/email'],
				['label' => 'Entities', 'icon'=>'briefcase', 'url'=>'/admin/entity'], //'briefcase'
				['label' => 'Relationships', 'icon'=>'random', 'url'=>'/admin/relationship'], //'th', 'globe', 'random'
			],
		],
		[
			'label' => 'Budget/Draws',
			'icon' => 'usd', //'envelope'. 'music', 'shopping-cart', credit-card
			'items' => [
				['label' => 'Accounts', 'icon'=>'folder-open', 'url'=>'/admin/account'],
			],
		],
		[
			'label' => 'Progress/Inspections',
			'icon' => 'camera', //'lock', 'unlock', 'search'
			'items' => [
				['label' => 'Accounts', 'icon'=>'folder-open', 'url'=>'/admin/account'],
				['label' => 'Comments', 'icon'=>'pencil', 'url'=>'/admin/document'],
				['label' => 'Documents', 'icon'=>'file', 'url'=>'/admin/document'], //'icon'=>'file'
			],
		],
		[
			'label' => 'Campaigns',
			'icon' => 'envelope',
			'items' => [
				['label' => 'Campaigns', 'icon'=>'tasks', 'url'=>'/admin/campaign'],
				['label' => 'Correspondence', 'icon'=>'send', 'url'=>'/admin/correspondence'],
			],
		],
		[
			'label' => 'Support',
 			'icon' => 'cog', //'icon' => 'hdd', 'cog', 'wrench'
			'items' => [
				['label' => 'Classifications', 'icon'=>'list-alt', 'url'=>'/admin/classification'],
				['label' => 'Codes', 'icon'=>'qrcode', 'url'=>'/admin/code'],
				['label' => 'Picklist', 'icon'=>'ok', 'url'=>'/admin/picklist'],
				['label' => 'Rates', 'icon'=>'signal', 'url'=>'/admin/rate'],
			],
		],
	],
]);       
        ?>
        </div>  
      <div class="col-lg-9">  
    
		<?= $content ?>
		</div><!-- end col-sm-9 -->
        </div><!-- end row-fluid -->
	</div><!-- end container-fluid -->
</div><!-- end wrap -->
	<footer class="footer">
		<div class="container-fluid"><!--CHANGED VJT 03/10/14 -->
  		<p class="pull-left">&copy; Dutch Web Development 1982 - <?= date('Y') //CHANGED MVW 02/26/24: From My Company ?></p>
      <p class="pull-right"><?//= Yii::powered() //CHANGED MVW 02/26/24: Delete powered() ?></p>
		</div>
	</footer>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
