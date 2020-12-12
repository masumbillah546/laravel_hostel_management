</div>
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



        $('#mealList, #paymentList,#studentList,#depositList,#seatList,#billList,#noticeList,#roomList').dataTable();
    });




</script>

<script type="text/javascript">
    $( document ).ready(function() {
        $('.datepicker').datepicker();
        $('#attendenceList').dataTable();

        $('.editBtn').on('click', function(){

           var serial=$(this).attr('href').substring(1);
           var name=$(this).closest("tr").find("td").eq('0').text();


            $("#name").val(name);
            $('#attendDate').val($(this).closest("tr").find("td").eq('1').text());
            $('#abs').val($(this).closest("tr").find("td").eq('2').text());
            $('#leave').val($(this).closest("tr").find("td").eq('3').text());
            $('#remark').val($(this).closest("tr").find("td").eq('4').text());

            $.ajax({
                type: 'POST',
                url: '/hms/sesboss.php',
                data: {'serial': serial},
                success: function (msg) {
                   // alert(msg);
                },
                error: function (err){
                    console.log(err);
                    alert('Error');
                }
            });

        });
    });




</script>

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
