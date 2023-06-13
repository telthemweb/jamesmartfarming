<?php
//  $options = [
//   'cost' => 12,
// ];
//echo password_hash("123456", PASSWORD_BCRYPT, $options);
?>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="card-group d-block d-md-flex row">
            <form action="<?php route('/farmer/authenticate'); ?>" method="POST">
            <input type="hidden" name="_crsftoken" value="<?php CSRFToken(); ?>">
              <div class="card col-md-12 p-2 mb-0">
                <div class="card-header">Administrator</div>
                <div class="card-body">
                  <p></p>
                  <div class="input-group mb-3"><span class="input-group-text">
                     <i class="fa fa-user"></i></span>
                    <input class="form-control" type="text" name="username" placeholder="Username">
                  </div>
                  <div class="input-group mb-4"><span class="input-group-text">
                     <i class="fa fa-lock"></i></span>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <button class="btn btn-primary px-4" type="submit">Login</button>
                    </div>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>