<div class="row justify-content-around bg-light rounded-lg shadow-lg mt-5 p-5" style="color:#383e56;">
    <h1 class="font-weight"><i style="color:#be4bdb;" class="fas fa-music"></i> Ứng dụng nghe nhạc số 1 thế giới <i style="color:#be4bdb;" class="fas fa-music"></i></h1>
    <div class="col-12 p-5">
        <h5 style="color:#e84a5f;">Các tính năng, hoạt động của trang</h5>
        <p>1. Trang dùng ajax tăng trải nhiệm người dùng</p>
        <p>2. Các chức năng hữu ích cho người nghe và nghệ sỹ</p>
        <p>.....</p>
        
    </div>
</div>
<div class="row justify-content-around bg-light rounded-lg shadow-lg mt-5 p-5">
    <div class="row w-100 justify-content-center">
        <i style="color: #40bad5; font-size: 48px;" class="fas fa-tachometer-alt"></i>
    </div>
    <a id="user" class="btn btn-info col-md-3 mt-5 mb-5 rounded-lg m-1">
        <div class="row p-4 justify-content-center">
            Bạn là người nghe
        </div>
        <div class="row p-3 bd d-flex justify-content-center m-0">
            <i style="font-size: 32px;" class="fas fa-users""></i>
        </div>
    </a>
    <a id="artist"  class="btn btn-info col-md-3 mt-5 mb-5 rounded-lg m-1">
        <div class="row p-4 justify-content-center">
            Bạn là nghệ sỹ
        </div>
        <div class="row p-3 bd d-flex justify-content-center m-0">
            <i style="font-size:32px;" class="fas fa-user-cog"></i>
        </div>
    </a>
</div>
<script>
    $(document).ready(function(){
        $("#user").click(function(){
            var user='<?php if(isset($_SESSION['user'])) echo $_SESSION['user']; else echo '';?>';
            if(user =='') alert('không có quyền truy cập, vui lòng đăng nhập');
            else{
////////   gọi controller user để hiển thị trang cho người dùng nghe nhạc ////////////////////////////////////////////////////////////////////
                $.post('./userNormal',function(data){
                    $("#mainhome").html(data);
                });
            }
        });
        $("#artist").click(function(){
            var user='<?php if(isset($_SESSION['user'])) echo $_SESSION['vip']; else echo '';?>';
            if(user != 3) alert("Chỉ dành cho nghệ sỹ");
            else{
///////     gọi controller artist để hiển thị trang cho nghệ sỹ///////////////////////////////////////////////////////////////////////////////
                $.post('./artist',function(data){
                    $("#mainhome").html(data);
                });
            }
        });
    });
</script>