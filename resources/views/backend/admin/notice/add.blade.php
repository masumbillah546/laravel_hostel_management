@extends('backend.master')
@section('content')

<script src="{{ asset ('dist/ckeditor/ckeditor.js') }}"></script>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms">Notice Board</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i> Hostel Notice Information
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form name="notice" action="/notice"   accept-charset="utf-8" method="POST" enctype="multipart/form-data">
                            	@csrf


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                            <div class="form-group ">
                                                <label>Title</label>
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-info"></i> </span>
                                                    <input type="text" placeholder="Notice Title" class="form-control" name="title" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group ">
                                                <label>Description</label>
                                                
                                                    <textarea id="ck" rows="" placeholder="Description" class="form-control" name="description" required></textarea>
                                                    <script>CKEDITOR.replace('ck')</script>
                                              
                                            </div>
                                        </div>



                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="col-lg-2">
                                            <div class="form-group ">
                                                <button type="submit" class="btn btn-success" name="btnSave" ><i class="fa fa-2x fa-check"></i>Save</button>
                                            </div>

                                        </div>
                                        <div class="col-lg-7">
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
                                <table id="noticeList" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>

                                            <th>Title</th>
                                            <th>Description</th>
                                             <th>Sumited Date</th>
                                              <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<tr>
                                    		<td></td>
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



        $('#noticeList').dataTable();
    });




</script>