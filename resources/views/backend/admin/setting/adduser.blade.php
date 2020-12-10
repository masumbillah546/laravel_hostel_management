@extends('backend.master')
@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-hand-o-right"></i>System Admin Users</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i> Hostel Admin User Information
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form name="fees" action="adduser.php" onsubmit="return checkForm(this);"  accept-charset="utf-8" method="post" enctype="multipart/form-data">


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                                <label>Login Id</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                                                    <input type="text" placeholder="Login Id" class="form-control" name="loginId" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                                <label>Name</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-leaf"></i> </span>
                                                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                                <label>Password</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                                                    <input type="password" id="password" placeholder="" class="form-control" name="password" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group ">
                                                <label>Confirm Password</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                                                    <input type="password" id="rePassword" placeholder="" class="form-control" name="rePassword" required>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label id="lblmsg" class="red"></label>
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
                                <table id="userList" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>

                                            <th>Login ID</th>
                                            <th>Name</th>
                                             <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<tr>
                                    		<td></td>
                                    		<td></td>
                                    		<td><a title='Edit' class='btn btn-success btn-circle' href=''><i class='fa fa-pencil'></i></a>&nbsp&nbsp<a title='Delete' class='btn btn-danger btn-circle' href=''><i class='fa fa-trash-o'></i></a></td>
                                    	</tr>
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



        $('#userList').dataTable();
    });

    function checkForm(form) {

        var password = document.getElementById("password")
            , confirm_password = document.getElementById("rePassword");
        console.log(password.value);
        console.log(confirm_password.value);
        if(password.value != confirm_password.value) {

            $("#lblmsg").text("**Passwords Don't Match");

            return false;
        } else {

            return true;
        }

    }

</script>