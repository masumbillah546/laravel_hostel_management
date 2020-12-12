@extends('backend.master')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Meal List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i><i class="fa fa-hand-o-right"></i> Hostel Meal List View
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">


                    <div class="row">
                        <div class="col-lg-12">
                            <hr />
                            <div class="table-responsive">
                                <table id="mealList" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>

                                            <th>Name</th>
                                             <th>No Of Meal</th>

                                             <th>Date</th>
                                              <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                          @foreach($meal as $data)
                                    	<tr>
                                    		<td>{{$data->name}}</td>
                                    		<td>{{$data->noOfMeal}}</td>
                                    		<td>{{$data->date}}</td>
                                    		<td><a title='Edit' class='btn btn-success btn-circle' href=''><i class='fa fa-pencil'></i></a>&nbsp&nbsp<a title='Delete' class='btn btn-danger btn-circle' href=''><i class='fa fa-trash-o'></i></a></td>
                                    	</tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
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



        $('#mealList').dataTable();
    });




</script>
