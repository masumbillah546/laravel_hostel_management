{{ asset('dist/css/bootstrap.min.css') }}
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>$GLOBALS['title']></title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{!! HTML::style('/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="dist/css/datepicker.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="dist/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="dist/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="dist/css/dataTable.css" rel="stylesheet" type="text/css">
    <link href="dist/css/timepicker.css" rel="stylesheet" type="text/css">
    <link href="dist/css/calendar.css" rel="stylesheet" type="text/css">
    <link href="dist/css/custom_2.css" rel="stylesheet" type="text/css">
    <link href="dist/css/app.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img alt="HMS" class="pull-left" src="khali"><a class="navbar-brand titlehms" href="">Hostel Management System</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li>
                <h5 class="titlehms">name</h5>
            </li>

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">

                    <li><a href="ui/setting/adduser.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href=""><i class="fa fa-2x fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file-text fa-fw"></i>Attendence<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">Add Attendence</a>
                            </li>
                            <li>
                                <a href="">Attendence List View</a>
                            </li>
                            <li>
                                <a href="">Attendence View</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-maxcdn fa-fw"></i>Meal Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">Add New</a>
                            </li>
                            <li>
                                <a href="">List View</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-money fa-fw"></i>Cost Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">Add New</a>
                            </li>
                            <li>
                                <a href="">List View</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i>Students Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">Admission</a>
                            </li>
                            <li>
                                <a href="">Student List</a>
                            </li>

                            <li>
                                <a href="">Deposit</a>
                            </li>
                            <li>
                                <a href="">Seat Alocation</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-money fa-fw"></i>Students Payment<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">Add</a>
                            </li>
                            <li>
                                <a href="">Approval List</a>
                            </li>

                            <li>
                                <a href="">View</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i>Employee Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">Add New</a>
                            </li>
                            <li>
                                <a href="">List view</a>
                            </li>

                            <li>
                                <a href="">Salary Add</a>
                            </li>
                            <li>
                                <a href="">Salary View</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dollar fa-fw"></i>Vendor Payment<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">Add New</a>
                            </li>
                            <li>
                                <a href="">List View</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa  fa-file-text fa-fw"></i>Bill Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">Add New</a>
                            </li>
                            <li>
                                <a href="">List View</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-list-alt fa-fw"></i>Notice Board<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">Notice Add/List</a>
                            </li>



                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-cog fa-fw"></i>Setting<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">System Admin User</a>
                            </li>


                        </ul>
                    </li>
                    <li>

                        <a href="#"><i class="fa fa-gears fa-fw"></i>Setup<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="">Fees</a>
                            </li>
                            <li>
                                <a href="">Meal Rate</a>
                            </li>
                            <li>
                                <a href="">Time Set</a>
                            </li>
                            <li>
                                <a href="">Blocks</a>
                            </li>
                            <li>
                                <a href="">Rooms</a>
                            </li>

                        </ul>
                    </li>


                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>



</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="dist/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/bootstrap-datepicker.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="dist/js/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript
<script src="dist/js/raphael-min.js"></script>
<script src="dist/js/morris.min.js"></script>
<script src="dist/js/morris-data.js"></script>
-->
<!-- Custom Theme JavaScript -->
<script src="dist/js/sb-admin-2.js"></script>
<script src="dist/js/dataTable.js"></script>
<script src="dist/js/timepicker.js"></script>

<script src="dist/js/modernizr.custom.63321.js"></script>

<script src="dist/js/jquery.calendario.js"></script>
<script src="dist/js/data.js"></script>
<script src="dist/js/app.js"></script>

</body>

</html>
