<?php 
session_start();

if(!isset($_SESSION)){  
    header('location:login.php');
}

$_SESSION['user_id'] = "1";
$_SESSION['username'] = "test";
?>
<!DOCTYPE html>

}else{
<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Dashboard | AppUI</title>

        <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
        <meta name="author" content="rustheme" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="assets/img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css" />
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css" />
        <link rel="stylesheet" href="assets/js/plugins/datatables/jquery.dataTables.min.css" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="assets/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="assets/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="assets/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="assets/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="assets/css/app-custom.css" />
        <!-- End Stylesheets -->
    </head>

    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Drawer -->
                <aside class="app-layout-drawer">

                    <!-- Drawer scroll area -->
                    <div class="app-layout-drawer-scroll">
                        <!-- Drawer logo APPUI Logo -->
                        <!-- <div id="logo" class="drawer-header">
                            <a href="index.html"><img class="img-responsive" src="assets/img/logo/logo-backend.png" title="AppUI" alt="AppUI" /></a>
                        </div> -->

                        <!-- Drawer navigation -->
                        <nav class="drawer-main">
                            <ul class="nav nav-drawer">

                                <li class=""><img src="img/basicLogo.png" style="height: 100px;margin-left: 40px;"></img></li>


                                <li class="nav-item nav-drawer-header">Components</li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="fa fa-file"></i> Payment Forms</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#modal-popout">Add Payment Full</a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#modal-custom_sales_with">Add Custom Sales w/ Payment</a>
                                        </li>

                                                                                <li>
                                            <a href="#" data-toggle="modal" data-target="#modal-custom_sales_without">Add Custom Sales w/o Payment</a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#modal-custom_collection">Add Custom Collections</a>
                                        </li>
                                    </ul>
                                </li>



                                <li class="nav-item ">
                                    <a href="#" data-toggle="modal" data-target="#modal-cash_denomination"><i class="fa fa-money"></i> Cash Denomination Form</a>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-compose-outline"></i> Forms</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_forms_elements.html">Elements</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_samples.html">Samples</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_pickers_select.html">Pickers &amp; Select</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_validation.html">Validation</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_wizard.html">Wizard</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-list-outline"></i> Tables</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_tables_styles.html">Styles</a>
                                        </li>

                                        <li>
                                            <a href="base_tables_responsive.html">Responsive</a>
                                        </li>

                                        <li>
                                            <a href="base_tables_tools.html">Tools</a>
                                        </li>

                                        <li>
                                            <a href="base_tables_pricing.html">Pricing</a>
                                        </li>

                                        <li>
                                            <a href="base_tables_datatables.html">Wizard</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-browsers-outline"></i> Pages</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_pages_blank.html">Blank</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_inbox.html">Inbox</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_invoice.html">Invoice</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_profile.html">Profile</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_search.html">Search</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-social-javascript-outline"></i> JS plugins</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_js_maps.html">Maps</a>
                                        </li>

                                        <li>
                                            <a href="base_js_sliders.html">Sliders</a>
                                        </li>

                                        <li>
                                            <a href="base_js_charts_flot.html">Charts - Flot</a>
                                        </li>

                                        <li>
                                            <a href="base_js_charts_chartjs.html">Charts - Chart.js</a>
                                        </li>

                                        <li>
                                            <a href="base_js_charts_sparkline.html">Charts - Sparkline</a>
                                        </li>

                                        <li>
                                            <a href="base_js_draggable.html">Draggable</a>
                                        </li>

                                        <li>
                                            <a href="base_js_syntax_highlight.html">Syntax highlight</a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </nav>
                        <!-- End drawer navigation -->

                        <div class="drawer-footer">
                            <p class="copyright">AppUI Template &copy;</p>
                            <a href="https://shapebootstrap.net/item/1525731-appui-admin-frontend-template/?ref=rustheme" target="_blank" rel="nofollow">Purchase a license</a>
                        </div>
                    </div>
                    <!-- End drawer scroll area -->
                </aside>
                <!-- End drawer -->

                <!-- Header -->
                <header class="app-layout-header">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                					<span class="sr-only">Toggle navigation</span>
                					<span class="icon-bar"></span>
                					<span class="icon-bar"></span>
                					<span class="icon-bar"></span>
                				</button>
                                <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle">
                					<span class="sr-only">Toggle drawer</span>
                					<span class="icon-bar"></span>
                					<span class="icon-bar"></span>
                					<span class="icon-bar"></span>
                				</button>
                            </div>



                            <div class="collapse navbar-collapse" id="header-navbar-collapse">
                                <!-- Header search form -->
                                <!-- .navbar-left -->

                                <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
                                    <li>
                                        <!-- Opens the modal found at the bottom of the page -->
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#apps-modal"><i class="ion-grid"></i></a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="ion-ios-bell"></i> <span class="badge">3</span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">Profile</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span> News </a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span> Messages </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">More</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown dropdown-profile">
                                        <a href="javascript:void(0)" data-toggle="dropdown">
                                            <span class="m-r-sm"><?php //echo $_SESSION['username']; ?> <span class="caret"></span></span>
                                            <img class="img-avatar img-avatar-48" src="assets/img/avatars/avatar3.jpg" alt="User profile pic" />
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">
                                                Pages
                                            </li>
                                            <li>
                                                <a href="base_pages_profile.html">Profile</a>
                                            </li>
                                            <li>
                                                <a href="base_pages_profile.html"><span class="badge badge-success pull-right">3</span> Blog</a>
                                            </li>
                                            <li>
                                                <a href="functions">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- .navbar-right -->
                            </div>
                        </div>
                        <!-- .container-fluid -->
                    </nav>
                    <!-- .navbar-default -->
                </header>
                <!-- End header -->

                <main class="app-layout-content">

                    <!-- Page Content -->
                    <div class="container-fluid p-y-md">


                        


                        <!-- Stats -->
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h6 text-muted m-t-0 m-b-xs">Collection</p>
                                            <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-bell fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 col-lg-3">
                                <a class="card bg-green bg-inverse" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h6 text-muted m-t-0 m-b-xs">Sales</p>
                                            <p class="h3 m-t-sm m-b-0">₱920.000</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-people fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 col-lg-3">
                                <a class="card bg-blue bg-inverse" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h6 text-muted m-t-0 m-b-xs">Revenue</p>
                                            <p class="h3 m-t-sm m-b-0">$340.5k</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-speedometer fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 col-lg-3">
                                <a class="card bg-purple bg-inverse" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h6 text-muted m-t-0 m-b-xs" >Xerox</p>
                                            <p class="h3 m-t-sm m-b-0"style="display: inline-block;">₱ &nbsp<p class="h3 m-t-sm m-b-0" id='xerox_total' style="display: inline-block;"></p></p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="fa fa-files-o fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->
                        </div>
                        <!-- .row -->

                        <div class="row">
                            <form method="POST" id="xerox_input_form">
                                
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                                <div class="col-xs-12">
                                                    <div class="form-material floating">
                                                        <input class="form-control" type="number" name="number_input" id="number_input" style="text-align: right;">
                                                        <label for="number_input">Number of Copies</label>
                                                    </div>
                                                </div>
                                            </div>
                            </div>

                            <div class="col-sm-12 col-lg-3">
                                <input class="form-control" type="text" name="total_amount" id="total_amount" readonly />
                            </div>

                            <div class="col-sm-12 col-lg-3">
                                <!-- <select class="form-control" id="bond_paper_size" name="bond_paper_size">
                                <option value="Short">Short</option>
                                <option value="Long">Long</option>
                                <option value="A4">A4</option>
                                </select> --><!-- 

                                <input type="checkbox" id="bond_paper_size" name="bond_paper_size" value="Short"> Short &nbsp&nbsp
                                <input type="checkbox" id="bond_paper_size" name="bond_paper_size" value="A4"> A4 &nbsp&nbsp
                                <input type="checkbox" id="bond_paper_size" name="bond_paper_size" value="Long"> Long &nbsp&nbsp -->


                                  <label class="radio-inline" for="example-inline-radio1">
                                    <input type="radio" id="bond_paper_size" name="bond_paper_size" value="Short" checked /> Short
                                </label>
                                                    <label class="radio-inline" for="example-inline-radio2">
                                    <input type="radio" id="bond_paper_size" name="bond_paper_size" value="Long" /> Long
                                </label>
                                                    <label class="radio-inline" for="example-inline-radio3">
                                    <input type="radio" id="bond_paper_size" name="bond_paper_size" value="A4" /> A4
                                </label>
                            </div>
                        </div>
                        <br>

                        <div class="col-sm-6">
                            

                        <div class="row">
                            <div class="col-sm-6 col-lg-4" id="one_input_button">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <!-- <p class="h6 text-muted m-t-0 m-b-xs">Collection</p> -->
                                            <!-- <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p> -->
                                        </div>
                                        <div class="m-r" style="margin-left: 35%;">
                                            <span class="img-avatar img-avatar-48 bg-green bg-inverse">1</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-4" id="two_input_button">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <!-- <p class="h6 text-muted m-t-0 m-b-xs">Collection</p> -->
                                            <!-- <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p> -->
                                        </div>
                                        <div class="m-r" style="margin-left: 35%;">
                                            <span class="img-avatar img-avatar-48 bg-green bg-inverse">2</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-4" id="three_input_button">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <!-- <p class="h6 text-muted m-t-0 m-b-xs">Collection</p> -->
                                            <!-- <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p> -->
                                        </div>
                                        <div class="m-r" style="margin-left: 35%;">
                                            <span class="img-avatar img-avatar-48 bg-green bg-inverse">3</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-lg-4" id="four_input_button">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <!-- <p class="h6 text-muted m-t-0 m-b-xs">Collection</p> -->
                                            <!-- <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p> -->
                                        </div>
                                        <div class="m-r" style="margin-left: 35%;">
                                            <span class="img-avatar img-avatar-48 bg-green bg-inverse">4</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-4" id="five_input_button">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <!-- <p class="h6 text-muted m-t-0 m-b-xs">Collection</p> -->
                                            <!-- <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p> -->
                                        </div>
                                        <div class="m-r" style="margin-left: 35%;">
                                            <span class="img-avatar img-avatar-48 bg-green bg-inverse">5</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-4" id="six_input_button">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <!-- <p class="h6 text-muted m-t-0 m-b-xs">Collection</p> -->
                                            <!-- <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p> -->
                                        </div>
                                        <div class="m-r" style="margin-left: 35%;">
                                            <span class="img-avatar img-avatar-48 bg-green bg-inverse">6</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-lg-4" id="seven_input_button">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <!-- <p class="h6 text-muted m-t-0 m-b-xs">Collection</p> -->
                                            <!-- <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p> -->
                                        </div>
                                        <div class="m-r" style="margin-left: 35%;">
                                            <span class="img-avatar img-avatar-48 bg-green bg-inverse">7</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-4" id="eight_input_button">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <!-- <p class="h6 text-muted m-t-0 m-b-xs">Collection</p> -->
                                            <!-- <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p> -->
                                        </div>
                                        <div class="m-r" style="margin-left: 35%;">
                                            <span class="img-avatar img-avatar-48 bg-green bg-inverse">8</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-4" id="nine_input_button">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <!-- <p class="h6 text-muted m-t-0 m-b-xs">Collection</p> -->
                                            <!-- <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p> -->
                                        </div>
                                        <div class="m-r" style="margin-left: 35%;">
                                            <span class="img-avatar img-avatar-48 bg-green bg-inverse">9</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-lg-4" id="del_input_button">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <!-- <p class="h6 text-muted m-t-0 m-b-xs">Collection</p> -->
                                            <!-- <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p> -->
                                        </div>
                                        <div class="m-r" style="margin-left: 35%;">
                                            <span class="img-avatar img-avatar-48 bg-green bg-inverse"><i class="ion-android-arrow-back fa-2x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-4" id="zeroo">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <!-- <p class="h6 text-muted m-t-0 m-b-xs">Collection</p> -->
                                            <!-- <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p> -->
                                        </div>
                                        <div class="m-r" style="margin-left: 35%;">
                                            <span class="img-avatar img-avatar-48 bg-green bg-inverse">0</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-4" id="submit_input_button">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <!-- <p class="h6 text-muted m-t-0 m-b-xs">Collection</p> -->
                                            <!-- <p class="h3 text-blue m-t-sm m-b-0">₱120.9k</p> -->
                                        </div>
                                        <div class="m-r" style="margin-left: 35%;">
                                            <span class=" img-avatar img-avatar-48 bg-green bg-inverse" >Save</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        </form>

                        </div>


                        <div class="col-sm-6">
                                
                                        <div id="xerox_table_content"></div>
                                

                        </div>

                    <!-- Full Payment Modal -->
                    <div class="modal fade" id="modal-popout" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-popout">
                            <div class="modal-content">
                                <div class="card-header bg-green bg-inverse">
                                    <h4>Full Payment</h4>
                                    <ul class="card-actions">
                                        <li>
                                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            <form action="" method="POST" id="full_payment_form" name="full_payment_form">
                            <div class="card-block">
                                            <div class="form-group">
                                                <label for="example-nf-email">INVOICE / JOB ORDER # : </label>
                                                <input class="form-control" type="text" id="full_payment_invoice" name="full_payment_invoice" placeholder="Invoice Number / Job Order Number..." />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-email">Classification : </label>
                                                <select class="form-control" type="text" id="full_payment_classification" name="full_payment_classification">
                                                    <option></option>
                                                    <option value="cf">Customize Frame</option>
                                                    <option value="rf">Ready made Frame</option>
                                                    <option value="p">Print</option>
                                                    <option value="x">Xerox</option>
                                                    <option value="o">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-password" />Customer Name : </label>
                                                <input class="form-control" type="text" id="full_payment_customer_name" name="full_payment_customer_name" placeholder="Customer Number.." />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-password" />Amount : </label>
                                                <input class="form-control" type="number" id="full_payment_amount" name="full_payment_amount" placeholder="Customer Number.." />
                                            </div>

                                            <div class="form-group">
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                <input type="checkbox" name="full_payment_cheque" id="full_payment_cheque" /><span></span> Is Cheque
                                            </label>
                                            </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-sm btn-app" type="submit" data-dismiss="modal" name="full_payment_submit_btn" id="full_payment_submit_btn" >Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Full Payment Modal -->  



                    <!-- Custom Sales with Payment Modal -->
                    <div class="modal fade" id="modal-custom_sales_with" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-popout">
                            <div class="modal-content">
                                <div class="card-header bg-green bg-inverse">
                                    <h4>Custom Sales with Payment Form</h4>
                                    <ul class="card-actions">
                                        <li>
                                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            <form action="#" method="POST" id="custom_sales_with_payment_form">
                            <div class="card-block">
                                            <div class="form-group">
                                                <label for="example-nf-email">INVOICE / JOB ORDER # : </label>
                                                <input class="form-control" type="text" id="custom_sales_with_payment_invoice" name="custom_sales_with_payment_invoice" placeholder="Invoice Number / Job Order Number..." />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-email">Classification : </label>
                                                <select class="form-control" type="text" id="custom_sales_with_payment_classification" name="custom_sales_with_payment_classification">
                                                    <option></option>
                                                    <option value="cf">Customize Frame</option>
                                                    <option value="rf">Ready made Frame</option>
                                                    <option value="p">Print</option>
                                                    <option value="x">Xerox</option>
                                                    <option value="o">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-password" />Customer Name : </label>
                                                <input class="form-control" type="text" id="custom_sales_with_payment_customer_name" name="custom_sales_with_payment_customer_name" placeholder="Customer Number.." />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-password" />Total Amount : </label>
                                                <input class="form-control" type="number" id="custom_sales_with_payment_total_amount" name="custom_sales_with_payment_total_amount" placeholder="Item Total Amount" />
                                            </div>

                                            <div class="form-group">
                                                <label for="example-nf-password" />Paid Amount : </label>
                                                <input class="form-control" type="number" id="custom_sales_with_payment_paid_amount" name="custom_sales_with_payment_paid_amount" placeholder="Paid Amount.." />
                                            </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-sm btn-app" type="button" id="custom_sales_with_payment_submit_btn" data-dismiss="modal">Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Custom Sales with Payment Modal -->




                    <!-- Custom Sales without Payment Modal -->
                    <div class="modal fade" id="modal-custom_sales_without" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-popout">
                            <div class="modal-content">
                                <div class="card-header bg-green bg-inverse">
                                    <h4>Custom Sales without Payment Form</h4>
                                    <ul class="card-actions">
                                        <li>
                                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            <form action="#" method="POST" id="custom_sales_without_payment_form">
                            <div class="card-block">
                                            <div class="form-group">
                                                <label for="example-nf-email">INVOICE / JOB ORDER # : </label>
                                                <input class="form-control" type="text" id="custom_sales_without_payment_invoice" name="custom_sales_without_payment_invoice" placeholder="Invoice Number / Job Order Number..." />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-email">Classification : </label>
                                                <select class="form-control" type="text" id="custom_sales_without_payment_classification" name="custom_sales_without_payment_classification">
                                                    <option></option>
                                                    <option value="cf">Customize Frame</option>
                                                    <option value="rf">Ready made Frame</option>
                                                    <option value="p">Print</option>
                                                    <option value="x">Xerox</option>
                                                    <option value="o">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-password" />Customer Name : </label>
                                                <input class="form-control" type="text" id="custom_sales_without_payment_customer_name" name="custom_sales_without_payment_customer_name" placeholder="Customer Number.." />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-password" />Total Amount : </label>
                                                <input class="form-control" type="number" id="custom_sales_without_payment_total_amount" name="custom_sales_without_payment_total_amount" placeholder="Item Total Amount" />
                                            </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-sm btn-app" type="button" id="custom_sales_without_payment_submit_btn" data-dismiss="modal">Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Custom Sales without Payment Modal -->




                    <!--Custom Collection Modal -->
                    <div class="modal fade" id="modal-custom_collection" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-popout">
                            <div class="modal-content">
                                <div class="card-header bg-green bg-inverse">
                                    <h4>Custom Collection Form</h4>
                                    <ul class="card-actions">
                                        <li>
                                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            <form action="#" method="POST" id="custom_collection_form">
                            <div class="card-block">
                                            <div class="form-group">
                                                <label for="example-nf-email">INVOICE / JOB ORDER # : </label>
                                                <input class="form-control" type="text" id="custom_collection_invoice" name="custom_collection_invoice" placeholder="Invoice Number / Job Order Number..." />
                                            </div>
                                            <label for="example-nf-email">Classification : </label>
                                            <select class="form-control" type="text" id="custom_collection_classification" name="custom_collection_classification">
                                                    <option></option>
                                                    <option value="arf">Accounts Recievable Frame</option>
                                                    <option value="arx">Accounts Recievable Xerox</option>
                                                    <option value="arp">Accounts Recievable Prints</option>
                                                    <option value="aro">Accounts Recievable Others</option>
                                                </select>
                                            <div class="form-group">
                                                <label for="example-nf-password" />Customer Name : </label>
                                                <input class="form-control" type="text" id="custom_collection_customer_name" name="custom_collection_customer_name" placeholder="Customer Name.." />
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-password" />Amount : </label>
                                                <input class="form-control" type="number" id="custom_collection_paid_amount" name="custom_collection_paid_amount" placeholder="Amount Paid.." />
                                            </div>

                                            <div class="form-group">
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                <input type="checkbox" name="custom_collection_cheque" id="custom_collection_cheque" /><span></span> Is Cheque
                                            </label>
                                            </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-sm btn-app" type="button" data-dismiss="modal" id="custom_collection_submit_btn">Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Custom Collection Modal --> 



                    <!--Cash Denomination Modal -->
                    <div class="modal fade" id="modal-cash_denomination" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-popout">
                            <div class="modal-content">
                                <div class="card-header bg-green bg-inverse">
                                    <h4>Cash Denomination Form</h4>
                                    <ul class="card-actions">
                                        <li>
                                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            <form action="#" method="POST" id="custom_collection_form">
                            <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">1000 :</p> 
                                                </div>
                                                <div class="col-sm-10">
                                                <input class="form-control" type="text" id="custom_collection_invoice" name="custom_collection_invoice" placeholder="Input count of 1000 Pesos" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">500 :</p> 
                                                </div>
                                                <div class="col-sm-10">
                                                <input class="form-control" type="text" id="custom_collection_invoice" name="custom_collection_invoice" placeholder="Input count of 500 Pesos" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">200 :</p> 
                                                </div>
                                                <div class="col-sm-10">
                                                <input class="form-control" type="text" id="custom_collection_invoice" name="custom_collection_invoice" placeholder="Input count of 200 Pesos" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">100 :</p> 
                                                </div>
                                                <div class="col-sm-10">
                                                <input class="form-control" type="text" id="custom_collection_invoice" name="custom_collection_invoice" placeholder="Input count of 100 Pesos" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">50 :</p> 
                                                </div>
                                                <div class="col-sm-10">
                                                <input class="form-control" type="text" id="custom_collection_invoice" name="custom_collection_invoice" placeholder="Input count of 50 Pesos" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">20 :</p> 
                                                </div>
                                                <div class="col-sm-10">
                                                <input class="form-control" type="text" id="custom_collection_invoice" name="custom_collection_invoice" placeholder="Input count of 20 Pesos" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">10 :</p> 
                                                </div>
                                                <div class="col-sm-10">
                                                <input class="form-control" type="text" id="custom_collection_invoice" name="custom_collection_invoice" placeholder="Input count of 10 Pesos" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">5 :</p> 
                                                </div>
                                                <div class="col-sm-10">
                                                <input class="form-control" type="text" id="custom_collection_invoice" name="custom_collection_invoice" placeholder="Input count of 5 Pesos" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">1 :</p> 
                                                </div>
                                                <div class="col-sm-10">
                                                <input class="form-control" type="text" id="custom_collection_invoice" name="custom_collection_invoice" placeholder="Input count of 1 Peso" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">.25 :</p> 
                                                </div>
                                                <div class="col-sm-10">
                                                <input class="form-control" type="text" id="custom_collection_invoice" name="custom_collection_invoice" placeholder="Input count of 25 Centavos" />
                                                </div>
                                            </div>
                                            
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-sm btn-app" type="button" data-dismiss="modal" id="custom_collection_submit_btn">Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Cash Denomination Modal --> 





                        <!-- End stats -->

                    </div>
                    <!-- .container-fluid -->
                    <!-- End Page Content -->

                </main>

            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div id="apps-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps card -->
                    <div class="card m-b-0">
                        <div class="card-header bg-app bg-inverse">
                            <h4>Apps</h4>
                            <ul class="card-actions">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-secondary bg-inverse" href="index.html">
                                        <i class="ion-speedometer fa-4x"></i>
                                        <p>Admin</p>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-tertiary bg-inverse" href="frontend_home.html">
                                        <i class="ion-laptop fa-4x"></i>
                                        <p>Frontend</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- End Apps card -->
                </div>
            </div>
        </div>
        <!-- End Apps Modal -->

        <div class="app-ui-mask-modal"></div>

        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/app-custom.js"></script>



        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_tables_datatables.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/index.js"></script>

        <script>
        $(document).ready(function() {
        load_xerox_table();
        get_total_xerox();    
    var intervalId = window.setInterval(function(){
        /// call your function here
        load_xerox_table();
        get_total_xerox();
    }, 1000);

                
function load_xerox_table(){
    $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "functions/retrieve_xerox_table.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#xerox_table_content").html(response); 
            //alert(response);
        }

        });
}
    
