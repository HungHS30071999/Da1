<main class="dangnhap">
    <div class="dangki_box1">
        <h2>Quên mật khẩu</h2>
    </div>
    <div class="dangki_box2">
    <form action="index.php?act=quenmk" method="post" class="dangki_box2_form">
    <?php if($tb==1){ ?>
                <h2 style="color: red;">Mời bạn nhập đầy đủ dữ liệu</h2>
         <?php   }else if($tb==2){ ?>
            <h2 style="color: red;">Mời bạn nhập đúng email</h2>
         <?php }else if($tb==3){ ?>
            <h2 style="color: red;">Mật khẩu của bạn là:<?php if(isset($_POST['quenmk'])){ echo $quen_mk[0]['matkhau']; } ?></h2>
        <?php } ?>
        <div class="dangky_box2_1">
            <p>Email</p>
            <input type="text" name="email" id="" placeholder="Nhập email của bạn">
        </div>
        <a class="quenmk" href="index.php?act=dangnhap">Quay lại</a>
        <div class="dangky_box2_2">
            <p><input type="submit" name="quenmk" value="Lấy mật khẩu"></p>
        </div>
    </form>
    </div>
</main>