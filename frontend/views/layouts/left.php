 
 <?php

    use yii\helpers\Html;

    $this->registerJs('
		
        $(function () {				
            
            var url = document.URL;; 
            console.log("url",url);
            var activePage = url.substring(url.lastIndexOf("?") + 1);	
            console.log("aktif",activePage);
            $(".nav li a").each(function () { 
                var linkPage = this.href.substring(this.href.lastIndexOf("?") + 1);
                console.log("linkpage",linkPage)
                var $this = $(this);
                var activePageSplit = activePage.split("-");
                
                if (activePage == linkPage || activePageSplit[0] == linkPage) {																										
                    $(this).parents("li").addClass("open");												
                }
                
            });
        })
        
    ');
 ?>
 
 <!-- sidebar panel -->
 <div class="sidebar-panel offscreen-left">
    <div class="brand">
        <!-- toggle small sidebar menu -->
        <a href="javascript:;" class="toggle-apps hidden-xs" data-toggle="quick-launch">
        <i class="icon-grid"></i>
        </a>
        <!-- /toggle small sidebar menu -->
        <!-- toggle offscreen menu -->
        <div class="toggle-offscreen">
            <a href="javascript:;" class="visible-xs hamburger-icon" data-toggle="offscreen" data-move="ltr">
            <span></span>
            <span></span>
            <span></span>
            </a>
        </div>
        <!-- /toggle offscreen menu -->
        <!-- logo -->
        <a href="<?= Yii::$app->homeUrl; ?>" class="brand-logo">
        <span>AgencyJakarta</span>
        </a>
        <a href="#" class="small-menu-visible brand-logo">R</a>
        <!-- /logo -->
    </div>
    <ul class="quick-launch-apps hide">
        <li>
            <a href="?r=event/index">
            <span class="app-icon bg-danger text-white">
            E
            </span>
            <span class="app-title">Event</span>
            </a>
        </li>
        <li>
            <a href="?r=contract/index">
            <span class="app-icon bg-success text-white">
            C
            </span>
            <span class="app-title">Contract</span>
            </a>
        </li>
        <li>
            <a href="?r=spg/index">
            <span class="app-icon bg-primary text-white">
            S
            </span>
            <span class="app-title">SPG</span>
            </a>
        </li>
        <li>
            <a href="?r=schedule/index">
            <span class="app-icon bg-info text-white">
            SC
            </span>
            <span class="app-title">Schedule</span>
            </a>
        </li>
    </ul>
    <!-- main navigation -->
    <nav role="navigation">
        <ul class="nav">
            <?=		''		  
                //Html::beginForm(['/site/logout'], 'post')
                //. Html::submitButton(
                //    'Logout',
                //    ['class' => 'item-logout']
                //)
                //. Html::endForm()
            ?>
            <!-- dashboard -->
            <li>
                <a href="<?= Yii::$app->homeUrl; ?>">
                <i class="icon-compass"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <!-- /dashboard -->
           
           
            <!-- Client -->
            <li>
                <a href="javascript:;">
                <i class="icon-cursor"></i>
                <span>Client</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="?r=client/index">
                        <span>Register</span>
                        </a>
                    </li>
                    <li>
                        <a href="?r=contract/index">
                        <span>Contract</span>
                        </a>
                    </li>
                    <li>
                        <a href="?r=tagihan-client/index">
                        <span>Invoice</span>
                        </a>
                    </li>  
                    <li>
                        <a href="?r=client-payment/index">
                        <span>Payment</span>
                        </a>
                    </li>                   
                                    
                </ul>
            </li>
            <!-- /Client -->
            <!-- SPG -->
            <li>
                <a href="javascript:;">
                <i class="icon-bag"></i>
                <span>SPG</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="?r=spg/index">
                        <span>Register</span>
                        </a>
                    </li>
                    <li>
                        <a href="?r=spg/absent">
                        <span>Absent</span>
                        </a>
                    </li>
                    <li>
                        <a href="?r=spg/salary">
                        <span>Salary</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- /SPG -->
            <!-- Event -->
            <li>
                <a href="javascript:;">
                <i class="icon-book-open"></i>
                <span>Events</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="?r=event/index">
                        <span>Create Event</span>
                        </a>
                    </li>
                    <li>
                        <a href="?r=event/schedule">
                        <span>Schedule</span>
                        </a>
                    </li>                    
                </ul>
            </li>
            <!-- /Event -->
            <!-- Settings -->
            <li>
                <a href="javascript:;">
                <i class="icon-loop"></i>
                <span>Settings</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="?r=slider/index">
                        <span>Slider Mobile</span>
                        </a>
                    </li>
                    <li>
                        <a href="?r=site/signup">
                        <span>User</span>
                        </a>
                    </li>
                    <li>
                        <a href="?r=role/index">
                        <span>Role</span>
                        </a>
                    </li>
                    <li>
                        <a href="?r=notification/index">
                        <span>Push Notification</span>
                        </a>
                    </li>
                   
                </ul>
            </li>
            <!-- /Settings -->
           
            <!-- documentation -->
            <li>
                <a href="http://reactor.nyasha.me/documentation" target="_blank">
                <i class="icon-layers"></i>
                <span>Documentation</span>
                </a>
            </li>
            <!-- /documentation -->
        </ul>
    </nav>
    <!-- /main navigation -->
</div>
<!-- /sidebar panel -->