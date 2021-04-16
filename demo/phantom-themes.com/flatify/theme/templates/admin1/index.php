<?php
include('header.php');
?><!-- /Page Header -->
                <!-- Page Inner -->
                <div class="page-inner no-page-title">
                    <div id="main-wrapper">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-darkblue">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Tasks<span class="panel-title-small">in 30 days</span></h4>
                                    </div>
                                    <div class="panel-body dashboard-panel dashboard-task-panel">
                                        <div id="flot1"><svg></svg></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-darkblue">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Browser Stats<span class="panel-title-small">this week</span></h4>
                                    </div>
                                    <div class="panel-body dashboard-panel">
                                        <div class="browser-stats">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-chrome"></i>Chrome<div class="text-success pull-right">32%<i class="fa fa-level-up"></i></div></li>
                                                <li><i class="fa fa-firefox"></i>Firefox<div class="text-success pull-right">25%<i class="fa fa-level-up"></i></div></li>
                                                <li><i class="fa fa-edge"></i>Edge<div class="text-success pull-right">16%<i class="fa fa-level-up"></i></div></li>
                                                <li><i class="fa fa-safari"></i>Safari<div class="text-danger pull-right">13%<i class="fa fa-level-down"></i></div></li>
                                            </ul>
                                        </div>
                                        <button type="button" class="btn btn-default btn-rounded dashboard-browsers-showall">Show all</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-darkblue">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Server Status</h4>
                                    </div>
                                    <div class="panel-body dashboard-panel">
                                        <div class="container-fluid">
                                            <div class="server-load row">
                                                <div class="server-stat col-sm-4">
                                                    <p>167GB</p>
                                                    <span>Usage</span>
                                                </div>
                                                <div class="server-stat col-sm-4">
                                                    <p>320GB</p>
                                                    <span>Space</span>
                                                </div>
                                                <div class="server-stat col-sm-4">
                                                    <p>57.4%</p>
                                                    <span>CPU</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="chart1"><svg></svg></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-darkblue">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Activity</h4>
                                    </div>
                                    <div class="panel-body dashboard-panel">
                                        <div class="user-activity">
                                            <ul class="list-unstyled">
                                                    <li>
                                                        <div>
                                                            <span class="notification-badge bg-danger"><b>B</b></span>
                                                            <span class="notification-info">
                                                                <span class="notification-info"><b>Bob</b> sent you a friend request on Facebook</span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <span class="notification-badge bg-success"><b>N</b></span>
                                                            <span class="notification-info">
                                                                <span class="notification-info"><b>Noah</b> sent you 9 new messages today</span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <span class="notification-badge bg-primary"><b>T</b></span>
                                                            <span class="notification-info">
                                                                <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!</span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            <button type="button" class="btn btn-default btn-rounded dashboard-activity-loadmore">Load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-darkblue">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">System Status<span class="panel-title-small">today</span></h4>
                                    </div>
                                    <div class="panel-body dashboard-panel">
                                        <p class="system--dashboard-panel">Sales Ipsum is simply dummy text of the printing and typesetting industry</p>
                                        <p>Delivered</p>
                                        <div class="progress progress-rounded">
                                            <div class="progress-bar progress-bar-success progress-bar-comp-60">
                                                <span class="sr-only">60%</span>
                                            </div>
                                        </div>
                                        <p>Reported</p>
                                        <div class="progress progress-rounded">
                                            <div class="progress-bar progress-bar-info progress-bar-comp-45">
                                                <span class="sr-only">45%</span>
                                            </div>
                                        </div>
                                        <p>Arrived</p>
                                        <div class="progress progress-rounded m-b-lg">
                                            <div class="progress-bar progress-bar-danger progress-bar-comp-35">
                                                <span class="sr-only">35%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-darkblue">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Messages</h4>
                                    </div>
                                    <div class="panel-body dashboard-panel">
                                        <div class="user-activity">
                                            <ul class="list-unstyled">
                                                    <li>
                                                        <div>
                                                            <img src="../../assets/images/avatars/avatar3.png" alt="">
                                                            <span class="notification-info">
                                                                <span class="notification-info">Lorem ipsum dolor sit amet, consectetur</span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <img src="../../assets/images/avatars/avatar2.png" alt="">
                                                            <span class="notification-info">
                                                                <span class="notification-info">Curabitur feugiat et dui eget sit ipsum</span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <img src="../../assets/images/avatars/avatar4.png" alt="">
                                                            <span class="notification-info">
                                                                <span class="notification-info">Quisque non ullamcorper orci, eget lacinia elit</span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            <button type="button" class="btn btn-info btn-rounded dashboard-activity-loadmore">Load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row -->
                        <div class="row">
                            
                        </div><!-- Row -->
                    </div><!-- Main Wrapper -->

               <?php
			   include('footer.php');
			   ?>
                </div><!-- /Page Inner -->
                <div class="page-right-sidebar" id="main-right-sidebar">
                    <div class="page-right-sidebar-inner">
                        <div class="right-sidebar-top">
                            <div class="right-sidebar-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active" id="chat-tab"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">chat</a></li>
                                    <li role="presentation" id="settings-tab"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">settings</a></li>
                                </ul>
                            </div>
                            <a href="javascript:void(0)" class="right-sidebar-toggle right-sidebar-close" data-sidebar-id="main-right-sidebar"><i class="icon-close"></i></a>
                        </div>
                        <div class="right-sidebar-content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="chat">
                                    <div class="chat-list">
                                        <span class="chat-title">Recent</span>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar1.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">David</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">16:20</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar2.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Bob</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">11:34</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="chat-list">
                                        <span class="chat-title">Older</span>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar3.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Tom</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">2d</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar4.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Anna</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">4d</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar5.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Noah</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">&nbsp;</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="load-more-messages"  data-toggle="tooltip" data-placement="bottom" title="Load More">&bull;&bull;&bull;</a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="settings">
                                    <div class="right-sidebar-settings">
                                        <span class="settings-title">General</span>
                                        <ul class="sidebar-setting-list list-unstyled">
                                            <li>
                                                <span class="settings-option">Notifications</span><input type="checkbox" class="js-switch" checked />
                                            </li>
                                            <li>
                                                <span class="settings-option">Activity log</span><input type="checkbox" class="js-switch" checked />
                                            </li>
                                            <li>
                                                <span class="settings-option">Automatic updates</span><input type="checkbox" class="js-switch" />
                                            </li>
                                            <li>
                                                <span class="settings-option">Allow backups</span><input type="checkbox" class="js-switch" />
                                            </li>
                                        </ul>
                                        <span class="settings-title">Account</span>
                                        <ul class="sidebar-setting-list list-unstyled">
                                            <li>
                                                <span class="settings-option">Chat</span><input type="checkbox" class="js-switch" checked />
                                            </li>
                                            <li>
                                                <span class="settings-option">Incognito mode</span><input type="checkbox" class="js-switch" />
                                            </li>
                                            <li>
                                                <span class="settings-option">Public profile</span><input type="checkbox" class="js-switch" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-right-sidebar" id="chat-right-sidebar">
                    <div class="page-right-sidebar-inner">
                        <div class="right-sidebar-top">
                            <div class="chat-top-info">
                                <span class="chat-name">Noah</span>
                                <span class="chat-state">2h ago</span>
                            </div>
                            <a href="javascript:void(0)" class="right-sidebar-toggle chat-sidebar-close pull-right" data-sidebar-id="chat-right-sidebar"><i class="icon-keyboard_arrow_right"></i></a>
                        </div>
                        <div class="right-sidebar-content">
                            <div class="right-sidebar-chat slimscroll">
                                <div class="chat-bubbles">
                                <div class="chat-start-date">02/06/2017 5:58PM</div>
                                    <div class="chat-bubble them">
                                        <div class="chat-bubble-img-container">
                                            <img src="../../assets/images/avatars/avatar1.png" alt="">
                                        </div>
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">Hello</span>
                                        </div>
                                    </div>
                                    <div class="chat-bubble me">
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">Hello!</span>
                                        </div>
                                    </div>
                                <div class="chat-start-date">03/06/2017 4:22AM</div>
                                    <div class="chat-bubble me">
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">lorem</span>
                                        </div>
                                    </div>
                                    <div class="chat-bubble them">
                                        <div class="chat-bubble-img-container">
                                            <img src="../../assets/images/avatars/avatar1.png" alt="">
                                        </div>
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">ipsum dolor sit amet</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-write">
                                <form class="form-horizontal" action="javascript:void(0);">
                                    <input type="text" class="form-control" placeholder="Say something">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        <script src="../../assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../../assets/plugins/waves/waves.min.js"></script>
        <script src="../../assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="../../assets/plugins/switchery/switchery.min.js"></script>
        <script src="../../assets/plugins/d3/d3.min.js"></script>
        <script src="../../assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="../../assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="../../assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="../../assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="../../assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="../../assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="../../assets/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="../../assets/plugins/chartjs/chart.min.js"></script>
        <script src="../../assets/plugins/pace/pace.min.js"></script>
        <script src="../../assets/js/flatifytheme.min.js"></script>
        <script src="../../assets/js/pages/dashboard.js"></script>
    </body>

<!-- Mirrored from phantom-themes.com/flatify/theme/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 11:23:28 GMT -->
</html>