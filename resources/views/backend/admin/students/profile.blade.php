
@extends('backend.master')
@section('content')

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>Profile<i class="fa fa-hand-o-left"></i></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="panel panel-info">
        <div class="panel-heading">
            <i class="fa fa-info-circle fa-fw"></i>User Information
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
        	@foreach($profile as $student)

            <div class="row">
                <div class="col-lg-12">

                        <div class="col-lg-4">
                            </div>
                        <div class="col-lg-4" >
                            <img style="border: 1px solid black" src="{{asset('storage/images').'/'.$student->perPhoto}}" alt="Avatar" height="220px" class="img-responsive img-rounded proimg" >
                        </div>
                        <div class="col-lg-4">
                        </div>
                    </div>
                </div>

               <hr />
              <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Name:</label>
                   <span> {{$student->name}}</span>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Student Id:</label>
                    <span> {{$student->userId}}</span>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Cell NO:</label>
                    <span> {{$student->cellNo}}</span>

                </div>

            </div>

        </div>
    </div>
            <div class="row">
                <div class="col-lg-12">
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Email:</label>
                    <span> {{$student->email}}</span>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Institute:</label>
                    <span> {{$student->nameOfInst}}</span>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Program:</label>
                    <span> {{$student->program}}</span>

                </div>

            </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Batch:</label>
                    <span> {{$student->batchNo}}</span>

                </div>

            </div>
                    <div class="col-lg-4">
                        <div class="form-group ">
                            <label>Gender:</label>
                            <span> {{$student->gender}}</span>

                        </div>

                    </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Birth Date:</label>
                    <span> {{$student->dob}}</span>

                </div>

            </div>

                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <div class="form-group ">
                            <label>Bool Group:</label>
                            <span> {{$student->bloodGroup}}</span>

                        </div>

                    </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Natinality:</label>
                    <span> {{$student->nationality}}</span>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>National Id:</label>
                    <span> {{$student->nationalId}}</span>

                </div>

            </div>

                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <div class="form-group ">
                            <label>Passport No:</label>
                            <span> {{$student->passportNo}}</span>

                        </div>

                    </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Father Name:</label>
                    <span> {{$student->fatherName}}</span>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>F.Cell NO:</label>
                    <span> {{$student->fatherCellNo}}</span>

                </div>

            </div>

                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <div class="form-group ">
                            <label>Mother Name:</label>
                            <span> {{$student->motherName}}</span>

                        </div>

                    </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>M. Cell NO:</label>
                    <span> {{$student->motherCellNo}}</span>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Local Guardian:</label>
                    <span> {{$student->localGuardian}}</span>

                </div>

            </div>

                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <div class="form-group ">
                            <label>L.G Cell NO:</label>
                            <span> {{$student->localGuardianCell}}</span>

                        </div>

                    </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Present Addres:</label>
                    <div> {{$student->presentAddress}}</div>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="form-group ">
                    <label>Parmanent Address:</label>
                    <div> {{$student->parmanentAddress}}</div>

                </div>

            </div>

            @endforeach
                    <div class="row">
                        <div class="col-lg-12">

        <div class="panel-footer">


        </div>
        </div>
                        </div>
                    </div>

                </div>
           </div>
            </div>



</div>
<!-- /#page-wrapper -->

@endsection
</div>


