<footer class="container-fluid text-center"  style="background-color: #32527D; color: white">
  <div class="row" >
   <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <p>
                    © 2020 Himanta Student Hostel. All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-4"></div>
  </div>
</footer>


<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset ('dist/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset ('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('dist/js/bootstrap-datepicker.js') }}"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset ('dist/js/metisMenu.min.js') }}"></script>

<!-- Morris Charts JavaScript
<script src="{{ asset ('dist/js/raphael-min.js') }}"></script>
<script src="{{ asset ('dist/js/morris.min.js') }}"></script>
<script src="{{ asset ('dist/js/morris-data.js') }}"></script>
-->
<!-- Custom Theme JavaScript -->
<script src="{{ asset ('dist/js/sb-admin-2.js') }}"></script>
<script src="{{ asset ('dist/js/dataTable.js') }}"></script>
<script src="{{ asset ('dist/js/timepicker.js') }}"></script>

<script src="{{ asset ('dist/js/modernizr.custom.63321.js') }}"></script>

<script src="{{ asset ('dist/js/jquery.calendario.js') }}"></script>
<script src="{{ asset ('dist/js/data.js') }}"></script>
<script src="{{ asset ('dist/js/app.js') }}"></script>



</body>
</html>



<script type="text/javascript">
    $( document ).ready(function() {
        $('.datepicker').datepicker();


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

