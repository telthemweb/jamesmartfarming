<?php require __DIR__ . '../../../layouts/widgetcss.php' ?>
<div class="container-fluid px-xl-5 mt-lg-5 mb-lg-5">

    <div class="container user-list">
        <div class="row flex-lg-nowrap">
            <div class="col-lg-12">
                <div id="switchPoint" class="e-panel card">
                    <div class="card-body">
                        <div class="card-title">
                            <h6 class="mr-2"><span>UPDATE <?php echo strtoupper($role->name); ?></span><small class="px-1"></small></h6>
                        </div>

                        <div class="py-1">
                            <form action="<?php route('/role/update/' . $role->id); ?>" method="POST">
                                <input type="hidden" name="_crsftoken" value="<?php CSRFToken(); ?>">
                                <div class="form-group">
                                    <div class="rounded">
                                        <input type="text" class="form-control pl-3" name="name" value="<?php echo $role->name; ?>" id="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class=" form-div">
                                        <input type="text" class="form-control pl-3" name="description" value="<?php echo $role->description; ?>" id="description">
                                    </div>
                                </div>
                                <div class="float-lg-right">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary login-btn btn-block">SUBMIT</button>
                                    </div>
                                </div>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '../../../layouts/widgetjs.php' ?>