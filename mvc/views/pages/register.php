
<div id="content" class="main-content-wrapper">
            
            <!-- Start of Login Wrapper -->
            <div class="login-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="user-login">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="section-title">
                                                <h2>Đăng ký tài khoản</h2>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
                                            <div class="registration-form login-form">
                                                <form action="register/check" name="register-form" id="register-form" method="post">
                                                    <div class="login-info mb-half text-center">
                                                        <p>Bạn đã có tài khoản? <a href="login">Đăng nhập tại đây!</a></p>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label for="f-name" class="col-12 col-sm-12 col-md-4 col-form-label">Họ và tên:</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="name" class="form-control" id="full-name" name="full-name" onchange="validateName(this)">
                                                            <div id="name_error" style="color:red"></div>
                                                        </div>
                                                    </div>                                                    
                                                    <div class="form-group row">
                                                        <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email:</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="email" class="form-control" id="email" name="email" onblur="validateEmail(this)">
                                                            <div id="email_error" style="color:red"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="phone" class="col-12 col-sm-12 col-md-4 col-form-label">Số điện thoại:</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="phone" class="form-control" id="phone" name="phone" required="" onblur="validatePhone(this)">
                                                            <div id="phone_error" style="color:red"></div>
                                                        </div>
                                                    </div>                                               
                                                    <div class="form-group row">
                                                        <label for="newpassword" class="col-12 col-sm-12 col-md-4 col-form-label">Mật khẩu</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="password" class="form-control" id="password" name="password" required="" onblur="validatePassword(this)">
                                                            <button class="pass-show-btn" type="button">Show</button>
                                                            <div id="password_error" style="color:red"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">Xác nhận mật khẩu</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="password" class="form-control" id="c-password" name="c-password" required="" onblur="validateCPassword(this)">
                                                            <button class="pass-show-btn" type="button">Show</button>
                                                            <div id="c_password_error" style="color:red"></div>
                                                        </div>
                                                    </div>                                                  
                                                    
                                                    <div class="register-box d-flex justify-content-center mt-half">
                                                        <button type="submit" name="submit-btn" id="submit-btn" class="default-btn tiny-btn">Đăng ký</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of user-login -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Login Wrapper -->
        </div>