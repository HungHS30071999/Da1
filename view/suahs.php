<main class="dangki">
    <div class="dangki_box1">
        <h2>Sửa hồ sơ của bạn</h2>
    </div>
    <div class="dangki_box2">
        <form action="index.php?act=suahs" method="post" class="dangki_box2_form">
            <?php if(isset($_POST['suatk'])){ ?>
                <h2 style="color: red;">Sửa thành công</h2>
            <?php }  ?>
            <?php foreach($hienthi_1tk as $k){
                extract($k);
             ?>
            <div class="dangky_box2_1">
                <p>Họ và tên</p>
                <input type="text" name="name" id="" value="<?php echo $tennguoidung ?>" placeholder="Điền họ tên của bạn">
            </div>
            <div class="dangky_box2_1">
                <p>Số điện thoại</p>
                <input type="text" name="sdt" id="" value="<?php echo $sodienthoai ?>" placeholder="Điền số điện thoại của bạn">
            </div>
            <div class="dangky_box2_1">
                <p>Email</p>
                <input type="text" name="email" id="" value="<?php echo $email ?>"  placeholder="Điền email của bạn">
            </div>
            <div class="dangky_box2_1">
                <p>Địa chỉ</p>
                <input type="text" name="dc" id="" value="<?php echo $diachi ?>" placeholder="Điền địa chỉ của bạn">
            </div>
            <div class="dangky_box2_3">
                <p>Giới tính: </p>
                <input type="hidden" name="gt" id="" value="<?php echo $gioitinh ?>">
                <input type="radio" name="gt" id="" value="1">Nam
                <input type="radio" name="gt" id="" value="2">Nữ
            </div>
            <div class="dangky_box2_4">
                <p>Năm sinh</p>
                <input type="date" name="ns" id="" value="<?php  echo $namsinh; ?>">
            </div>
            <?php } ?>
            <div class="dangky_box2_2">
                <p><input type="submit" name="suatk" value="Sửa thông tin" onclick="return confirm('bạn có muốn sửa đổi')"></p>
            </div>
            <a class="quenmk" href="index.php?act=hsct">Quay lại</a>
        </form>
    </div>
</main>