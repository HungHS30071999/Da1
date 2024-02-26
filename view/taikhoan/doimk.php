<main class="dangki">
    <div class="dangki_box1">
        <h2>Đổi mật khẩu</h2>
    </div>
    <div class="dangki_box2">
        <form action="" method="post" class="dangki_box2_form">
            <?php if($tb==1){ ?>
                <h2 style="color: red;">Mời bạn nhập đầy đủ dữ liệu</h2>
         <?php   }else if($tb==2){ ?>
            <h2 style="color: red;">Mời bạn nhập đúng pass và repass</h2>
         <?php }else if($tb==3){ ?>
            <h2 style="color: red;">Đổi mật khẩu thành công</h2>
        <?php }else if($tb==4){ ?>
            <h2 style="color: red;">Vui lòng kiểm tra lại mật khẩu </h2>
        <?php } ?>
            <div class="dangky_box2_1">
                <p>Mật khẩu</p>
                <input type="text" name="mk" id="" placeholder="Mật khẩu hiện tại của bạn">
            </div>
            <div class="dangky_box2_1">
                <p>Mật khẩu mới</p>
                <input type="text" name="pass" id="" placeholder="Mật khẩu mới của bạn">
            </div>
            <div class="dangky_box2_1">
                <p>Nhập lại mật khẩu</p>
                <input type="text" name="repass" id="" placeholder="Nhập lại mật khẩu">
            </div>
            <a class="quenmk" href="index.php?act=donmua">Quay lại</a>
            <div class="dangky_box2_2">
                <p><input type="submit" name='doimk'  value="Đổi mật khẩu"></p>
            </div>
        </form>
    </div>
</main>