<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<!--















THIS IS THE DEMO VERSION OF THE UI FRAMEWORK!
COMMENTS ARE REMOVED, CODE IS COMPRESSED AND CODE STYLE IS ALTERED!

IN THE FULL VERSION
    THE CODE IS INDENTED CORRECTLY AND WELL COMMENTED!
    YOU GET AN EXTENSIVE DOCUMENTATION TO GET YOU STARTED!
    YOU GET THE PHP VERSION (ALONG WITH THE HTML VERSION) WHICH HAS EXTRA FEATURES!
    YOU GET THE LessCSS FILES OF THE UI FRAMEWORK
    YOU GET GRUNT FILES FOR LIVE-COMPILING LessCSS FILES AND BUILDING YOU OWN UI FRAMEWORK
    YOU GET ACCESS TO FRAMEWORK UPDATES WITH NEW FEATURES AND PLUGIN UPGRADES
    I CAN PROVIDE SUPPORT IF YOU NEED IT :-)

THANK YOU FOR HAVING A LOOK!

** A LICENSE MUST BE ACQUIRED FOR LEGAL USE -> LINK: http://goo.gl/vNS3I **
** PLEASE SUPPORT ME IF YOU LIKE MY WORK, IT HELPS ME CONTINUE, THANK YOU VERY MUCH! **















