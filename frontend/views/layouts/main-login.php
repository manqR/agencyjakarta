<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
	<!DOCTYPE html>
	<html lang="<?= Yii::$app->language ?>">
		<head>
            <meta charset="utf-8">
            <title>AgencyJakarta</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
            <!-- build:css({.tmp,app}) styles/app.min.css -->
            <link rel="stylesheet" href="styles/webfont.css">
            <link rel="stylesheet" href="styles/climacons-font.css">
            <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.css">
            <link rel="stylesheet" href="styles/font-awesome.css">
            <link rel="stylesheet" href="styles/card.css">
            <link rel="stylesheet" href="styles/sli.css">
            <link rel="stylesheet" href="styles/animate.css">
            <link rel="stylesheet" href="styles/app.css">
            <link rel="stylesheet" href="styles/app.skins.css">
            <!-- endbuild -->
	
			<?= Html::csrfMetaTags() ?>
			<title><?= $this->title ?></title>
			<?php $this->head() ?>
		</head>
        <body class="page-loading">
            <!-- page loading spinner -->
            <div class="pageload">
                <div class="pageload-inner">
                <div class="sk-rotating-plane"></div>
                </div>
            </div>
			<?php $this->beginBody() ?>
			<div class="app signin usersession">
                <div class="session-wrapper">
                    <div class="page-height-o row-equal align-middle">
                        <div class="column">
                           
                            <div class="bg-white card-block">
							
						        <?= $content ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
				
				<footer class="session-footer">
                   
                </footer>
		     </div>
			<?php $this->endBody() ?>
			
		</body>
	</html>
<?php $this->endPage() ?>
