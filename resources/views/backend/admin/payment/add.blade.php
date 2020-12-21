@extends('backend.master')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Payment Add</h1>
        </div>
        <!-- /.col-lg-12 -->

    </div>
    @if(session('success'))
        <div class="alert alert-success"><strong>{{session('success')}}</strong></div>
        @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i>Student Payment
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form name="attendence" action="/payment/store"  accept-charset="utf-8" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Student Name</label>
                                       <select class="form-control" name="userId" required="">
                                        @php

                                        $st_info = DB::table('studentinfo')->get();

                                        @endphp
                                        <option>select one</option>
                                         @foreach($st_info as $student)
                                        <option value="{{$student->userId}}">{{$student->name}}</option>
                                         @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label>Payment Date</label>
                                        <div class="input-group date" id='dp1'>

                                            <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                                            <!-- <input type="text" placeholder="Payment Date" class="form-control datepicker" name="transDate" required  data-date-format="dd/mm/yyyy"> -->
                                            <input type="text" autocomplete="off" placeholder="Payment Date" class="form-control datepicker" name="transDate" required  data-date-format="yyyy/mm/dd">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Paid By</label>
                                        <select class="form-control" name="paymentBy" required="">

                                            <option value="Bank">Bank</option>
                                            <option value="DBBL">DBBL</option>
                                            <option value="Bkash">BKash</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">

                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label>Transection/Mobile No</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i> </span>
                                            <input type="text" placeholder="Transecton or Mobile no" class="form-control" name="transNo" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label>Amount</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-money"></i> </span>
                                            <input type="text" placeholder="Amount" class="form-control" name="amount" required>
                                        </div>
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
<!-- /#page-wrapper -->


@endsection

<script type="text/javascript">
    $( document ).ready(function() {

        $('.datepicker').datepicker();

    });



</script>