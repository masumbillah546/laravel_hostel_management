@extends('backend.master')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Payment Approval List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i><i class="fa fa-hand-o-right"></i> Student Payment Approval List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">





                    <div class="row">
                        <div class="col-lg-12">
                            <hr />
                            <div class="table-responsive">
                                <table id="paymentList" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>

                                            <th>Name</th>
                                             <th>Payment Date</th>
                                             <th>Paid By</th>
                                             <th>Transection/Mobile No</th>
                                             <th>Amount</th>
                                             <th>Remark</th>
                                             <th >Action</th >
                                              </tr>
                                    </thead>
                                    <tbody>
                                    	<tr>
                                    		<td></td>
                                    		<td></td>
                                    		<td></td>
                                    		<td></td>
                                    		<td></td>
                                    		<td></td>
                                    		<td><a title='Approve' class='btn btn-info btn-circle' href=''><i class='fa fa-check'></i></a></td>
                                    	</tr>
                                    </tbody>
                                </table>
                            else
                            {
                                echo "<h1 class='text-warning'>Payment Data Not Found!!!</h1>";
                            }
                            ?>
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


    });




</script>
