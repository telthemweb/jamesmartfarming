<?php require __DIR__ .'../../../layouts/widgetcss.php' ?>
<div class="container-fluid px-xl-5 mt-lg-5 mb-lg-5">
 <p><a href="<?php route('/farmer/createform'); ?>" class="btn btn-success  mb-4 rounded-0  justify-content-end text-white">
           New User <i class="fa fa-lock"></i>
        </a></p>
        <div class="container user-list">
       
            <div class="row flex-lg-nowrap">
                <div class="col-lg-12">
                    <div id="switchPoint" class="e-panel card">
                        <div class="card-body">
                            <div class="card-title">
                                <h6 class="mr-2"><span>System Administrators</span><small class="px-1"></small></h6>
                            </div>
                            <div class="e-table">
                                <div class="table-responsive table-lg mt-3">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>
                                            <th class="text-left">#</th>
                                            <th class="text-left">Username</th>
                                            <th class="text-left">Email</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody id="role">
                                        <?php
                                        $i =0; ?>
                                        <?php foreach ($administrators as $admin): $i++; ?>
                                            <tr>
                                                <td class="text-center"><?php echo $i ?></td>
                                                <td><?php echo $admin->username ?></td>
                                                <td><?php echo $admin->email; ?></td>
                                                
                                                <td class="text-center">
                                                    <a class="text-success"  href="<?php route('/farmer/user/'.$admin->id) ?>" >
                                                        <i class="fa fa-edit mr-3 text-green"></i>
                                                    </a>
                                                    <a class="text-danger"  href="<?php route('/farmer/delete/'.$admin->id) ?>" >
                                                        <i class="fa fa-trash mr-3 text-red"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







</div>
<?php require __DIR__ .'../../../layouts/widgetjs.php' ?>
