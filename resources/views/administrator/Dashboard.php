
<div class="container-fluid px-xl-5 mt-lg-5 mb-lg-5">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <a href="<?php route('/farmer/users'); ?>">
              <div class="card mb-4 text-white bg-primary">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold"><?php echo $usercount; ?></div>
                    <div>Users</div>
                  </div>
                  
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                  <canvas class="chart" id="card-chart1" height="70"></canvas>
                </div>
              </div>
              </a>
            </div>
            <!-- /.col-->
            
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <a href="<?php route('/farmer/locations'); ?>">
              <div class="card mb-4 text-white bg-warning">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold"><?php echo $locationcount; ?></div>
                    <div>Locations</div>
                  </div>
                  
                </div>
                <div class="c-chart-wrapper mt-3" style="height:70px;">
                  <canvas class="chart" id="card-chart3" height="70"></canvas>
                </div>
              </div>
              </a>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <a href="<?php route('/farmer/deseases'); ?>">
              <div class="card mb-4 text-white bg-danger">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold"><?php echo $deseasecount; ?> </div>
                    <div>Deseases</div>
                  </div>
                  
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                  <canvas class="chart" id="card-chart4" height="70"></canvas>
                </div>
              </div>
              </a>
            </div>
            <!-- /.col-->
          </div>
          