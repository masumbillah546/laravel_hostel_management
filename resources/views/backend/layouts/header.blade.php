
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hostel Management</title>
    

    <!-- Bootstrap Core CSS -->
    <!-- <link href="{{ asset ('dist/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset ('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('dist/css/datepicker.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset ('dist/css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset ('dist/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset ('dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset ('dist/css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset ('dist/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('dist/css/dataTable.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('dist/css/timepicker.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('dist/css/calendar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('dist/css/custom_2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('dist/css/app.css') }}" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js') }}/1.4.2/respond.min.js') }}"></script>
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
            <img alt="HMS" class="pull-left" src="{{ asset('home.png') }}" width="40"><a class="navbar-brand titlehms" href="#">Hostel Management System</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li>
                <h5 class="titlehms">Admin</h5>
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
                        <a href="/admin"><i class="fa fa-2x fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file-text fa-fw"></i>Attendence<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/attendence/add">Add Attendence</a>
                            </li>
                            <li>
                                <a href="/attendence/list">Attendence List View</a>
                            </li>
                            <li>
                                <a href="/attendence/view">Attendence View</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-maxcdn fa-fw"></i>Meal Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/meal/add">Add New</a>
                            </li>
                            <li>
                                <a href="/meal/view">List View</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-money fa-fw"></i>Cost Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/cost/add">Add New</a>
                            </li>
                            <li>
                                <a href="/cost/view">List View</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i>Students Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/student/admission">Admission</a>
                            </li>
                            <li>
                                <a href="/student/list">Student List</a>
                            </li>

                            <li>
                                <a href="/student/deposit">Deposit</a>
                            </li>
                            <li>
                                <a href="/seatalocation">Seat Alocation</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-money fa-fw"></i>Students Payment<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/payment/add">Add</a>
                            </li>
                            <li>
                                <a href="/payment/approval">Approval List</a>
                            </li>

                            <li>
                                <a href="/payment/view">View</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i>Employee Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/employee/add">Add New</a>
                            </li>
                            <li>
                                <a href="/employee/list">List view</a>
                            </li>

                            <li>
                                <a href="/employee/addsalary">Salary Add</a>
                            </li>
                            <li>
                                <a href="/employee/viewsalary">Salary View</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dollar fa-fw"></i>Vendor Payment<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/vendor/add">Add New</a>
                            </li>
                            <li>
                                <a href="/vendor/view">List View</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa  fa-file-text fa-fw"></i>Bill Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/bill/add">Add New</a>
                            </li>
                            <li>
                                <a href="/bill/view">List View</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-list-alt fa-fw"></i>Notice Board<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/notice/add">Notice Add/List</a>
                            </li>



                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-cog fa-fw"></i>Setting<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/setting/adduser">System Admin User</a>
                            </li>


                        </ul>
                    </li>
                    <li>

                        <a href="#"><i class="fa fa-gears fa-fw"></i>Setup<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Fees</a>
                            </li>
                            <li>
                                <a href="#">Meal Rate</a>
                            </li>
                            <li>
                                <a href="#">Time Set</a>
                            </li>
                            <li>
                                <a href="#">Blocks</a>
                            </li>
                            <li>
                                <a href="/admin/room">Rooms</a>
                            </li>

                        </ul>
                    </li>


                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>




