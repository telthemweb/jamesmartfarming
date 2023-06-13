<div class="container-lg">

    <div class="container user-list">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div id="switchPoint" class="e-panel">
                    <div class="row mb-lg-5">
                        <div class="col-lg-12 mt-lg-5">
                            <div id="switchPoint" class="e-panel card">
                                <div class="card">
                                    <div class="card-header bg-dark text-white"> My Personal Information</div>
                                    <div class="card-body">
                                        <h5 class="card-title" id="f_name"><?php echo '<b>Name </b>: ' . '<b class="float-right">' . $_SESSION['username']. '</b>'; ?></h5>
                                        <div class="dropdown-divider mb-lg-5"></div>
                                        <p class="heading2" id="email"><?php echo '<b>Phone Number</b>:   ' . '<b class="float-right">' . $_SESSION['phone'] . '</b>'; ?></p>
                                        <div class="dropdown-divider mb-lg-5"></div>
                                        <p class="heading2" id="email"><?php echo '<b>E-mail Address:</b>   ' . '<b class="float-right">' . $_SESSION['email'] . '</b>'; ?></p>
                                        
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                
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
    </div>
</div>
</div>
</div>
