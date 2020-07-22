<?php
$User = $arr['data'];

?>
<div id="page" class="container-fluid p-5">
    <div class="row justify-content-around bg-light rounded-lg shadow-lg mt-5 p-5">
        <div class="card w-100 clblack">
            <div class="card-header">
                <h2>Trang chỉnh sửa thông tin tài khoản</h2>
            </div>
            <div class="card-body p-3">
                <form>
                    
                    <div class="form-group">
                        <label for="formGroupExampleInput">Tài khoản</label>
                        <input readonly value="<?php echo $User->getUserName(); ?>" type="text" class="form-control" id="username" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput3">Tên</label>
                        <input value="<?php echo $User->getName(); ?>" type="text" class="form-control" id="name" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput4">Email</label>
                        <input value="<?php echo $User->getEmail(); ?>" type="text" class="form-control" id="email" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput5">Quốc gia</label>
                        <input value="<?php echo $User->getCountry(); ?>" type="text" class="form-control" id="country" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput6">Vui lòng nhập mật khẩu để xác thực là bạn</label>
                        <input type="password" class="form-control" id="pass">
                    </div>

                </form>
                <button id="submitedit" class="btn btn-success">Sửa thông tin</button>
                <a href="./logout" class="m-4 btn btn-primary">Đăng xuất</a>
            </div>
        </div>

    </div>
</div>
<script>
    $("#submitedit").click(function() {
        let username = $('#username').val();
        let name = $("#name").val();
        let email = $("#email").val();
        let country = $("#country").val();
        let pass = $("#pass").val();
        $.post('./editInfor/proceedEdit', {
            username: username,
            name: name,
            email: email,
            country: country,
            pass: pass
        }, function(data){
            $("#page").html(data);
        });
    });
</script>