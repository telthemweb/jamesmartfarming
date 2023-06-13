<script src="<?php echo url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo url('assets/js/all.min.js'); ?>"></script>
 <script src="<?php echo url('assets/jsvendors/simplebar/js/simplebar.min.js');?>"></script>
    <script src="<?php echo url('assets/jsvendors/chart.js/js/chart.min.js');?>"></script>
    <script src="<?php echo url('assets/jsvendors/@coreui/chartjs/js/coreui-chartjs.js');?>"></script>
    <script src="<?php echo url('assets/jsvendors/@coreui/utils/js/coreui-utils.js');?>"></script>
    <script src="<?php echo url('assets/jsjs/main.js');?>"></script>
    <script src="<?php echo url('assets/js/sweetalert2.js'); ?>"></script>
    <script src="<?php echo url('assets/js/jquery.datatables.min.js'); ?>"></script>
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
