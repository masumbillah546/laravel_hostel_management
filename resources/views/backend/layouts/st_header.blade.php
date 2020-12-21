
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Hostel Management</title>

    <!-- Bootstrap Core CSS -->
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
    <style>

        #page-wrapper {
            border-left: 1px solid #e7e7e7;
            margin: 0 0 0 0px;
            padding: 0 30px;
            position: inherit;
        }
    </style>
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
            <img alt="HMS" class="pull-left" src="{{ asset('home.png') }}" width="40"><a class="navbar-brand titlehms" href=" echo $base_url.'sdashboard.php'">Hostel Management System</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li>
                <h5 class="titlehms"><!-- {{ Auth::user()->name }} --></h5>
                <h5 class="titlehms">{{ session('email') }}</h5>
            </li>

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bars fa-fw"></i> Menu <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="/stprofile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li>
                        <a href="/stattendence/view"><i class="fa fa-file-text-o fa-fw"></i> Attendence View</a>
                    </li>
                    <li>
                        <a href="/stpayment/add"><i class="fa fa-money fa-fw"></i> Payment Add</a>
                    </li>
                    <li>
                        <a href="/stpayment/view"><i class="fa fa-money fa-fw"></i> Payment view</a>
                        <a href="/stbill/view"><i class="fa fa-money fa-fw"></i>Bill view</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <!-- <a href=" echo $base_url;logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a> -->
                        <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> 
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->


        <!-- /.navbar-static-side -->
    </nav>
