<?php
/**
 * Coded by Moeed.
 * User: Moeed
 * Date: 10/5/18
 * Time: 11:59 PM
 */
get_header();?>
<body>

  <main>
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3">
                  <small>ساخت حساب کاربری با شبکه اجتماعی</small>
                </div>
                <div class="text-center">
                  <a href="#" class="btn btn-neutral btn-icon mr-4">
                    <span class="btn-inner--icon">
                      <img src="../assets/img/icons/common/facebook.svg">
                    </span>
                    <span class="btn-inner--text">facebook</span>
                  </a>
                  <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon">
                      <img src="../assets/img/icons/common/google.svg">
                    </span>
                    <span class="btn-inner--text">Google</span>
                  </a>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>حساب کاربری جدید بسازید</small>
                </div>
                <form role="form">
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input class="form-control" placeholder="نام" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="نام کاربری یا ایمیل" type="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="رمز عبور" type="password">
                    </div>
                  </div>
                  <div class="text-muted font-italic text-right">
                    <small>قدرت رمز ورود:
                      <span class="text-success font-weight-700">قوی</span>
                    </small>
                  </div>
                  <div class="row my-4">
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox text-right">
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                        <label class="custom-control-label" for="customCheckRegister">
                          <span>قوانین را خوانده ام و قبول دارم

</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="buttom-login text-center">
                    <button type="button" class="btn btn-primary mt-4">عضویت</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer();?>