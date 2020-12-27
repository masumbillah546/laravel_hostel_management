@extends('backend.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Attendence Add</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
      @if(session('success'))
        <div class="alert alert-success"><strong>{{session('success')}}</strong></div>
        @endif

        @if(session('ns'))
        <div class="alert alert-warning"><strong>{{session('ns')}}</strong></div>
        @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i>Student Attendence
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form name="attendence" action="/attendence/store"  accept-charset="utf-8" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Student Name</label>
                                        <select class="form-control" name="userId" required="">
                                            <option>Select student</option>
                                            @foreach($st_info as $student)
                                             <option value="{{$student->userId}}">U00{{$student->userId}} - {{$student->name}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label>Attend Date</label>
                                        <div class="input-group date" id='dp1'>

                                            <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                                            <input disabled="" type="text" placeholder="Attend Date" class="form-control datepicker" name="date" autocomplete="off" required  data-date-format="yyyy/mm/dd">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Is Absence</label>
                                        <select class="form-control" name="isAbsence" required="">

                                        <option value="No">No</option>
                                         <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Is Leave</label>
                                        <select class="form-control" name="isLeave" required="">

                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label>Remark</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-info"></i> </span>
                                            <input type="text" placeholder="Additional Info" class="form-control" name="remark" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>





                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-2">
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-success" name="btnSave" ><i class="fa fa-2x fa-check"></i>Save</button>
                                    </div>

                                </div>
                                <div class="col-lg-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

</div>

@endsection


<script type="text/javascript">
    $( document ).ready(function() {

        $('.datepicker').datepicker();

    });



</script>