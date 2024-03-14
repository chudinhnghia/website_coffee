

<!-- ------- Log In -------- -->
<div class="register">
        <div class="grid wide col">
            <div class="register-container l-7 m-7 c-12">
                <form action="pagination/dangnhap/xulydangnhap.php" method="POST">
                    <div class="register-top">
                        <h1 class="register-top_heading">
                            đăng nhập tài khoản
                        </h1>
                        <div class="register-top_text">
                            Bạn đã có tài khoản, vui lòng đăng nhập tại đây
                        </div>
                        <div class="register-top_form">
                            <input type="email" class="register-top_form-control" name="email" placeholder="Email" required>
                            <input type="password" class="register-top_form-control" name="password" placeholder="Mật khẩu" required>
                        </div>
                    </div>

                    <div class="register-btn">
                        <button type="submit" name="dangnhap"class="register-btn_button">
                            Đăng nhập
                        </button>
                    </div>
                </form>
                    
                <div class="logIn-text">
                    Bạn chưa có tài khoản, vui lòng đăng ký <a href="register.php?quanly=dangky" class="logIn-text_link">tại đây</a>
                </div>
            </div>
        </div>
</div>