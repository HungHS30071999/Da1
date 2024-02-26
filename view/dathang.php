<?php
// if (isset($_POST['gh_gui'])) {
//     $gia = $_POST['giasp'];
//     $idsp = $_POST['id_gh'];
//     $cart_sp = $_SESSION['cart'];
//     // foreach ($cart_sp as $k => $v) {
//     //     extract($v); 
//     //     if ($id == $idsp) {
//     //         $sl = $quantity;
//     //     }
//     // }
//     $hienthisp = hienthi_1sp($idsp);
//     echo $gia.'='.$idsp.'='.$sl;
// }
?>
<main class="dathang">
    <form action="index.php?act=donmua" method="post">
        <div class="giohang_box1">
            <a href="">CTK Mobile</a>
            <p>Đặt hàng</p>
        </div>
        <div class="dathang_user">
            <div class="dathang_user_1">
                <p>Địa chỉ nhận hàng</p>
            </div>
            <div class="dathang_user_2">
                <?php foreach ($hienthi_tk as $k) {
                    extract($k);
                    $time=date('y-m-d',time());
                ?>
                    <h5>Họ và tên :</h5>
                    <p><?php echo $ten_tk ?></p>
                    <h5>Địa chỉ :</h5>
                    <p><?= $diachi ?></p>
                    <h5>Số điện thoại :</h5>
                    <p><?= $sodienthoai ?></p>
                    <p style="color: red;">Vui lòng vào trang cá nhân nếu bạn muốn sửa thông tin</p>
                <?php } ?>
            </div>
        </div>
        <div class="dathang_product">
            <div class="dathang_product_menu">
                <p>Sản phẩm</p>
                <p>Đơn giá</p>
                <p>Số lượng</p>
                <p>Thành tiền</p>
            </div>
            <div class="dathang_product_detail">
                <?php foreach ($hienthisp as $k) {
                    extract($k);
                ?>
                    <div class="dathang_product_detail_img">
                        <img src="./img/<?php echo $img ?>" alt="">
                        <p><?php echo $ten_sp ?></p>
                    </div>
                    <div class="dathang_product_detail_price">
                        <p><?php echo number_format($gia, 0, ',', '.') ?></p>
                    </div>
                    <div class="dathang_product_detail_number">
                        <p><?php echo $sl ?></p>
                    </div>
                    <div class="dathang_product_detail_price2">
                        <p><?php echo number_format(($sl * $gia), 0, ',', '.') ?>đ</p>
                    </div>
            </div>
        </div>
        <div class="dathang_note">
            <div class="dathang_note_box1">
                <h5>Lời nhắn</h5>
                <input type="text" name="chuthich" id="" placeholder="lưu ý cho shop">
            </div>
            <div class="dathang_note_box2">
                <h5>Vận chuyển :</h5>
                <p>Miễn phí</p>
            </div>
        </div>
        <div class="dathang_thanhtoan">
            <div class="dathang_thanhtoan_box1">
                <h5>Phương thức thanh toán</h5>
                <p>Thanh toán khi nhận hàng</p>
            </div>
            <div class="dathang_thanhtoan_box2">
                <div class="dathang_thanhtoan_box2_1">
                    <h5>Tổng tiền hàng:</h5>
                    <p><?php echo number_format(($sl * $gia), 0, ',', '.') ?>đ</p>
                </div>
                <div class="dathang_thanhtoan_box2_2">
                    <h5>Phí vận chuyển:</h5>
                    <p>0đ</p>
                </div>
                <div class="dathang_thanhtoan_box2_3">
                    <h5>Tổng thanh toán:</h5>
                    <p><?php echo number_format(($sl * $gia), 0, ',', '.') ?>đ</p>
                </div>
                <input type="hidden" name="ngay_dat" value="<?= $time ?>">
                <input type="hidden" name="idsp" value="<?= $id_sp ?>">
                <input type="hidden" name="idtk" value="<?= $_SESSION['id_tk'] ?>">
                <input type="hidden" name="so_luong" value="<?= $sl ?>">
                <input type="hidden" name="thanh_tien" value="<?= $sl * $gia ?>">
            <?php } ?>
            </div>
            <div class="dathang_thanhtoan_box3">
                <hr>
                <div class="dathang_thanhtoan_box3_1">
                    <p>Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo
                        <a href="">điều khoản của CTK Mobile</a>
                    </p>
                    <input type="submit" name="dat_sp" value="Đặt hàng">
                </div>
            </div>
        </div>
    </form>
</main>