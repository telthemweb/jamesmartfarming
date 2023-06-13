<?php require __DIR__ . '../../../layouts/widgetcss.php' ?>
<div class="container-fluid px-xl-5 mt-lg-5 mb-lg-5">
        <div class="container user-list">
       
            <div class="row flex-lg-nowrap">
                <div class="col-lg-12">
                    <div id="switchPoint" class="e-panel card">
                        <div class="card-body">
                            <div class="card-title">
                                <h6 class="mr-2"><span>Locations</span><small class="px-1"></small></h6>
                            </div>
                            <div class="e-table">
                                <div class="table-responsive table-lg mt-3">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>
                                            <th class="text-left">#</th>
                                            <th class="text-left">Farmer</th>
                                            <th class="text-left">Country</th>
                                            <th class="text-left">City</th>
                                            <th class="text-left">Street</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody id="role">
                                        <?php
                                        $i =0; ?>
                                        <?php foreach ($locations as $location): $i++; ?>
                                            <tr>
                                                <td class="text-center"><?php echo $i ?></td>
                                                <td><?php echo $location->user->username; ?></td>
                                                <td><?php echo $location->country ?></td>
                                                <td><?php echo $location->city ?></td>
                                                <td><?php echo $location->street; ?></td>
                                                <td class="text-center">
                                                    
                                                    <a class="text-danger"  href="<?php route('/location/delete/'.$location->id) ?>" >
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
<?php require __DIR__ . '../../../layouts/widgetjs.php' ?>
