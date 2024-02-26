<main class="hsct">
    <div class="hsct_boxleft">
        <h2>Tài khoản: <?php echo $_SESSION['ten_tk']; ?></h2>
        <hr>
        <div class="hsct_boxleft_1">
            <div class="hsct_boxleft_1_1">
                <a href="index.php?act=hsct" class="hsct_boxleft_a">Hồ sơ</a>
                <a href="index.php?act=donmua" class="hsct_boxleft_a">Đơn mua</a>
            </div>
            <div class="hsct_boxleft_1_2">
                <a href="index.php?act=doimk" class="hsct_boxleft_a">Đổi mật khẩu</a>
                <a href="index.php?act=dangxuat" class="hsct_boxleft_a">Đăng xuất</a>
            </div>
        </div>
    </div>
    <div class="hsct_boxright">
        <h2>Hồ sơ của tôi</h2>
        <hr>
        <div class="hsct_boxright_1">
            <form action="" method="post" class="hsct_boxright_form">
                <?php foreach($hienthi_1tk as $k){
                    extract($k);
                 ?>
                <div class="hsct_boxright_form1">
                    <label for="">Họ và tên</label>
                    <input type="text" name="" id="" value="<?php echo $tennguoidung ?>" readonly><br>
                </div>
                <div class="hsct_boxright_form1">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="" id="" value="<?php if($sodienthoai ==0){echo 'null';}else{ echo $sodienthoai;}; ?>" readonly><br>
                </div>
                <div class="hsct_boxright_form1">
                    <label for="">Email</label>
                    <input type="text" name="" id="" value="<?php echo $email ?>" readonly><br>
                </div>
                <div class="hsct_boxright_form1">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="" id="" value="<?php if($diachi ==''){echo 'null';}else{ echo $diachi;}; ?>" readonly><br>
                </div>
                <div class="hsct_boxright_form1">
                    <label for="">Giới tính</label>
                    <input type="text" name="" id="" value="<?php if($gioitinh ==''){echo 'null';}else{ echo $gioitinh==1?'nam':'nữ';}; ?>" readonly><br>
                </div>
                <div class="hsct_boxright_form1">
                    <label for="">Năm sinh</label>
                    <input type="text" name="" id="" value="<?php  echo $namsinh; ?>" readonly><br>
                </div>
                <?php } ?>
            </form>
            <a href="index.php?act=suahs" class="hsct_boxright_a">Sửa thông tin</a>
        </div>
    </div>
</main>