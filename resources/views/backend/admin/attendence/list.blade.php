@extends('backend.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Attendence List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i>Student Attendence
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form name="attendence" action="list.php?update=1"  accept-charset="utf-8" method="post" enctype="multipart/form-data">


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Student Name</label>
                                        <input id="name" type="text" placeholder="" class="form-control" name="person" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group ">
                                        <label>Attend Date</label>
                                        <div class="input-group date" id='dp1'>

                                            <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                                            <input id="attendDate" type="text" placeholder="Attend Date" disabled class="form-control datepicker" name="attendDate" required  data-date-format="dd/mm/yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Is Absence</label>
                                        <select id="abs" class="form-control" name="isabs" required="">

                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Is Leave</label>
                                        <select id="leave" class="form-control" name="isLeave" required="">

                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-group ">
                                        <label>Remark</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-info"></i> </span>
                                            <input id="remark" type="text" placeholder="Additional Info" class="form-control" name="remark" required>
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
                                        <button type="submit" class="btn btn-success" name="btnUpdate" ><i class="fa fa-2x fa-check"></i>Update</button>
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
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i><i class="fa fa-hand-o-right"></i> Student Attendence List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">


                    <div class="row">
                        <div class="col-lg-12">
                            <hr />
                            <div class="table-responsive">
                                <table id="attendenceList" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>

                                            <th>ID</th>
                                            <th>Name</th>
                                             <th>Attend Date</th>
                                             <th>Is Absence</th>
                                             <th>Is Leave</th>
                                             <th>Remark</th>
                                              <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($att as $data)
                                        <tr>
                                            <td>U00{{$data->userId}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->date}}</td>
                                            <td>{{$data->isAbsence}}</td>
                                            <td>{{$data->isLeave}}</td>
                                            <td>{{$data->remark}}</td>
                                            <td><a title='Edit' class='btn btn-success btn-circle editBtn' href=''><i class='fa fa-pencil'></i></a>&nbsp&nbsp<a title='Delete' class='btn btn-danger btn-circle' href=''><i class='fa fa-trash-o'></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h1 class='text-warning'>Attendance Data Not Found!!!</h1>
                             
                            
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
        $('.datepicker').datepicker();
        $('#attendenceList').dataTable();

        $('.editBtn').on('click', function(){

           var serial=$(this).attr('href').substring(1);
           var name=$(this).closest("tr").find("td").eq('0').text();


            $("#name").val(name);
            $('#attendDate').val($(this).closest("tr").find("td").eq('1').text());
            $('#abs').val($(this).closest("tr").find("td").eq('2').text());
            $('#leave').val($(this).closest("tr").find("td").eq('3').text());
            $('#remark').val($(this).closest("tr").find("td").eq('4').text());

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
    });




</script>