-->
<title>OneUI - Admin Dashboard Template & UI Framework | DEMO</title>
<meta name="description" content="OneUI - Admin Dashboard Template & UI Framework created by pixelcave and published on Themeforest | This is the demo of OneUI! You need to purchase a license for legal use! | DEMO">
<meta name="author" content="pixelcave">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
<link rel="shortcut icon" href="assets/img/favicons/favicon.png">
<link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"><link rel="stylesheet" href="assets/css/bootstrap.min-1.3.css">
<link rel="stylesheet" id="css-main" href="assets/css/oneui.min-1.3.css">
</head>
<body><div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
<aside id="side-overlay">
<div id="side-overlay-scroll">
<div class="side-header side-content">
<button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
<i class="fa fa-times"></i>
</button>
<span>
<img class="img-avatar img-avatar32" src="assets/img/avatars/avatar10.jpg" alt="">
<span class="font-w600 push-10-l">Adam Hall</span>
</span>
</div>
<div class="side-content remove-padding-t">
<div class="block pull-r-l border-t">
<ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
<li class="active">
<a href="#tabs-side-overlay-overview"><i class="fa fa-fw fa-coffee"></i> Overview</a>
</li>
<li>
<a href="#tabs-side-overlay-sales"><i class="fa fa-fw fa-line-chart"></i> Sales</a>
</li>
</ul>
<div class="block-content tab-content">
<div class="tab-pane fade fade-right in active" id="tabs-side-overlay-overview">
<div class="block pull-r-l">
<div class="block-header bg-gray-lighter">
<ul class="block-options">
<li>
<button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
</li>
<li>
<button type="button" data-toggle="block-option" data-action="content_toggle"></button>
</li>
</ul>
<h3 class="block-title">Recent Activity</h3>
</div>
<div class="block-content">
<ul class="list list-activity">
<li>
<i class="si si-wallet text-success"></i>
<div class="font-w600">New sale ($15)</div>
<div><a href="javascript:void(0)">Admin Template</a></div>
<div><small class="text-muted">3 min ago</small></div>
</li>
<li>
<i class="si si-pencil text-info"></i>
<div class="font-w600">You edited the file</div>
<div><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> Documentation.doc</a></div>
<div><small class="text-muted">15 min ago</small></div>
</li>
<li>
<i class="si si-close text-danger"></i>
<div class="font-w600">Project deleted</div>
<div><a href="javascript:void(0)">Line Icon Set</a></div>
<div><small class="text-muted">4 hours ago</small></div>
</li>
</ul>
</div>
</div>
<div class="block pull-r-l">
<div class="block-header bg-gray-lighter">
<ul class="block-options">
<li>
<button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
</li>
<li>
<button type="button" data-toggle="block-option" data-action="content_toggle"></button>
</li>
</ul>
<h3 class="block-title">Online Friends</h3>
</div>
<div class="block-content block-content-full">
<ul class="nav-users remove-margin-b">
<li>
<a href="base_pages_profile.php">
<img class="img-avatar" src="assets/img/avatars/avatar8.jpg" alt="">
<i class="fa fa-circle text-success"></i> Ashley Welch
<div class="font-w400 text-muted"><small>Copywriter</small></div>
</a>
</li>
<li>
<a href="base_pages_profile.php">
<img class="img-avatar" src="assets/img/avatars/avatar13.jpg" alt="">
<i class="fa fa-circle text-success"></i> Eric Lawson
<div class="font-w400 text-muted"><small>Web Developer</small></div>
</a>
</li>
<li>
<a href="base_pages_profile.php">
<img class="img-avatar" src="assets/img/avatars/avatar2.jpg" alt="">
<i class="fa fa-circle text-success"></i> Denise Watson
<div class="font-w400 text-muted"><small>Web Designer</small></div>
</a>
</li>
<li>
<a href="base_pages_profile.php">
<img class="img-avatar" src="assets/img/avatars/avatar1.jpg" alt="">
<i class="fa fa-circle text-warning"></i> Helen Silva
<div class="font-w400 text-muted"><small>Photographer</small></div>
</a>
</li>
<li>
<a href="base_pages_profile.php">
<img class="img-avatar" src="assets/img/avatars/avatar9.jpg" alt="">
<i class="fa fa-circle text-warning"></i> Bruce Edwards
<div class="font-w400 text-muted"><small>Graphic Designer</small></div>
</a>
</li>
</ul>
</div>
</div>
<div class="block pull-r-l">
<div class="block-header bg-gray-lighter">
<ul class="block-options">
<li>
<button type="button" data-toggle="block-option" data-action="content_toggle"></button>
</li>
</ul>
<h3 class="block-title">Quick Settings</h3>
</div>
<div class="block-content">
<form class="form-bordered" action="index.php" method="post" onsubmit="return false;">
<div class="form-group">
<div class="row">
<div class="col-xs-8">
<div class="font-s13 font-w600">Online Status</div>
<div class="font-s13 font-w400 text-muted">Show your status to all</div>
</div>
<div class="col-xs-4 text-right">
<label class="css-input switch switch-sm switch-primary push-10-t">
<input type="checkbox"><span></span>
</label>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-xs-8">
<div class="font-s13 font-w600">Auto Updates</div>
<div class="font-s13 font-w400 text-muted">Keep up to date</div>
</div>
<div class="col-xs-4 text-right">
<label class="css-input switch switch-sm switch-primary push-10-t">
<input type="checkbox"><span></span>
</label>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-xs-8">
<div class="font-s13 font-w600">Notifications</div>
<div class="font-s13 font-w400 text-muted">Do you need them?</div>
</div>
<div class="col-xs-4 text-right">
<label class="css-input switch switch-sm switch-primary push-10-t">
<input type="checkbox" checked><span></span>
</label>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-xs-8">
<div class="font-s13 font-w600">API Access</div>
<div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
</div>
<div class="col-xs-4 text-right">
<label class="css-input switch switch-sm switch-primary push-10-t">
<input type="checkbox" checked><span></span>
</label>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="tab-pane fade fade-left" id="tabs-side-overlay-sales">
<div class="block pull-r-l">
<div class="block-content pull-t">
<div class="row items-push">
<div class="col-xs-6">
<div class="font-w700 text-gray-darker text-uppercase">Sales</div>
<a class="h3 font-w300 text-primary" href="javascript:void(0)">22030</a>
</div>
<div class="col-xs-6">
<div class="font-w700 text-gray-darker text-uppercase">Balance</div>
<a class="h3 font-w300 text-primary" href="javascript:void(0)">$ 4.589,00</a>
</div>
</div>
</div>
<div class="block-content block-content-full block-content-mini bg-gray-lighter">
<div class="row">
<div class="col-xs-6">
<span class="font-w600 font-s13 text-gray-darker text-uppercase">Today</span>
</div>
<div class="col-xs-6 text-right">
<span class="font-s13 text-muted">$996</span>
</div>
</div>
</div>
<div class="block-content">
<ul class="list list-activity pull-r-l">
<li>
<i class="fa fa-circle text-success"></i>
<div class="font-w600">New sale! + $249</div>
<div><small class="text-muted">3 min ago</small></div>
</li>
<li>
<i class="fa fa-circle text-success"></i>
<div class="font-w600">New sale! + $129</div>
<div><small class="text-muted">50 min ago</small></div>
</li>
<li>
<i class="fa fa-circle text-success"></i>
<div class="font-w600">New sale! + $119</div>
<div><small class="text-muted">2 hours ago</small></div>
</li>
<li>
<i class="fa fa-circle text-success"></i>
<div class="font-w600">New sale! + $499</div>
<div><small class="text-muted">3 hours ago</small></div>
</li>
</ul>
</div>
<div class="block-content block-content-full block-content-mini bg-gray-lighter">
<div class="row">
<div class="col-xs-6">
<span class="font-w600 font-s13 text-gray-darker text-uppercase">Yesterday</span>
</div>
<div class="col-xs-6 text-right">
<span class="font-s13 text-muted">$765</span>
</div>
</div>
</div>
<div class="block-content">
<ul class="list list-activity pull-r-l">
<li>
<i class="fa fa-circle text-success"></i>
<div class="font-w600">New sale! + $249</div>
<div><small class="text-muted">26 hours ago</small></div>
</li>
<li>
<i class="fa fa-circle text-danger"></i>
<div class="font-w600">Product Purchase - $50</div>
<div><small class="text-muted">28 hours ago</small></div>
</li>
<li>
<i class="fa fa-circle text-success"></i>
<div class="font-w600">New sale! + $119</div>
<div><small class="text-muted">29 hours ago</small></div>
</li>
<li>
<i class="fa fa-circle text-danger"></i>
<div class="font-w600">Paypal Withdrawal - $300</div>
<div><small class="text-muted">37 hours ago</small></div>
</li>
<li>
<i class="fa fa-circle text-success"></i>
<div class="font-w600">New sale! + $129</div>
<div><small class="text-muted">39 hours ago</small></div>
</li>
<li>
<i class="fa fa-circle text-success"></i>
<div class="font-w600">New sale! + $119</div>
<div><small class="text-muted">45 hours ago</small></div>
</li>
<li>
<i class="fa fa-circle text-success"></i>
<div class="font-w600">New sale! + $499</div>
<div><small class="text-muted">46 hours ago</small></div>
</li>
</ul>
</div>
<div class="text-center">
<small><a href="javascript:void(0)">Load More..</a></small>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</aside><nav id="sidebar">
<div id="sidebar-scroll">
<div class="sidebar-content">
<div class="side-header side-content bg-white-op">
<button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
<i class="fa fa-times"></i>
</button>
<div class="btn-group pull-right">
<button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
<i class="si si-drop"></i>
</button>
<ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
<li>
<a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
<i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
</a>
</li>
<li>
<a data-toggle="theme" data-theme="assets/css/themes/amethyst.min-1.3.css" tabindex="-1" href="javascript:void(0)">
<i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
</a>
</li>
<li>
<a data-toggle="theme" data-theme="assets/css/themes/city.min-1.3.css" tabindex="-1" href="javascript:void(0)">
<i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
</a>
</li>
<li>
<a data-toggle="theme" data-theme="assets/css/themes/flat.min-1.3.css" tabindex="-1" href="javascript:void(0)">
<i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
</a>
</li>
<li>
<a data-toggle="theme" data-theme="assets/css/themes/modern.min-1.3.css" tabindex="-1" href="javascript:void(0)">
<i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
</a>
</li>
<li>
<a data-toggle="theme" data-theme="assets/css/themes/smooth.min-1.3.css" tabindex="-1" href="javascript:void(0)">
<i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
</a>
</li>
</ul>
</div>
<a class="h5 text-white" href="index.php">
<i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">ne</span>
</a>
</div>
<div class="side-content">
<ul class="nav-main">
<li>
<a href="index.php"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
</li>
<li class="nav-main-heading"><span class="sidebar-mini-hide">User Interface</span></li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">UI Elements</span></a>
<ul>
<li>
<a href="base_ui_widgets.php">Widgets</a>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#">Blocks</a>
<ul>
<li>
<a href="base_ui_blocks.php">Styles</a>
</li>
<li>
<a href="base_ui_blocks_api.php">Blocks API</a>
</li>
<li>
<a href="base_ui_blocks_draggable.php">Draggable</a>
</li>
</ul>
</li>
<li>
<a href="base_ui_grid.php">Grid</a>
</li>
<li>
<a href="base_ui_typography.php">Typography</a>
</li>
<li>
<a href="base_ui_icons.php">Icons</a>
</li>
<li>
<a href="base_ui_buttons.php">Buttons</a>
</li>
<li>
<a href="base_ui_activity.php">Activity</a>
</li>
<li>
<a href="base_ui_tabs.php">Tabs</a>
</li>
<li>
<a href="base_ui_tiles.php">Tiles</a>
</li>
<li>
<a href="base_ui_ribbons.php">Ribbons</a>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#">Chat</a>
<ul>
<li>
<a href="base_ui_chat_full.php">Full</a>
</li>
<li>
<a href="base_ui_chat_fixed.php">Fixed</a>
</li>
<li>
<a href="base_ui_chat_popup.php">Popup</a>
</li>
</ul>
</li>
<li>
<a href="base_ui_timeline.php">Timeline</a>
</li>
<li>
<a href="base_ui_navigation.php">Navigation</a>
</li>
<li>
<a href="base_ui_modals_tooltips.php">Modals &amp; Tooltips</a>
</li>
<li>
<a href="base_ui_color_themes.php">Color Themes</a>
</li>
</ul>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Tables</span></a>
<ul>
<li>
<a href="base_tables_styles.php">Styles</a>
</li>
<li>
<a href="base_tables_responsive.php">Responsive</a>
</li>
<li>
<a href="base_tables_tools.php">Tools</a>
</li>
<li>
<a href="base_tables_pricing.php">Pricing</a>
</li>
<li>
<a href="base_tables_datatables.php">DataTables</a>
</li>
</ul>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Forms</span></a>
<ul>
<li>
<a href="base_forms_premade.php">Pre-made</a>
</li>
<li>
<a href="base_forms_elements.php">Elements</a>
</li>
<li>
<a href="base_forms_pickers_more.php">Pickers &amp; More</a>
</li>
<li>
<a href="base_forms_editors.php">Text Editors</a>
</li>
<li>
<a href="base_forms_validation.php">Validation</a>
</li>
<li>
<a href="base_forms_wizard.php">Wizard</a>
</li>
</ul>
</li>
<li class="nav-main-heading"><span class="sidebar-mini-hide">Develop</span></li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-wrench"></i><span class="sidebar-mini-hide">Components</span></a>
<ul>
<li>
<a href="base_comp_images.php">Images</a>
</li>
<li>
<a href="base_comp_charts.php">Charts</a>
</li>
<li>
<a href="base_comp_calendar.php">Calendar</a>
</li>
<li>
<a href="base_comp_sliders.php">Sliders</a>
</li>
<li>
<a href="base_comp_animations.php">Animations</a>
</li>
<li>
<a href="base_comp_scrolling.php">Scrolling</a>
</li>
<li>
<a href="base_comp_syntax_highlighting.php">Syntax Highlighting</a>
</li>
<li>
<a href="base_comp_rating.php">Rating</a>
</li>
<li>
<a href="base_comp_treeview.php">Tree View</a>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#">Maps</a>
<ul>
<li>
<a href="base_comp_maps.php">Google</a>
</li>
<li>
<a href="base_comp_maps_full.php">Google Full</a>
</li>
<li>
<a href="base_comp_maps_vector.php">Vector</a>
</li>
</ul>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#">Gallery</a>
<ul>
<li>
<a href="base_comp_gallery_simple.php">Simple</a>
</li>
<li>
<a href="base_comp_gallery_advanced.php">Advanced</a>
</li>
</ul>
</li>
</ul>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-magic-wand"></i><span class="sidebar-mini-hide">Layouts</span></a>
<ul>
<li>
<a href="base_layouts_api.php">Layout API</a>
</li>
<li>
<a href="base_layouts_default.php">Default</a>
</li>
<li>
<a href="base_layouts_default_flipped.php">Default Flipped</a>
</li>
<li>
<a href="base_layouts_header_static.php">Static Header</a>
</li>
<li>
<a href="base_layouts_sidebar_mini_hoverable.php">Mini Sidebar (Hoverable)</a>
</li>
<li>
<a href="base_layouts_side_overlay_hoverable.php">Side Overlay (Hoverable)</a>
</li>
<li>
<a href="base_layouts_side_overlay_open.php">Side Overlay (Open)</a>
</li>
<li>
<a href="base_layouts_side_native_scrolling.php">Side Native Scrolling</a>
</li>
<li>
<a href="base_layouts_sidebar_hidden.php">Hidden Sidebar</a>
</li>
</ul>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Multi Level Menu</span></a>
<ul>
<li>
<a href="#">Link 1-1</a>
</li>
<li>
<a href="#">Link 1-2</a>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 2</a>
<ul>
<li>
<a href="#">Link 2-1</a>
</li>
<li>
<a href="#">Link 2-2</a>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 3</a>
<ul>
<li>
<a href="#">Link 3-1</a>
</li>
<li>
<a href="#">Link 3-2</a>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 4</a>
<ul>
<li>
<a href="#">Link 4-1</a>
</li>
<li>
<a href="#">Link 4-2</a>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 5</a>
<ul>
<li>
<a href="#">Link 5-1</a>
</li>
<li>
<a href="#">Link 5-2</a>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 6</a>
<ul>
<li>
<a href="#">Link 6-1</a>
</li>
<li>
<a href="#">Link 6-2</a>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li class="nav-main-heading"><span class="sidebar-mini-hide">Pages</span></li>
<li class="open">
<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Generic</span></a>
<ul>
<li>
<a href="base_pages_blank.php">Blank</a>
</li>
<li>
<a href="base_pages_search.php">Search Results</a>
</li>
<li>
<a href="base_pages_invoice.php">Invoice</a>
</li>
<li>
<a href="base_pages_faq.php">FAQ</a>
</li>
<li>
<a href="base_pages_inbox.php">Inbox</a>
</li>
<li class="open">
<a class="nav-submenu" data-toggle="nav-submenu" href="#">User Profile</a>
<ul>
<li>
<a href="base_pages_profile.php">Profile</a>
</li>
<li>
<a href="base_pages_profile_v2.php">Profile v2</a>
</li>
<li>
<a class="active" href="base_pages_profile_edit.php">Profile Edit</a>
</li>
</ul>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#">Forum</a>
<ul>
<li>
<a href="base_pages_forum_categories.php">Categories</a>
</li>
<li>
<a href="base_pages_forum_topics.php">Topics</a>
</li>
<li>
<a href="base_pages_forum_discussion.php">Discussion</a>
</li>
<li>
<a href="base_pages_forum_new_topic.php">New Topic</a>
</li>
</ul>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#">Authentication</a>
<ul>
<li>
<a href="base_pages_login.php">Log In</a>
</li>
<li>
<a href="base_pages_login_v2.php">Log In v2</a>
</li>
<li>
<a href="base_pages_register.php">Register</a>
</li>
<li>
<a href="base_pages_register_v2.php">Register v2</a>
</li>
<li>
<a href="base_pages_lock.php">Lock Screen</a>
</li>
<li>
<a href="base_pages_lock_v2.php">Lock Screen v2</a>
</li>
<li>
<a href="base_pages_reminder.php">Password Reminder</a>
</li>
<li>
<a href="base_pages_reminder_v2.php">Password Reminder v2</a>
</li>
</ul>
</li>
<li>
<a href="base_pages_coming_soon.php">Coming Soon</a>
</li>
<li>
<a href="base_pages_maintenance.php">Maintenance</a>
</li>
</ul>
</li>
<li>
<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-fire"></i><span class="sidebar-mini-hide">Error Pages</span></a>
<ul>
<li>
<a href="base_pages_400.php">400</a>
</li>
<li>
<a href="base_pages_401.php">401</a>
</li>
<li>
<a href="base_pages_403.php">403</a>
</li>
<li>
<a href="base_pages_404.php">404</a>
</li>
<li>
<a href="base_pages_500.php">500</a>
</li>
<li>
<a href="base_pages_503.php">503</a>
</li>
</ul>
</li>
<li class="nav-main-heading"><span class="sidebar-mini-hide">Apps</span></li>
<li>
<a href="frontend_home.php"><i class="si si-rocket"></i><span class="sidebar-mini-hide">Frontend</span></a>
</li>
</ul>
</div>
</div>
</div>
</nav><header id="header-navbar" class="content-mini content-mini-full">
<ul class="nav-header pull-right">
<li>
<div class="btn-group">
<button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
<img src="assets/img/avatars/avatar10.jpg" alt="Avatar">
<span class="caret"></span>
</button>
<ul class="dropdown-menu dropdown-menu-right">
<li class="dropdown-header">Profile</li>
<li>
<a tabindex="-1" href="base_pages_inbox.php">
<i class="si si-envelope-open pull-right"></i>
<span class="badge badge-primary pull-right">3</span>Inbox
</a>
</li>
<li>
<a tabindex="-1" href="base_pages_profile.php">
<i class="si si-user pull-right"></i>
<span class="badge badge-success pull-right">1</span>Profile
</a>
</li>
<li>
<a tabindex="-1" href="javascript:void(0)">
<i class="si si-settings pull-right"></i>Settings
</a>
</li>
<li class="divider"></li>
<li class="dropdown-header">Actions</li>
<li>
<a tabindex="-1" href="base_pages_lock.php">
<i class="si si-lock pull-right"></i>Lock Account
</a>
</li>
<li>
<a tabindex="-1" href="base_pages_login.php">
<i class="si si-logout pull-right"></i>Log out
</a>
</li>
</ul>
</div>
</li>
<li>
<button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
<i class="fa fa-tasks"></i>
</button>
</li>
</ul>
<ul class="nav-header pull-left">
<li class="hidden-md hidden-lg">
<button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
<i class="fa fa-navicon"></i>
</button>
</li>
<li class="hidden-xs hidden-sm">
<button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
<i class="fa fa-ellipsis-v"></i>
</button>
</li>
<li>
<button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">
<i class="si si-grid"></i>
</button>
</li>
<li class="visible-xs">
<button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
<i class="fa fa-search"></i>
</button>
</li>
<li class="js-header-search header-search">
<form class="form-horizontal" action="base_pages_search.php" method="post">
<div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
<input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
<span class="input-group-addon"><i class="si si-magnifier"></i></span>
</div>
</form>
</li>
</ul>
</header><main id="main-container"><div class="content content-boxed">
<div class="block">
<div class="bg-image" style="background-image: url('assets/img/photos/photo3@2x.jpg');">
<div class="block-content bg-primary-op text-center overflow-hidden">
<div class="push-30-t push animated fadeInDown">
<img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/img/avatars/avatar10.jpg" alt="">
</div>
<div class="push-30 animated fadeInUp">
<h2 class="h4 font-w600 text-white push-5">Jeremy Fuller</h2>
<h3 class="h5 text-white-op">Web Designer</h3>
</div>
</div>
</div>
<div class="block-content text-center">
<div class="row items-push text-uppercase">
<div class="col-xs-6 col-sm-3">
<div class="font-w700 text-gray-darker animated fadeIn">Sales</div>
<a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">22000</a>
</div>
<div class="col-xs-6 col-sm-3">
<div class="font-w700 text-gray-darker animated fadeIn">Products</div>
<a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">16</a>
</div>
<div class="col-xs-6 col-sm-3">
<div class="font-w700 text-gray-darker animated fadeIn">Followers</div>
<a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">2600</a>
</div>
<div class="col-xs-6 col-sm-3">
<div class="font-w700 text-gray-darker animated fadeIn">3603 Ratings</div>
<div class="text-warning push-10-t animated flipInX">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>
</div>
</div>
</div>
<form action="pages_profile_edit.php" method="post" onsubmit="return false;">
<div class="block">
<ul class="nav nav-tabs nav-justified push-20" data-toggle="tabs">
<li class="active">
<a href="#tab-profile-personal"><i class="fa fa-fw fa-pencil"></i> Personal</a>
</li>
<li>
<a href="#tab-profile-password"><i class="fa fa-fw fa-asterisk"></i> Password</a>
</li>
<li>
<a href="#tab-profile-privacy"><i class="fa fa-fw fa-lock"></i> Privacy</a>
</li>
</ul>
<div class="block-content tab-content">
<div class="tab-pane fade in active" id="tab-profile-personal">
<div class="row items-push">
<div class="col-sm-6 col-sm-offset-3 form-horizontal">
<div class="form-group">
<div class="col-xs-6">
<label>Username</label>
<div class="form-control-static font-w700">Admin</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-12">
<label for="profile-email">Email Address</label>
<input class="form-control input-lg" type="email" id="profile-email" name="profile-email" placeholder="Enter your email.." value="admin@example.com">
</div>
</div>
<div class="form-group">
<div class="col-xs-6">
<label for="profile-firstname">Firstname</label>
<input class="form-control input-lg" type="text" id="profile-firstname" name="profile-firstname" placeholder="Enter your firstname.." value="John">
</div>
<div class="col-xs-6">
<label for="profile-lastname">Lastname</label>
<input class="form-control input-lg" type="text" id="profile-lastname" name="profile-lastname" placeholder="Enter your lastname.." value="Doe">
</div>
</div>
<div class="form-group">
<div class="col-xs-12">
<label for="profile-bio">Bio</label>
<textarea class="form-control input-lg" id="profile-bio" name="profile-bio" rows="15" placeholder="Enter a few details about yourself..">Hi there, welcome to my profile! I'm a web designer and I love creating stuff that solve problems and make your life easier. Feel free to follow me to know more about me and my projects. Thanks for stopping by, wish you a great day!</textarea>
</div>
</div>
<div class="form-group">
<div class="col-xs-12">
<label for="profile-skills">Skills</label>
<select class="form-control" id="profile-skills" name="profile-skills" size="8" multiple="">
<option value="1" selected>HTML</option>
<option value="2" selected>CSS</option>
<option value="3" selected>JavaScript</option>
<option value="4">PHP</option>
<option value="5">Ruby</option>
<option value="6" selected>Photoshop</option>
<option value="6" selected>Sketch</option>
<option value="7">Illustrator</option>
</select>
</div>
</div>
<div class="form-group">
<div class="col-sm-6">
<label for="profile-city">Where do you live?</label>
<input class="form-control input-lg" type="text" id="profile-city" name="profile-city" placeholder="Enter your location..">
</div>
<div class="col-sm-6">
<label for="profile-age">Age</label>
<input class="form-control input-lg" type="text" id="profile-age" name="profile-age" placeholder="Enter your age..">
</div>
</div>
<div class="form-group">
<label class="col-xs-12">Gender</label>
<div class="col-xs-12">
<label class="css-input css-radio css-radio-primary push-10-r">
<input type="radio" name="profile-gender-group"><span></span> Female
</label>
<label class="css-input css-radio css-radio-primary">
<input type="radio" name="profile-gender-group" checked><span></span> Male
</label>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="tab-profile-password">
<div class="row items-push">
<div class="col-sm-6 col-sm-offset-3 form-horizontal">
<div class="form-group">
<div class="col-xs-12">
<label for="profile-password">Current Password</label>
<input class="form-control input-lg" type="password" id="profile-password" name="profile-password">
</div>
</div>
<hr>
<div class="form-group">
<div class="col-xs-12">
<label for="profile-password-new">New Password</label>
<input class="form-control input-lg" type="password" id="profile-password-new" name="profile-password-new">
</div>
</div>
<div class="form-group">
<div class="col-xs-12">
<label for="profile-password-new-confirm">Confirm New Password</label>
<input class="form-control input-lg" type="password" id="profile-password-new-confirm" name="profile-password-new-confirm">
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="tab-profile-privacy">
<div class="row items-push">
<div class="col-sm-6 col-sm-offset-3 form-horizontal">
<div class="form-group">
<div class="col-xs-8">
<div class="font-s13 font-w600">Online Status</div>
<div class="font-s13 font-w400 text-muted">Show your status to all</div>
</div>
<div class="col-xs-4 text-right">
<label class="css-input switch switch-sm switch-primary push-10-t">
<input type="checkbox"><span></span>
</label>
</div>
</div>
<hr>
<div class="form-group">
<div class="col-xs-8">
<div class="font-s13 font-w600">Auto Updates</div>
<div class="font-s13 font-w400 text-muted">Keep up to date</div>
</div>
<div class="col-xs-4 text-right">
<label class="css-input switch switch-sm switch-primary push-10-t">
<input type="checkbox"><span></span>
</label>
</div>
</div>
<hr>
<div class="form-group">
<div class="col-xs-8">
<div class="font-s13 font-w600">Notifications</div>
<div class="font-s13 font-w400 text-muted">Do you need them?</div>
</div>
<div class="col-xs-4 text-right">
<label class="css-input switch switch-sm switch-primary push-10-t">
<input type="checkbox" checked><span></span>
</label>
</div>
</div>
<hr>
<div class="form-group">
<div class="col-sm-8">
<div class="font-s13 font-w600">API Access</div>
<div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
</div>
<div class="col-sm-4 text-right">
<label class="css-input switch switch-sm switch-primary push-10-t">
<input type="checkbox" checked><span></span>
</label>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="block-content block-content-full bg-gray-lighter text-center">
<button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-check push-5-r"></i> Save Changes</button>
<button class="btn btn-sm btn-warning" type="reset"><i class="fa fa-refresh push-5-r"></i> Reset</button>
</div>
</div>
</form>
</div>
</main>
<footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
<div class="pull-right">
Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
</div>
<div class="pull-left">
<a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">OneUI 1.3</a> &copy; <span class="js-year-copy"></span>
</div>
</footer>
</div>
<div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-sm modal-dialog modal-dialog-top">
<div class="modal-content">
<div class="block block-themed block-transparent">
<div class="block-header bg-primary-dark">
<ul class="block-options">
<li>
<button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
</li>
</ul>
<h3 class="block-title">Apps</h3>
</div>
<div class="block-content">
<div class="row text-center">
<div class="col-xs-6">
<a class="block block-rounded" href="index.php">
<div class="block-content text-white bg-default">
<i class="si si-speedometer fa-2x"></i>
<div class="font-w600 push-15-t push-15">Backend</div>
</div>
</a>
</div>
<div class="col-xs-6">
<a class="block block-rounded" href="frontend_home.php">
<div class="block-content text-white bg-modern">
<i class="si si-rocket fa-2x"></i>
<div class="font-w600 push-15-t push-15">Frontend</div>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div><script src="assets/js/oneui.min-1.3.js"></script><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-16158021-6', 'auto');ga('send', 'pageview');</script>
</body>
</html>