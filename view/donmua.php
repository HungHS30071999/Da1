<main class="hsct">
    <div class="hsct_boxleft">
        <h2>Tên đăng nhập</h2>
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
        <h2>Đơn mua của tôi</h2>
        <hr>
        <div class="donmua_right">
            <div class="donmua_product">
                <?php foreach($hienthi_1dh as $k=>$v){ 
                    extract($v);
                    ?>
                <div class="donmua_product_1">
                    <img src="./img/<?php echo $img ?>" alt="">
                    <div class="donmua_product_font">
                        <h5><?= $ten_sp ?></h5>
                        <p>Phân loại : <?= $ten_dm ?></p>
                        <p>số lượng : <?php echo $sl_sp ?></p>
                        <h4>Giá: <span><?= $thanh_tien ?>đ</span></h4>
                    </div>
                    <div class="donmua_product_tt">
                        <p>Trạng thái : <?php if($trangthai ==0){
                             echo "<p style='color: red;'>Chờ xác nhận</p>" ;
                             }else{
                                echo "<p style='color: green;'>Đã giao</p>";
                                }?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

    </div>
</main>