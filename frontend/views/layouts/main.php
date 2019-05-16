<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

// AppAsset::register($this);

if (Yii::$app->controller->action->id === 'login'){ 

    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {
    
    AppAsset::register($this);
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@web/backend/layout');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<body class="page-loading">
        <!-- page loading spinner -->
        <div class="pageload">
            <div class="pageload-inner">
                <div class="sk-rotating-plane"></div>
            </div>
        </div>
        <!-- /page loading spinner -->
        <div class="app layout-fixed-header">

            <?= $this->render(
                'left.php',
                ['directoryAsset' => $directoryAsset]) 
			?>

            <!-- content panel -->
            <div class="main-panel">
                <?= $this->render(
					'header.php',
					['directoryAsset' => $directoryAsset]) 
				?>

                <!-- main area -->
                <div class="main-content">
                    <?= Breadcrumbs::widget([
						'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) 
                    ?> 

                    <?= $content ?> <!-- Content Area -->	
                </div>
                <!-- /main area -->
            </div>
            <?= $this->render(
				'footer.php',
				['directoryAsset' => $directoryAsset]) 
			?>
					
   
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php } ?>
