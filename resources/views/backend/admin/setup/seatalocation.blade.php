
@extends('backend.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Seat Alocation</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i>Student's Seat Alocation
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form name="deposit" action="/seatalocation/store"  accept-charset="utf-8" method="POST" enctype="multipart/form-data">
                            	@csrf

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Student Name</label>
                                                <select class="form-control" name="userId" required="">
                                                	 <option>select one</option>
                                                	 @foreach($st_info as $student)
                                                   
                                                    <option value="{{$student->userId}}">U00{{$student->userId}} - {{$student->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Block No</label>
                                                <select class="form-control" name="blockNo" required="">
                                                    <option>select one</option>
                                                	 @foreach($rooms as $room)
                                                   
                                                    <option>{{$room->blockId}}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Room No</label>
                                                <select class="form-control" name="roomNo" required="">
                                                    <option>select one</option>
                                                	 @foreach($rooms as $room)
                                                   
                                                    <option>{{$room->roomNo}}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                                <label>Monthly Rent</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-info"></i> </span>
                                                    <input type="text" placeholder="Monthly Rent" class="form-control" name="monthlyRent" required>
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
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <hr />
                            <div class="table-responsive">
                                <table id="seatList" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Block No</th>
                                            <th>Room No</th>
                                            <th>Monthly Rent</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($seataloc as $data)
                                    	<tr>
                                    		<td>U00{{$data->userId}}</td>
                                            <td>{{$data->name}}</td>
                                    		<td>{{$data->blockNo}}</td>
                                    		<td>{{$data->roomNo}}</td>
                                    		<td>{{$data->monthlyRent}}</td>
                                    		<td>
                                    			<a title='Edit' class='btn btn-success btn-circle' href='seatalaction.php?id=" . $row['userId'] ."&wtd=edit'"."><i class='fa fa-pencil'></i></a>&nbsp&nbsp<a title='Delete' class='btn btn-danger btn-circle' href='seatalaction.php?id=" . $row['userId'] ."&wtd=delete'"."><i class='fa fa-trash-o'></i></a>
                                    		</td>
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
@endsection

<script type="text/javascript">
    $( document ).ready(function() {
        $('#seatList').dataTable();


    });



</script>