
@extends('backend.master')
@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Meal Rate</h1>
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
                        <i class="fa fa-info-circle fa-fw"></i> Hostel Meal Rate
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form name="mealrate" action="/mealrate/update"  accept-charset="utf-8" method="POST" enctype="multipart/form-data">
                                    @csrf


                                    <div class="row">
                                        <div class="col-lg-12">
                                            @php 
                                             $rate = DB::table('mealrate')->get();
                                            @endphp
                                            @foreach($rate as $r)
                                            <div class="col-lg-4">
                                                <div class="form-group ">
                                                    <label>Rate</label>
                                                    <div class="input-group">

                                                        <span class="input-group-addon"><i class="fa fa-money"></i> </span>
                                                        <input type="text" placeholder="Meal Rate" class="form-control"  value="{{$r->rate}}" name="rate" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group ">
                                                    <label>Note</label>
                                                    <div class="input-group">

                                                        <span class="input-group-addon"><i class="fa fa-info"></i> </span>
                                                        <textarea rows="1" placeholder="Note" class="form-control" name="note" required>{{$r->note}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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



                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

    </div>
    <!-- /#page-wrapper -->


@endsection