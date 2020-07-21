<?php
$user = $arr['data'];
?>
<div id="page">
    <div class="row justify-content-around bg-light rounded-lg shadow-lg mt-5 p-5">
        <div class="card w-100 clblack">
            <div class="card-header">
                <h2>Trang chi tiết thông tin</h2>
            </div>
            <div class="card-body p-3 row w-100">
                <div class="col-3">
                    <div class="row p-3">
                        Tài khoản:
                    </div>
                    <div class="row p-3">
                        Tên:
                    </div>
                    <div class="row p-3">
                        Giới tính:
                    </div>
                    <div class="row p-3">
                        Email:
                    </div>
                    <div class="row p-3">
                        Quốc gia:
                    </div>
                </div>
                <div class="col-5">
                    <div class="row p-3">
                        <?php echo $user->getUserName(); ?>
                    </div>
                    <div class="row p-3">
                        <?php echo $user->getName(); ?>
                    </div>
                    <div class="row p-3">
                        <?php echo $user->getGender(); ?>
                    </div>
                    <div class="row p-3">
                        <?php echo $user->getEmail(); ?>
                    </div>
                    <div class="row p-3">
                        <?php echo $user->getCountry(); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>