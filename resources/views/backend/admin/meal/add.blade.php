@extends('backend.master')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Meal Add</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i>Student Meal[ToDay]
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                  

                    <div class="row">
                        <div class="col-lg-12">
                            <hr />


                        <form name="meal" action="/meal/store"  accept-charset="utf-8" method="POST" enctype="multipart/form-data">
                        @csrf

                        <button type="submit" class="btn btn-success" name="btnSave" ><i class="fa fa-2x fa-check"></i>Save</button><br><br>

                            <div class="table-responsive">
                                <table id="mealList" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>

                                            <th>ID</th>
                                            <th>Name</th>
                                             <th>No Of Meal</th>
                                              <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                @foreach($st_info as $student)
                                   
                                         
                                        <tr>
                                            <td><input type="hidden" name="userId[]" value="{{$student->userId}}">
                                                U00{{$student->userId}}
                                            </td>
                                            <td>{{$student->name}}</td>
                                          <td>
                                                @php
                                                $meal = DB::table('meal')->where('userId',$student->userId)->where('date',date("Y/m/d"))->get();
                                                @endphp

                                                @foreach($meal as $m)
                                                    
                                                   <!-- <input type="text" placeholder="No Of Meal" class="form-control" name="noOfMeal[]" value="{{$m->noOfMeal==0?'':$m->noOfMeal}}" > -->
                                                   <input type="text" placeholder="No Of Meal" class="form-control" name="noOfMeal[]" value="{{$m->noOfMeal}}" >

                                                @endforeach
                                                 @if(!count($meal))
                                                   <input type="text" placeholder="No Of Meal" class="form-control" name="noOfMeal[]" value="" >   

                                                   @endif

                                                </td>
                                     
                                            <td>
                                                <button type="submit" class="btn btn-success" name="btnSave" >Save</button>
                                                &nbsp&nbsp<a title='Delete' class='btn btn-danger' href=''>Delete</a></td>
                                        </tr>
                                             @endforeach


                                    </tbody>
                                </table>
                            </div>

                            <button type="submit" class="btn btn-success" name="btnSave" ><i class="fa fa-2x fa-check"></i>Save</button>
                        </form>

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



    });



</script>
