<div class="row main justify-content-center">
    <div class="col-10 col-md-6 rounded pb-5 mb-5 m-md-5  shadow-lg rounded-sm">
        <div class="row d-flex justify-content-center p-3 headlogin">
            Đăng ký
        </div>
        <form action="register" method="POST" class="clblack">
            <div class="form-group">
                <label for="inpUser">Tên tài khoản</label><span style="color:red;"><?php echo ' ' . $arr['error']['erroruser']; ?></span>
                <input id="userdk" type="text" class="form-control" name="user">
                <div id="messuser" style="color:red;"></div>
            </div>
            <div class="form-group">
                <label for="inpPass">Mật khẩu</label><span style="color: red;"><?php echo ' ' . $arr['error']['errorpass']; ?></span>
                <input id="passdk" type="password" class="form-control" name="pass">
                <p id="checkpass" style="color:red;"></p>
            </div>
            <div class="form-group">
                <label for="inpUser">Họ tên</label><span style="color:red;"><?php echo ' ' . $arr['error']['errorfullname']; ?></span>
                <input id="" type="text" class="form-control" name="fullname">
                <div id="messuser" style="color:red;"></div>
            </div>
            <div class="form-group">
                <label for="inpPass"> nhập lại mật khẩu</label><span style="color:red;"><?php echo ' ' . $arr['error']['errorrepass']; ?></span>
                <input id="repassdk" type="password" class="form-control" name="repass">
                <p id="#checkrepass" style="color:red;"></p>
            </div>
            <div class="form-group">
                <label for="inpPass">email</label><span style="color:red;"><?php echo ' ' . $arr['error']['erroremail']; ?></span>
                <input id="maildk" type="text" class="form-control" name="email">
                <p id="#checkrmail" style="color:red;"></p>
            </div>
            <div class="form-group row pl-5">
                
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="nam" checked>
                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="nữ">
                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                </div>
            </div>
            <div class="form-group">
                <label for="ct">quốc gia</label>
                <input id="" type="text" class="form-control" name="country">
                <p id="" style="color:red;"></p>
            </div>
            <button type="submit" class="btn buttonlogin w-100">Đăng ký</button>

        </form>
    </div>
    <script>

    </script>
</div>