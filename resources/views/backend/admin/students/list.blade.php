@extends('backend.master')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Student List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i>Student List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">


                    <div class="row">
                        <div class="col-lg-12">
                            <hr />
                            <div class="table-responsive">
                                <table id="studentList" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Mobile No</th>
                                            <th>Institute</th>
                                             <th>Program</th>
                                            <th>L.Guardian</th>
                                           <th>L.G. Mobile</th>
                                           <th>P.Address</th>
                                           <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($st_info as $student)
                                    	<tr>
                                    		<td>{{$student->name}}</td>
                                    		<td>{{$student->cellNo}}</td>
                                    		<td>{{$student->nameOfInst}}</td>
                                    		<td>{{$student->program}}</td>
                                    		<td>{{$student->localGuardian}}</td>
                                    		<td>{{$student->localGuardianCell}}</td>
                                    		<td>{{$student->presentAddress}}</td>
                                    		<td><a title='View' class='btn btn-danger btn-circle' href='/student/profile/{{$student->userId}}'><i class='fa fa-file-o'></i></a><a title='Edit' class='btn btn-success btn-circle' href=''><i class='fa fa-trash-o'></i></a></td>
                                    	</tr>
                                        @endforeach
                                    </tbody>
                                </table>
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



        $('#studentList').dataTable();
    });




</script>