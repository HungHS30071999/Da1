<main class="dangki">
    <div class="dangki_box1">
        <h2>Đăng ký tài khoản</h2>
        <p>đã có tài khoản <a href="index.php?act=dangnhap">đăng nhập tại đây</a></p>
    </div>
    <div class="dangki_box2">
        <form action="index.php?act=dangky" method="post" class="dangki_box2_form">
            <div class="dangky_box2_1">
                <p>Tên tài khoản</p>
                <input type="text" name="ten" id="" placeholder="Nhập tên của bạn">
            </div>
            <div class="dangky_box2_1">
                <p>Email</p>
                <input type="text" name="ten_user" id="" placeholder="Email của bạn">
            </div>
            <div class="dangky_box2_1">
                <p>Mật khẩu</p>
                <input type="text" name="pass" id="" placeholder="Mật khẩu của bạn">
            </div>
            <div class="dangky_box2_1">
                <p>Nhập lại mật khẩu</p>
                <input type="text" name="repass" id="" placeholder="Nhập lại mật khẩu">
            </div>
            <div class="dangky_box2_2">
                <p><input type="submit" name="dangky" value="Đăng ký"></p>
            </div>
            <?php if($tb==1){ ?>
                <h2 style="color: red;">Mời bạn nhập đầy đủ thông tin</h2>
            <?php }else if($tb==2){ ?>
                <h2 style="color: red;">Mời nhập đúng pass và repass</h2>
                <?php } ?>
        </form>
    </div>
</main>