@extends('backend.smaster')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Payment View</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i><i class="fa fa-hand-o-right"></i> Student Payment View
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form name="apyment" action="view.php"  accept-charset="utf-8" method="post" enctype="multipart/form-data">
                        <button type="submit" class="btn btn-info" style="display: echo $disBtnPrint2;;" name="btnPrint" ><i class="fa fa-print"></i>Print</button>
                    </form>
                    <form name="apyment" action="view.php"  accept-charset="utf-8" method="post" enctype="multipart/form-data">
                        <div class="row" id="divview" style="display: echo $display;">
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Student Name</label>
                                        <select class="form-control" name="person" required="">
                                             echo $GLOBALS['output1'];

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <div>
                                            <button type="submit" class="btn btn-success" name="btnUpdate" ><i class="fa fa-check-circle-o"></i>View</button>
                                            <button type="submit" class="btn btn-info" style="display: echo $disBtnPrint;;" name="btnPrint" ><i class="fa fa-print"></i>Print</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <div id="editpayment" class="" style="display:none">
                        <form name="apyment" action="view.php"  accept-charset="utf-8" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-lg-12">
                                 <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label>Payment Date</label>
                                        <div class="input-group date" id='dp1'>

                                            <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                                            <input id="paydate" type="text" placeholder="Payment Date" class="form-control datepicker" name="paydate" required  data-date-format="dd/mm/yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Paid By</label>
                                        <select id="payby" class="form-control" name="paidby" required="">

                                            <option value="Bank">Bank</option>
                                            <option value="DBBL">DBBL</option>
                                            <option value="Bkash">BKash</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label>Transection/Mobile No</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i> </span>
                                            <input id="transno" type="text" placeholder="Transecton or Mobile no" class="form-control" name="transno" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">


                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label>Amount</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-money"></i> </span>
                                            <input id="amount" type="text" placeholder="Amount" class="form-control" name="amount" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label>Remark</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-info"></i> </span>
                                            <input id="remark" type="text" placeholder="Additional Info" class="form-control" name="remark" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label>&nbsp;</label>
                                        <div class="input-group">

                                            <button type="submit" class="btn btn-success pull-right" name="btnUpdatePay" ><i class="fa fa-2x fa-check"></i>Update</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                         </form>
                        </div>

                        <div class="row" style="display: echo $displaytable;">
                        <div class="col-lg-12">
                            <hr />
                            <div class="table-responsive">
                                @if($stdpayment->count()>0)
                                <table id="paymentList" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>

                                            <th>Name</th>
                                             <th>Payment Date</th>
                                             <th>Paid By</th>
                                             <th>Transection/Mobile No</th>
                                             <th>Amount</th>
                                             <th>Remark</th>
                                             <th > Action</th >
                                              <th>Is Approve</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($stdpayment as $payment)
                                    	<tr>
                                    		<td>{{$payment->userId}}</td>
                                    		<td>{{$payment->transDate}}</td>
                                    		<td>{{$payment->paymentBy}}</td>
                                    		<td>{{$payment->transNo}}</td>
                                    		<td>{{$payment->amount}}</td>
                                    		<td>{{$payment->remark}}</td>
                                    		<td>
                                    			<a title='Edit' class='btn btn-success btn-circle editBtn' href=''><i class='fa fa-pencil'></i></a>&nbsp&nbsp<a title='Delete' class='btn btn-danger btn-circle' href=''><i class='fa fa-trash-o'></i></a>
                                    		</td>
                                    		<td>{{$payment->isApprove}}</td>
                                    	</tr>
                                        @endforeach
                                    </tbody>
                                </table>
                          
                           @else
                            <h1 class='text-warning'>Payment Data Not Found!!!</h1>
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

        $('#paymentList').dataTable();
        $('.editBtn').on('click', function(){

            $('#divview').hide();
            $('#editpayment').show();

            var serial=$(this).attr('href').substring(1);

            $('#paydate').val($(this).closest("tr").find("td").eq('1').text());
            $('#payby').val($(this).closest("tr").find("td").eq('2').text());
            $('#transno').val($(this).closest("tr").find("td").eq('3').text());
            $('#amount').val($(this).closest("tr").find("td").eq('4').text());
            $('#remark').val($(this).closest("tr").find("td").eq('5').text());

            $.ajax({
                type: 'POST',
                url: '/hms/sesboss.php',
                data: {'serial': serial},
                success: function (msg) {
                    // alert(msg);
                },
                error: function (err){
                    console.log(err);
                    alert('Error');
                }
            });

        });

        $("select option").filter(function() {

            return $(this).val() ==' echo $uid=$ses->Get("UserIddrp");';
        }).prop('selected', true);

    });




</script>
