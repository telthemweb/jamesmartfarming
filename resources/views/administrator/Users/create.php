<div class="container-fluid px-xl-5 mt-lg-5 mb-lg-5">
     
        <div class="container user-list">
            <div class="row flex-lg-nowrap">
                <div class="col-lg-12">
                    <div id="switchPoint" class="e-panel card">
                        <div class="card-body">
                            <div class="card-title">
                                <h6 class="mr-2"><span>CREATE USER</span><small class="px-1"></small></h6>
                            </div>

                            <div class="py-1">
                            <form action="<?php route('/farmer/create'); ?>" method="POST">
                            <input type="hidden" name="_crsftoken" value="<?php CSRFToken(); ?>">
                            <div class="form-group mb-5">
                                    <div class="rounded-0">
                                        <input type="text" class="form-control pl-3" name="username" placeholder="Username" >
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <input type="email" class="form-control pl-3" name="email" placeholder="E-mail Address" >
                                </div>
                                <div class="form-group mb-5">
                                    <input type="password" class="form-control pl-3" name="password" placeholder="Password" >
                                </div>
                                <div class="form-group mb-5">
                                    <input type="text" class="form-control pl-3" name="phone" placeholder="Phone Number" >
                                </div>
                       
                       
                        
                        <div class="float-lg-right">
                            <div class="">
                                <button type="submit" class="btn btn-primary login-btn btn-block">Create User</button>
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

    