function get_total_xerox(){
    $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "functions/retrieve_xerox_total.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#xerox_total").html(response); 
            //alert(response);
        }

        });
}    





            $("#number_input").focus();
            function compute_total(){


                var bond_paper_size = $('input[name="bond_paper_size"]:checked').val();
                var number_input = $("#number_input").val();
                
                if (event.keyCode === 13 && number_input != "" && number_input > 0) {
                    $("#submit_input_button").click();
                }

                if(bond_paper_size == "Short"){
                    var tots = number_input * 2;
                }
                else if(bond_paper_size == "Long"){
                    var tots = number_input * 2.5;   
                }
                else{
                    var tots = number_input * 2.5;   
                }
                    var dec_tots = tots.toFixed(2);
                    $("#total_amount").val(dec_tots);
                    $("#number_input").focus();
            }

            $('#number_input').on('keyup', function() {
                compute_total();
            });

            $('#bond_paper_size').on('change', function() {
                compute_total();
            });

            $('#zeroo').on('click', function() {
                var number_input = $("#number_input").val();
                $("#number_input").val(number_input + 0);
                compute_total();
                
            });


            $('#one_input_button').on('click', function() {
                var number_input = $("#number_input").val();
                $("#number_input").val(number_input + 1);
                compute_total();
                
            });

            $('#two_input_button').on('click', function() {
                var number_input = $("#number_input").val();
                $("#number_input").val(number_input + 2);
                compute_total();
                
            });

            $('#three_input_button').on('click', function() {
                var number_input = $("#number_input").val();
                $("#number_input").val(number_input + 3);
                compute_total();
                
            });

            $('#four_input_button').on('click', function() {
                var number_input = $("#number_input").val();
                $("#number_input").val(number_input + 4);
                compute_total();
                
            });

            $('#five_input_button').on('click', function() {
                var number_input = $("#number_input").val();
                $("#number_input").val(number_input + 5);
                compute_total();
                
            });

            $('#six_input_button').on('click', function() {
                var number_input = $("#number_input").val();
                $("#number_input").val(number_input + 6);
                compute_total();
                
            });

            $('#seven_input_button').on('click', function() {
                var number_input = $("#number_input").val();
                $("#number_input").val(number_input + 7);
                compute_total();
                
            });

            $('#eight_input_button').on('click', function() {
                var number_input = $("#number_input").val();
                $("#number_input").val(number_input + 8);
                compute_total();
                
            });

            $('#nine_input_button').on('click', function() {
                var number_input = $("#number_input").val();
                $("#number_input").val(number_input + 9);
                compute_total();
                
            });

            $('#del_input_button').on('click', function() {
                var orig_text=$('#number_input').val();
                var number_input=orig_text.substr(0, orig_text.length-1);
                $('#number_input').val(number_input);
                compute_total();
                
            });

            $('#submit_input_button').on('click', function() {
                var number_input = $("#number_input").val();
                var total_amount = $("#total_amount").val();
                var bond_paper_size = $('input[name="bond_paper_size"]:checked').val();
                $(this).addClass('js-notify');
                if(number_input != "" && number_input > 0){

                //inserting xerox payment 
                $.ajax({
                        url: "functions/submit_xerox_payment.php",
                        type: "POST",
                        data: {
                            number_input: number_input,
                            total_amount: total_amount,
                            bond_paper_size: bond_paper_size         
                        },
                        success: function(dataResult){
                                $('#number_input').val('');
                                $("#submit_input_button").toggleClass("js");
                                compute_total();
                        }
                    });
                }


                // alert(number_input + "\n" + total_amount + "\n" + bond_paper_size);

            });


            // Full Payment for on submit
            $('#full_payment_submit_btn').on('click', function() {
                var full_payment_invoice = $('#full_payment_invoice').val();
                var full_payment_customer_name = $('#full_payment_customer_name').val();
                var full_payment_amount = $('#full_payment_amount').val();
                var full_payment_classification = $('#full_payment_classification').val();
                

                if($('#full_payment_cheque').is(':checked')){
                    var full_payment_cheque = "1";
                }
                else{
                    var full_payment_cheque = "0";
                }
                    $.ajax({
                        url: "functions/submit_full_payment.php",
                        type: "POST",
                        data: {
                            full_payment_invoice: full_payment_invoice,
                            full_payment_customer_name: full_payment_customer_name,
                            full_payment_amount: full_payment_amount,
                            full_payment_classification: full_payment_classification,
                            full_payment_cheque: full_payment_cheque         
                        },
                        success: function(dataResult){
                                $("input, select, textarea")
                                    .not("input[type=checkbox], input[type=radio], input[type=button], input[type=submit]")
                                    .val("");
                                $("input[type=checkbox], input[type=radio]").prop("checked", false);
                                alert(dataResult);

                            
                        }
                    });
                
            });
            // end Full Payment for on submit

            //Custom Sales with Payment on Submit
            $('#custom_sales_with_payment_submit_btn').on('click', function() {
                var custom_sales_with_payment_invoice = $("#custom_sales_with_payment_invoice").val();
                var custom_sales_with_payment_classification = $("#custom_sales_with_payment_classification").val();
                var custom_sales_with_payment_customer_name = $("#custom_sales_with_payment_customer_name").val();
                var custom_sales_with_payment_total_amount = $("#custom_sales_with_payment_total_amount").val();
                var custom_sales_with_payment_paid_amount = $("#custom_sales_with_payment_paid_amount").val();

                $.ajax({
                        url: "functions/submit_custom_sales_with_payment.php",
                        type: "POST",
                        data: {
                           invoice: custom_sales_with_payment_invoice,
                           classification: custom_sales_with_payment_classification,
                           customer_name: custom_sales_with_payment_customer_name,
                           total_amount: custom_sales_with_payment_total_amount,
                           paid_amount: custom_sales_with_payment_paid_amount
                        },
                        success: function(dataResult){
                                $("input, select, textarea")
                                    .not("input[type=checkbox], input[type=radio], input[type=button], input[type=submit]")
                                    .val("");
                                $("input[type=checkbox], input[type=radio]").prop("checked", false);
                                alert(dataResult);
                        }
                });
            });

            //End Custom Sales with Payment on Submit

            //Custom Sales without Payment on Submit
            $('#custom_sales_without_payment_submit_btn').on('click', function() {
                var custom_sales_without_payment_invoice = $("#custom_sales_without_payment_invoice").val();
                var custom_sales_without_payment_classification = $("#custom_sales_without_payment_classification").val();
                var custom_sales_without_payment_customer_name = $("#custom_sales_without_payment_customer_name").val();
                var custom_sales_without_payment_total_amount = $("#custom_sales_without_payment_total_amount").val();

                $.ajax({
                        url: "functions/submit_custom_sales_without_payment.php",
                        type: "POST",
                        data: {
                           invoice: custom_sales_without_payment_invoice,
                           classification: custom_sales_without_payment_classification,
                           customer_name: custom_sales_without_payment_customer_name,
                           total_amount: custom_sales_without_payment_total_amount
                        },
                        success: function(dataResult){
                                $("input, select, textarea")
                                    .not("input[type=checkbox], input[type=radio], input[type=button], input[type=submit]")
                                    .val("");
                                $("input[type=checkbox], input[type=radio]").prop("checked", false);
                                alert(dataResult);
                        }
                });
            });
            //End Custom Sales without Payment on Submit

            //Custom Collection on Submit
            $('#custom_collection_submit_btn').on('click', function() {
                var custom_collection_invoice = $("#custom_collection_invoice").val();
                var custom_collection_classification = $("#custom_collection_classification").val();
                var custom_collection_customer_name = $("#custom_collection_customer_name").val();
                var custom_collection_paid_amount = $("#custom_collection_paid_amount").val();
                if($('#custom_collection_cheque').is(':checked')){
                    var custom_collection_cheque = "1";
                }
                else{
                    var custom_collection_cheque = "0";
                }
                $.ajax({
                        url: "functions/submit_custom_collection.php",
                        type: "POST",
                        data: {
                           invoice: custom_collection_invoice,
                           classification: custom_collection_classification,
                           customer_name: custom_collection_customer_name,
                           paid_amount: custom_collection_paid_amount,
                           is_cheque: custom_collection_cheque
                        },
                        success: function(dataResult){
                                $("input, select, textarea")
                                    .not("input[type=checkbox], input[type=radio], input[type=button], input[type=submit]")
                                    .val("");
                                $("input[type=checkbox], input[type=radio]").prop("checked", false);
                                alert(dataResult);
                        }
                });
            });
            //End Custom Collection on Submit

        });
        </script>
         <!-- Page JS Plugins -->
        

    </body>

</html>