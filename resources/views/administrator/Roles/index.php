<?php require __DIR__ .'../../../layouts/widgetcss.php' ?>
<div class="container-fluid px-xl-5 mt-lg-5 mb-lg-5">
<a href="<?php route('/farmer/getroleform'); ?>" class="btn btn-success  mb-4 rounded-0  justify-content-end text-white">
           New Role <i class="fa fa-lock"></i>
        </a>
        <div class="container user-list">
       
            <div class="row flex-lg-nowrap">
                <div class="col-lg-12">
                    <div id="switchPoint" class="e-panel card">
                        <div class="card-body">
                            <div class="card-title">
                                <h6 class="mr-2"><span>System Roles</span><small class="px-1"></small></h6>
                            </div>
                            <div class="e-table">
                                <div class="table-responsive table-lg mt-3">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>
                                            <th class="text-left">#</th>
                                            <th class="text-left">Name</th>
                                            <th class="text-left">Description</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody id="role">
                                        <?php
                                        $i =0; ?>
                                        <?php foreach ($roles as $role): $i++; ?>
                                            <tr>
                                                <td class="text-center"><?php echo $i ?></td>
                                                <td><?php echo $role->name; ?></td>
                                                <td><?php echo $role->description ?></td>
                                                <td class="text-center">
                                                    
                                                    <a class="text-success "  href="<?php route('/farmer/role/'.$role->id) ?>" >
                                                        <i class="fa fa-edit mr-3 text-red"></i>
                                                    </a>
                                                    <i></i>
                                                    <a class="text-danger "  href="<?php route('/role/delete/'.$role->id) ?>" >
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