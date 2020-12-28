@extends('backend.master')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Billing View</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i> Hostel Bill List View

                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">


                    <div class="row">
                        <div class="col-lg-12">
                            <hr />
                            <div class="table-responsive">
                                <table id="" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>

                                            <th>Bill Id</th>
                                             <!-- <th>Name</th> -->
                                            <th>Amount</th>
                                            <th>Type</th>

                                             <th>Bill Date</th>
                                             <th>Action</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($billing as $data)
                                    	<tr>
                                    		
                                            <td>{{$data->billId}}</td>
                                    		
                                    		<td>{{$data->amount}}</td>
                                            <td>{{$data->type}}</td>
                                    		<td>{{$data->billingDate}}</td>
                                    		<td><a title='Edit' class='btn btn-success btn-circle' href=''><i class='fa fa-trash-o'></i></a>&nbsp<a title='Delete' class='btn btn-danger btn-circle' href=''><i class='fa fa-trash-o'></i></a></td>
                                    	</tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header alert alert-info">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 id="myModalLabel" class="modal-title"></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                           <div class=""><label>Bill No: </label> <span id="billId"></span></div>
                                            </div> <div class="col-lg-6">
                                           <div class=""><label>Bill Date: </label> <span id="billDate"></span></div>
                                            </div>
                                            </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                        <table id="mbilllist" class="table table-responsive table-hover text-center">
                                            <thead >
                                            <tr>
                                                <th class="text-center text-primary">Type</th>
                                               <th class="text-center text-primary">Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            </table>
                                            <div class="text-info"><label>Total: </label> <span id="total"></span></div>
                                        </div>

                                    </div>
                                <p></p>
                                </div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-primary" type="button">Close</button>

                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->



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



        $('#billList').dataTable();
        $('.showModal').on('click', function(e) {
            e.preventDefault();

           var table =document.getElementById('billList');
            var r =  $(this).parent().parent().index();
           var BillTo =table.rows[r+1].cells[1].innerHTML;
            var billId=table.rows[r+1].cells[0].innerHTML;
            var date = table.rows[r+1].cells[3].innerHTML;
            var t = table.rows[r+1].cells[2].innerHTML;
            $('#myModalLabel').text("Billing Info of ["+BillTo+"]");
            $('#billId').text(billId);
            $('#billDate').text(date);
            $('#total').text(t);


            value = new Array();
            $.ajax({
                type: "GET",
                url: "action.php",
                dataType: 'json',
                success: function (result) {
                    alert(result);
                }

            });
          //  $("#myModal").modal('show');


        });
    });




</script>