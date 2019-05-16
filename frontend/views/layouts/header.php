<?php

use yii\helpers\Html;

?>

<!-- top header -->
<div class="header navbar">
    <div class="brand visible-xs">
        <!-- toggle offscreen menu -->
        <div class="toggle-offscreen">
            <a href="javascript:;" class="hamburger-icon visible-xs" data-toggle="offscreen" data-move="ltr">
            <span></span>
            <span></span>
            <span></span>
            </a>
        </div>
        <!-- /toggle offscreen menu -->
        <!-- logo -->
        <a class="brand-logo">
        <span>AgencyJakarta</span>
        </a>
        <!-- /logo -->
    </div>
    <ul class="nav navbar-nav hidden-xs">
        <li>
            <a href="javascript:;" class="small-sidebar-toggle ripple" data-toggle="layout-small-menu">
            <i class="icon-toggle-sidebar"></i>
            </a>
        </li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right hidden-xs">
       
        <li>
            <a href="javascript:;" class="ripple" data-toggle="dropdown">
            <img src="images/avatar.jpg" class="header-avatar img-circle" alt="user" title="user">
            <span><?= Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->username ?></span>
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="javascript:;">Settings</a> </li>                
                <li role="separator" class="divider"></li>
                <li> <?=				  
                        Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout',
                            ['class' => 'item-logout']
                        )
                        . Html::endForm()
                    ?>
                </li>
            </ul>
        </li>       
    </ul>
</div>
<!-- /top header -->