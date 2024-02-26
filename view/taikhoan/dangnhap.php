<main class="dangnhap">
    <div class="dangki_box1">
        <h2>Đăng nhập tài khoản</h2>
        <p>chưa có tài khoản <a href="index.php?act=dangky">đăng ký tại đây</a></p>
    </div>
    <div class="dangki_box2">
        
        <form action="index.php?act=dangnhap" method="post" class="dangki_box2_form">
            <div class="dangky_box2_1">
                <p>Email tài khoản</p>
                <input type="text" name="email" id="" placeholder="Tài khoản của bạn">
            </div>
            <div class="dangky_box2_1">
                <p>Mật khẩu</p>
                <input type="text" name="mk" id="" placeholder="Mật khẩu của bạn">
            </div>
            <a href="index.php?act=quenmk">Quên mật khẩu</a>
            <div class="dangky_box2_2">
                <input type="submit" name="dangnhap" value="Đăng nhập">
            </div>
            <?php if ($tb == 1) { ?>
            <h2 style="color: red;">Mời bạn nhập đầy đủ thông tin và không để sai sót</h2>
        <?php } ?>
        </form>
    </div>
</main>