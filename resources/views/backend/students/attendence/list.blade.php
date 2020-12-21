@extends('backend.smaster')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Attendence View</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i><i class="fa fa-hand-o-right"></i> Student Attendence View
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                   

                    <div class="row" style="@if(!$att->count())display: none;@else display: ; @endif">
                        <div class="col-lg-12">
                            <hr />
                            <div class="table-responsive">
                                <table id="attendenceList" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>

                                            <th>Name</th>
                                             <th>Attend Date</th>
                                             <th>Is Absence</th>
                                             <th>Is Leave</th>
                                             <th>Remark</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($att as $data)
                                        <tr>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->date}}</td>
                                            <td>{{$data->isAbsence}}</td>
                                            <td>{{$data->isLeave}}</td>
                                            <td>{{$data->remark}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                @if(!$att->count())
                           <h1 class='text-warning'>Attendance Data Not Found!!!</h1>";
                                @endif
                        </div>
                    </div>


                </div>
                <!-- /.panel-body -->
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

</div>
<!-- /#page-wrapper -->

@endsection

<script type="text/javascript">
    $( document ).ready(function() {

        $('#attendenceList').dataTable();

    });




</script>
