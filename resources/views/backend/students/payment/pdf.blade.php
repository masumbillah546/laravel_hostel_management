
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Hostel Management</title>

    <!-- Bootstrap Core CSS -->
 

    <style>

        #page-wrapper {
            border-left: 1px solid #e7e7e7;
            margin: 0 0 0 0px;
            padding: 0 30px;
            position: inherit;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Payment View</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

   

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                 <p><strong>Student ID:</strong> {{session('userId')}}</p>
                 <p><strong>Student Name:</strong> {{session('name')}}</p>
                
              
                <!-- /.panel-heading -->
                <div class="panel-body">
                  
                  
                    

                        <div class="row" style="">
                        <div class="col-lg-12">
                            <hr />
                            <div class="table-responsive">
                                @if($stp->count()>0)
                                <table id="paymentList" border="1" cellpadding="8" cellspacing="0" class="table table-striped table-bordered table-hover">
                                    <thead style="background-color: #61F699">
                                        <tr>

                                         
                                             <th>Payment Date</th>
                                             <th>Paid By</th>
                                             <th>Transection/Mobile No</th>
                                             <th>Amount</th>
                                             <th>Remark</th>
                                             
                                              <th>Is Approve</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($stp as $payment)
                                        <tr>
                                            
                                            <td>{{date("d/m/Y",strtotime($payment->transDate)) }}</td>
                                            <td>{{$payment->paymentBy}}</td>
                                            <td>{{$payment->transNo}}</td>
                                            <td>{{$payment->amount}}</td>
                                            <td>{{$payment->remark}}</td>
                                           
                                            <td>{{$payment->isApprove}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                          
                           @else
                            <h1 class='text-warning'>Payment Data Not Found!!!</h1>
                            @endif  
                            
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


</div>
<!-- /#wrapper -->

<!-- jQuery -->


</body>

</html>


