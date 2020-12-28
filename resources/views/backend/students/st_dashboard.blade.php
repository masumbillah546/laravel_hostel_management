@extends('backend.smaster')
@section('content')
<div class="container" style="background-color: white">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-6">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Student Dashboard<i class="fa fa-hand-o-left"></i></h1>
            </div>
           <!--  <div class="col-lg-6">
            <form action="" accept-charset="utf-8" method="post" enctype="multipart/form-data">
                <button class="btn btn-success pull-right margin-to-5" type="submit" name="btnAttend"><i class="fa fa-2x fa-check"></i>Attendence</button>
            </form>
                </div> -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-7">
                            <i class="fa fa-maxcdn fa-4x"></i>
                            <div style="">Today's Meal: {{$meals->sum('noOfMeal')}}</div>
                        </div>

                        <div class="col-xs-5 text-right">

                            <div class="huge">{{$mealst->sum('noOfMeal')}}</div>
                            <div>Total Meal</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-money fa-4x"></i>
                         
                            <div>Rate:@foreach($mealrate as $data){{$data->rate}}</div>
                            
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$mealst->sum('noOfMeal')*$data->rate}}</div>@endforeach
                            <div>Total Meal Cost</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-money fa-4x"></i>
                        </div>
                        @php
                           $p= $stdpayment->sum('amount');
                           $t= $mealst->sum('noOfMeal')*$data->rate + $billing->sum('amount') + $seataloc->sum('monthlyRent');


                        @endphp
                        <div class="col-xs-9 text-right">
                            <div class="huge"> {{$p-$t}}</div>
                            @if($p-$t>=0)
                            <div>Current Deposit</div>
                            @else
                              <div>Current Due</div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-7">
                            <i class="fa fa-money fa-4x"></i>
                            <div>
                                <span class="">Seat Rent: {{$seataloc->sum('monthlyRent')}}</span><br>
                           
                            <span class="">Meal Cost: {{$mealst->sum('noOfMeal')*$data->rate}}</span><br>
                            <span class="">Others Cost: {{$billing->sum('amount')}}</span>
                            </div>
                        </div>
                        <div class="col-xs-5 text-right">

                          <div class="huge">{{$mealst->sum('noOfMeal')*$data->rate + $billing->sum('amount') + $seataloc->sum('monthlyRent')}}</div>
                            <div>Total Cost</div>
                                
                         
                            
                        
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <i class="fa fa-list-alt fa-fw"></i>Notice Board
                </div>
                <div class="panel-body">
                    <div id="accordion" class="panel-group">
                      @foreach($notices as $notice)
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#{{$notice->serial }}" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                            {{$notice->title}}&nbsp;[{{$notice->createdDate}}]
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="{{$notice->serial }}" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        {!!$notice->description!!}
                                    </div>
                                </div>
                            </div>
                           
                        @endforeach
                        
                    </div>
                </div>
                <div class="panel-footer">

                </div>
            </div>
        </div>
        <div class="col-lg-6">

            <div class="custom-calendar-wrap">
                <div id="custom-inner" class="custom-inner">
                    <div class="custom-header clearfix">
                        <nav>
                            <span id="custom-prev" class="custom-prev"></span>
                            <span id="custom-next" class="custom-next"></span>
                        </nav>
                        <h2 id="custom-month" class="custom-month"></h2>
                        <h2 id="custom-year" class="custom-year"></h2>
                    </div>
                    <div id="calendar" class="fc-calendar-container"></div>

                </div>
            </div>


        </div>
    </div>

</div>
<!-- /#page-wrapper -->

@endsection



