@extends('backend.emaster')
@section('content')
    <div class="container" style="background-color: white">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Dashboard<i class="fa fa-hand-o-left"></i></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-list-alt fa-fw"></i>Notice Board
                    </div>
                    <div class="panel-body">
                        <div id="accordion" class="panel-group">
                             while ($row = mysql_fetch_array($GLOBALS['data'])) {


                                echo  '<div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#'.$row['serial'].'" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" class="collapsed">'.$row['title'].'&nbsp;['.$row['date'].']</a>';
                                echo         '</h4>
                                </div>
                                <div class="panel-collapse collapse" id="'.$row['serial'].'" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">';
                                echo $row['description'];
                                echo    '</div></div></div>';


                            }
                           
                        </div>
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
            <div class="col-lg-6">

                <div class="custom-calendar-wrap">
                    <div id="custom-inner" class="custom-inner">
                        <div class="custom-header clearfix">
                            <nav>
                                <span id="custom-prev" class="custom-prev"></span>
                                <span id="custom-next" class="custom-next"></span>
                            </nav>
                            <h2 id="custom-month" class="custom-month"></h2>
                            <h2 id="custom-year" class="custom-year"></h2>
                        </div>
                        <div id="calendar" class="fc-calendar-container"></div>

                    </div>
                </div>


            </div>
        </div>

    </div>
    <!-- /#page-wrapper -->

@endsection