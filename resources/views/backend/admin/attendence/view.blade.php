@extends('backend.master')
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
                    <form name="attendence" action="view.php"  accept-charset="utf-8" method="post" enctype="multipart/form-data">
                    <div class="row" style="display: echo $display;">
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
                                    </div>

                            </div>
                        </div>

                   </div>
                        </div>
                    </form>

                    <div class="row" style="display: echo $displaytable;">
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
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                           <h1 class='text-warning'>Attendance Data Not Found!!!</h1>";
                         
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
