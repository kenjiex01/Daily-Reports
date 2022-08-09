<?php 
session_start();




if(!isset($_SESSION)){  
    header('location:login.php');
}


if(isset($_GET['delete_id'])){
    $delete_id = $_GET['delete_id'];
}
else{
    $delete_id = '';
}


if(isset($_GET['id'])){
$cus_id = $_GET['id'];
include('./functions/customer_id_checker.php');
}
else{
$customer_fname = '';
$customer_mname = '';
$customer_lname = '';
$customer_contact_number = '';
$customer_address = '';
$cus_id = '';
}
$_SESSION['user_id'] = "1";
$_SESSION['username'] = "test";
?>
<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Basic Frames and Photography | Cashier's System</title>

        <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
        <meta name="author" content="rustheme" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="assets/img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="assets/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="assets/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="assets/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="assets/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="assets/css/app-custom.css" />
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <!-- End Stylesheets -->
    </head>

    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Drawer -->
                <aside class="app-layout-drawer">

                    <!-- Drawer scroll area -->
                    <div class="app-layout-drawer-scroll">
                        <!-- Drawer logo -->
                        <div id="logo" class="drawer-header">
                            <a href="index.php"><img class="img-responsive" src="img/basicLogo.png" title="AppUI" alt="AppUI" style="height: 85px;margin-left: 25%;" /></a>
                        </div>

                        <!-- Drawer navigation -->
                        <nav class="drawer-main">
                            <ul class="nav nav-drawer">
                                <hr>
                               <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="fa fa-file"></i> Payment Forms</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#modal-popout">Add Payment Full</a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#modal-custom_sales_with">Add Custom Sales w/ Balance</a>
                                        </li>

                                                                                <li>
                                            <a href="#" data-toggle="modal" data-target="#modal-custom_sales_without">Add Custom Sales w/o Payment</a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#modal-custom_collection">Accounts Receivable</a>
                                        </li>
                                    </ul>
                                </li>



                                <li class="nav-item ">
                                    <a href="#" data-toggle="modal" data-target="#modal-cash_denomination"><i class="fa fa-money"></i> Cash Denomination Form</a>
                                </li>

                                <li class="nav-item ">
                                    <a href="frames_calculator.php"><i class="fa fa-calculator"></i> Frames Calculator</a>
                                </li>

                                <li class="nav-item ">
                                    <a href="customer_management.php"><i class="fa fa-user"></i> Customer Management</a>
                                </li>

                                <li class="nav-item ">
                                    <a href="item_master_list.php"><i class="fa fa-cogs"></i> Item Master List</a>
                                </li>

                                <li class="nav-item ">
                                    <a href="test_pdf.php" target="_blank"><i class="fa fa-file-pdf-o"></i> Generate Daily Report</a>
                                </li>

                                <li class="nav-item ">
                                    <a href="delivery_reports.php"><i class="fa fa-file-pdf-o"></i> Delivery Reports</a>
                                </li>

                            </ul>
                        </nav>
                        <!-- End drawer navigation -->

                        <div class="drawer-footer" style="position: fixed;">
                            <p class="copyright">Basic Frames and Photography</p>
                            <a href="#" rel="nofollow">Cashier's System</a>
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
                                            <span class="m-r-sm">John Doe <span class="caret"></span></span>
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
                                                <a href="frontend_login_signup.html">Logout</a>
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

                      
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-block">
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" name="barcode" id="barcode" style="text-align: right;">
                                        <label for="barcode_code">Please Select this input box before Scanning</label>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h2 style="font-weight: bold;text-align: center;">Item Details</h2>
                                <div class="form-material ">
                                <label for="barcode_code">Barcode</label>
                                <input class="form-control" type="text" name="barcode_code" id="barcode_code" readonly>
                                </div>
                                <br>

                                <div class="form-material ">
                                <input class="form-control" type="text" name="item_name" id="item_name" readonly>
                                <label for="item_name">Item Name</label>
                                </div>
                                <br>

                                <div class="form-material ">
                                <input class="form-control" type="text" name="item_price" id="item_price" readonly>
                                <label for="item_price">Item Price</label>
                                </div>
                                <br>

                                <div class="form-material ">
                                <input class="form-control" type="text" name="item_class" id="item_class" readonly>
                                <label for="item_class">Item Class</label>
                                </div>
                                </div>
                                </div>
                            </div>

                        </div><!-- row -->





                        <!-- modals-->

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
                                                    <option value="p">Picture</option>
                                                    <option value="x">Xerox</option>
                                                    <option value="o">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-password" />Customer Name : </label>
                                                <input class="form-control" type="text" id="full_payment_customer_name" name="full_payment_customer_name" placeholder="Customer Name.." />
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
                                                    <option value="p">Picture</option>
                                                    <option value="x">Xerox</option>
                                                    <option value="o">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-password" />Customer Name : </label>
                                                <input class="form-control" type="text" id="custom_sales_with_payment_customer_name" name="custom_sales_with_payment_customer_name" placeholder="Customer Name.." />
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
                                                    <option value="p">Picture</option>
                                                    <option value="x">Xerox</option>
                                                    <option value="o">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-nf-password" />Customer Name : </label>
                                                <input class="form-control" type="text" id="custom_sales_without_payment_customer_name" name="custom_sales_without_payment_customer_name" placeholder="Customer Name.." />
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
                                    <h4>Custom Collection Form (Accounts Receivable)</h4>
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
                                                    <option value="arp">Accounts Recievable Picture</option>
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
                            <form action="#" method="POST" id="cash_denomination_form">
                            <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">1000 :</p> 
                                                </div>
                                                <div class="col-sm-6">
                                                <input class="form-control" type="text" id="cash_denomination_1000" name="cash_denomination_1000" placeholder="Input count of 1000 Pesos" /> 
                                                </div>
                                                <div class="col-sm-4">
                                                <input class="form-control" type="text" id="compute_1000" name="compute_1000" readonly>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">500 :</p> 
                                                </div>
                                                <div class="col-sm-6">
                                                <input class="form-control" type="text" id="cash_denomination_500" name="cash_denomination_500" placeholder="Input count of 500 Pesos" />
                                                </div>
                                                <div class="col-sm-4">
                                                <input class="form-control" type="text" id="compute_500" name="compute_500" readonly>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">200 :</p> 
                                                </div>
                                                <div class="col-sm-6">
                                                <input class="form-control" type="text" id="cash_denomination_200" name="cash_denomination_200" placeholder="Input count of 200 Pesos" />
                                                </div>
                                                <div class="col-sm-4">
                                                <input class="form-control" type="text" id="compute_200" name="compute_200" readonly>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">100 :</p> 
                                                </div>
                                                <div class="col-sm-6">
                                                <input class="form-control" type="text" id="cash_denomination_100" name="cash_denomination_100" placeholder="Input count of 100 Pesos" />
                                                </div>
                                                <div class="col-sm-4">
                                                <input class="form-control" type="text" id="compute_100" name="compute_100" readonly>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">50 :</p> 
                                                </div>
                                                <div class="col-sm-6">
                                                <input class="form-control" type="text" id="cash_denomination_50" name="cash_denomination_50" placeholder="Input count of 50 Pesos" />
                                                </div>
                                                <div class="col-sm-4">
                                                <input class="form-control" type="text" id="compute_50" name="compute_50" readonly>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">20 :</p> 
                                                </div>
                                                <div class="col-sm-6">
                                                <input class="form-control" type="text" id="cash_denomination_20" name="cash_denomination_20" placeholder="Input count of 20 Pesos" />
                                                </div>
                                                <div class="col-sm-4">
                                                <input class="form-control" type="text" id="compute_20" name="compute_20" readonly>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">10 :</p> 
                                                </div>
                                                <div class="col-sm-6">
                                                <input class="form-control" type="text" id="cash_denomination_10" name="cash_denomination_10" placeholder="Input count of 10 Pesos" />
                                                </div>
                                                <div class="col-sm-4">
                                                <input class="form-control" type="text" id="compute_10" name="compute_10" readonly>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">5 :</p> 
                                                </div>
                                                <div class="col-sm-6">
                                                <input class="form-control" type="text" id="cash_denomination_5" name="cash_denomination_5" placeholder="Input count of 5 Pesos" />
                                                </div>
                                                <div class="col-sm-4">
                                                <input class="form-control" type="text" id="compute_5" name="compute_5" readonly>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">1 :</p> 
                                                </div>
                                                <div class="col-sm-6">
                                                <input class="form-control" type="text" id="cash_denomination_1" name="cash_denomination_1" placeholder="Input count of 1 Peso" />
                                                </div>
                                                <div class="col-sm-4">
                                                <input class="form-control" type="text" id="compute_1" name="compute_1" readonly>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                <p style="margin-top: 10px;font-weight: bold;">.25 :</p> 
                                                </div>
                                                <div class="col-sm-6">
                                                <input class="form-control" type="text" id="cash_denomination_25_cents" name="cash_denomination_25_cents" placeholder="Input count of 25 Centavos" />
                                                </div>
                                                <div class="col-sm-4">
                                                <input class="form-control" type="text" id="compute_25_cents" name="compute_25_cents" readonly>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-3">
                                                <p style="margin-top: 10px;font-weight: bold;">Coinbags :</p> 
                                                </div>
                                                <div class="col-sm-9">
                                                <input class="form-control" type="text" id="cash_denomination_coinbag" name="cash_denomination_coinbag" placeholder="Input coinbag count" />
                                                </div>
                                            </div>
                                            
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-sm btn-app" type="button" data-dismiss="modal" id="cash_denomination_submit_btn">Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Cash Denomination Modal --> 


                        <!-- end of modals -->




                    </div>
                    <!-- End Page Content -->

                </main>

            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->

        <!-- Apps Modal -->
  

        <div class="app-ui-mask-modal"></div>

        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/app-custom.js"></script>


          <!-- For data tables -->
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>

        <!-- For data tables -->
        <script src="assets/js/pages/base_tables_datatables.js"></script>

        <script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>

        <!-- for Sweet alerts -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>



        <script>
            $(document).ready(function() {
                get_total_xerox();
                var intervalId = window.setInterval(function(){
                    get_total_xerox();
                }, 1000);


                $('#modal-customer_modal').on('hidden.bs.modal', function (e) {
                  $(this)
                    .find("input,textarea,select")
                       .val('')
                       .end()
                    .find("input[type=checkbox], input[type=radio]")
                       .prop("checked", "")
                       .end();
                })

                    

                    function remove_session(){
                        $.ajax({    //Removing of Sessions
                            type: "GET",
                            url: "./functions/session_destroy.php",             
                            dataType: "html",   //expect html to be returned                
                            success: function(response){       
                        }
                        });
                    }
                    $("#barcode").focus();


                    $("#barcode").on("change",function(){
                        var barcode_input = $("#barcode").val();
                        // alert(laman);

                        $.ajax({         
                          type: 'GET',                             
                          url: './functions/barcode_search.php',                  //the script to call to get data          
                          data: {
                            barcode_input : barcode_input
                          },                             
                          dataType: 'json',               //data format      
                          success: function(res)         
                          {
                            // var myArr = JSON.parse(res);
                            // alert(res.item_id);
                            $("#barcode_code").val(res.barcode);
                            $("#item_name").val(res.item_name);
                            $("#item_price").val(res.item_price);
                            $("#item_class").val(res.item_class);

                          } 
                        });


                    });

//-------------------------------------------------------------------------------------------------
//end customer functions

                function get_total_xerox(){

                    var customer_search = $("#customer_search").val();

                    $.ajax({    //loading of customer table
                        type: "GET",
                        url: "retrieve_customer_details.php",             
                        data: {
                            searching: customer_search
                        },
                        dataType: "html",   //expect html to be returned                
                        success: function(response){                    
                            $("#customer_table").html(response); 
                        }

                        });



                    $.ajax({    //loading of xerox table
                        type: "GET",
                        url: "functions/retrieve_xerox_table.php",             
                        dataType: "html",   //expect html to be returned                
                        success: function(response){                    
                            $("#xerox_table_content").html(response); 
                        }

                        });

                    $.ajax({    //loading of total xerox 
                        type: "GET",
                        url: "functions/retrieve_xerox_total.php",             
                        dataType: "html",   //expect html to be returned                
                        success: function(response){                    
                            $("#xerox_total").html(response); 
                        }

                        });

                    $.ajax({    //loading of total collections
                        type: "GET",
                        url: "functions/retrieve_total_collections.php",             
                        dataType: "html",   //expect html to be returned                
                        success: function(response){                    
                            $("#collection_total").html(response); 
                            
                        }

                        });

                    $.ajax({    //loading of total sales
                        type: "GET",
                        url: "functions/retrieve_total_sales.php",             
                        dataType: "html",   //expect html to be returned                
                        success: function(response){                    
                            $("#sales_total").html(response); 
                        }

                        });
                } // end function get_total_xerox

                $("#cash_denomination_1000").on("keyup",function(){
                    var cash_1000 = $(this).val();
                    var computed_1000 = cash_1000 * 1000;
                     var dec_tots = computed_1000.toFixed(2);
                        $("#compute_1000").val(dec_tots); 
                });

                $("#cash_denomination_500").on("keyup",function(){
                    var cash_500 = $(this).val();
                    var computed_500 = cash_500 * 500;
                     var dec_tots = computed_500.toFixed(2);
                        $("#compute_500").val(dec_tots); 
                });

                $("#cash_denomination_200").on("keyup",function(){
                    var cash_200 = $(this).val();
                    var computed_200 = cash_200 * 200;
                     var dec_tots = computed_200.toFixed(2);
                        $("#compute_200").val(dec_tots); 
                });

                $("#cash_denomination_100").on("keyup",function(){
                    var cash_100 = $(this).val();
                    var computed_100 = cash_100 * 100;
                     var dec_tots = computed_100.toFixed(2);
                        $("#compute_100").val(dec_tots); 
                });

                $("#cash_denomination_50").on("keyup",function(){
                    var cash_50 = $(this).val();
                    var computed_50 = cash_50 * 50;
                     var dec_tots = computed_50.toFixed(2);
                        $("#compute_50").val(dec_tots); 
                });

                $("#cash_denomination_20").on("keyup",function(){
                    var cash_20 = $(this).val();
                    var computed_20 = cash_20 * 20;
                     var dec_tots = computed_20.toFixed(2);
                        $("#compute_20").val(dec_tots); 
                });

                $("#cash_denomination_10").on("keyup",function(){
                    var cash_10 = $(this).val();
                    var computed_10 = cash_10 * 10;
                     var dec_tots = computed_10.toFixed(2);
                        $("#compute_10").val(dec_tots); 
                });

                $("#cash_denomination_5").on("keyup",function(){
                    var cash_5 = $(this).val();
                    var computed_5 = cash_5 * 5;
                     var dec_tots = computed_5.toFixed(2);
                        $("#compute_5").val(dec_tots); 
                });

                $("#cash_denomination_1").on("keyup",function(){
                    var cash_1 = $(this).val();
                    var computed_1 = cash_1 * 1;
                     var dec_tots = computed_1.toFixed(2);
                        $("#compute_1").val(dec_tots); 
                });

                $("#cash_denomination_25_cents").on("keyup",function(){
                    var cash_25_cents = $(this).val();
                    var computed_25_cents = cash_25_cents * .25;
                     var dec_tots = computed_25_cents.toFixed(2);
                        $("#compute_25_cents").val(dec_tots); 
                });


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
                } // end function compute_total





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
                                // alert(dataResult);

                                Swal.fire({
                                  icon: 'success',
                                  title: 'Full Payment Added Successfully.',
                                  showConfirmButton: false,
                                  timer: 1000
                                });

                            
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
                                // alert(dataResult);

                                Swal.fire({
                                  icon: 'success',
                                  title: 'Custom Sales with Payment Added Successfully.',
                                  showConfirmButton: false,
                                  timer: 1000
                                });
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
                                // alert(dataResult);

                                Swal.fire({
                                  icon: 'success',
                                  title: 'Custom Sales without Payment Added Successfully.',
                                  showConfirmButton: false,
                                  timer: 1000
                                });
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
                                // alert(dataResult);

                                Swal.fire({
                                  icon: 'success',
                                  title: 'Custom Collection Added Successfully.',
                                  showConfirmButton: false,
                                  timer: 1000
                                });
                        }
                });
            });
            //End Custom Collection on Submit



            //Cash Denomination on Submit
            $('#cash_denomination_submit_btn').on('click', function() {
                var cash_denomination_1000 = $("#cash_denomination_1000").val();
                var cash_denomination_500 = $("#cash_denomination_500").val();
                var cash_denomination_200 = $("#cash_denomination_200").val();
                var cash_denomination_100 = $("#cash_denomination_100").val();
                var cash_denomination_50 = $("#cash_denomination_50").val();
                var cash_denomination_20 = $("#cash_denomination_20").val();
                var cash_denomination_10 = $("#cash_denomination_10").val();
                var cash_denomination_5 = $("#cash_denomination_5").val();
                var cash_denomination_1 = $("#cash_denomination_1").val();
                var cash_denomination_25_cents = $("#cash_denomination_25_cents").val();
                var cash_denomination_coinbag = $("#cash_denomination_coinbag").val();
                $.ajax({
                        url: "functions/submit_cash_denomination.php",
                        type: "POST",
                        data: {
                           cd_1000 : cash_denomination_1000,
                           cd_500 : cash_denomination_500,
                           cd_200 : cash_denomination_200,
                           cd_100 : cash_denomination_100,
                           cd_50 : cash_denomination_50,
                           cd_20 :cash_denomination_20,
                           cd_10 : cash_denomination_10,
                           cd_5 : cash_denomination_5,
                           cd_1 : cash_denomination_1,
                           cd_25_cents : cash_denomination_25_cents,
                           cd_coinbag : cash_denomination_coinbag
                        },
                        success: function(dataResult){
                                $("input, select, textarea")
                                    .not("input[type=checkbox], input[type=radio], input[type=button], input[type=submit]")
                                    .val("");
                                $("input[type=checkbox], input[type=radio]").prop("checked", false);
                                // alert(dataResult);

                                Swal.fire({
                                  icon: 'success',
                                  title: 'Cash Count Added Successfully.',
                                  showConfirmButton: false,
                                  timer: 1000
                                });
                        }
                });
            });
            //End Cash Denomination on Submit


            });
        </script>


    </body>

</html>