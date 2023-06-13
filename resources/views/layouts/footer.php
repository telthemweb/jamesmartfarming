<footer class="ftco-footer" id="basic-footer">
    <div class="container-fluid bg-dark text-white py-5">
        <div class="row">
            <div class="col-md-12 text-center">

                <p class="mb-0">
                    Copyright JAMES &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
                </p>
            </div>
        </div>
    </div>
</footer>



 <script src="<?php echo url('assets/js/all.min.js'); ?>"></script>
 <script src="<?php echo url('assets/jsvendors/simplebar/js/simplebar.min.js');?>"></script>
    <script src="<?php echo url('assets/jsvendors/chart.js/js/chart.min.js');?>"></script>
    <script src="<?php echo url('assets/jsvendors/@coreui/chartjs/js/coreui-chartjs.js');?>"></script>
    <script src="<?php echo url('assets/jsvendors/@coreui/utils/js/coreui-utils.js');?>"></script>
    <script src="<?php echo url('assets/jsjs/main.js');?>"></script>
    <script src="<?php echo url('assets/js/sweetalert2.js'); ?>"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#myTable").DataTable()
        $("#myTableb").DataTable()
        
    });
</script>
<?php if ($session->getFlash('success')): ?>
        <script type="text/javascript">
            Swal.fire({
                toast: true,
                animation: false,
                showConfirmButton: false,
                timerProgressBar: true,
                position: 'top-right',
                timer: 3000,
                icon:'success',
                background:'green',
                color:'white',
                title:'Success Message',
                text:'<?php echo $session->getFlash('success') ?>'
            })
        </script>
    <?php elseif ($session->getFlash('error')): ?>
        <script type="text/javascript">
            Swal.fire({
                toast: true,
                animation: false,
                position: 'top-right',
                timer: 3000,
                icon:'error',
                background:'red',
                color:'white',
                title:'Error Message',
                showConfirmButton: false,
                timerProgressBar: true,
                text:'<?php echo $session->getFlash('error') ?>'
            })
        </script>
    <?php endif;?>
<script>
    function showPass(){
        var x = document.getElementById("password");
        if(x.type === "password"){
            x.type = "text";
        }else{
            x.type="password";
        }
    }
   

</script>
</body>
</html>
