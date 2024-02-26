<?php
session_start();
include "../model/pdo.php";
include "../model/nguoidung.php";
if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    //tao mang chua id cac san pham trong gio hang
    $productid = array_column($cart, 'id');

    $idlist = implode(',', $productid);
    $load_sp_cart = load_sp_cart($idlist);
    $tong = 0;
    foreach ($load_sp_cart as $k => $v) {
        extract($v);
        $da_giamgia = $gia * ($giamgia / 100);
        $giathuc = $gia - $da_giamgia;
        $quantity_in_cart = 0;

        foreach ($_SESSION['cart'] as $item) {
            if ($item['id'] == $id_sp) {
                $quantity_in_cart = $item['quantity'];
                break;
            }
        }
?>
        <div class="giohang_box2_allproduct">
            <div class="giohang_box2_product_form">
                <div class="giohang_box2_product_img">
                    <img src="./img/<?php echo $img; ?>" alt="">
                    <a href="index.php?act=chitietsp&iddm=<?php echo $id_dm ?>&idsp=<?php echo $id_sp ?>">
                        <?= $ten_sp ?></a>
                </div>
                <div class="giohang_box2_product_price">
                    <p><?php echo number_format($giathuc, 0, ',', '.') ?>đ</p>
                </div>
                <div class="ctsp_product_form_2">
                    <input type="number" name="" min="1" value="<?= $quantity_in_cart ?>" id="quantity_<?php echo $id_sp ?>" oninput="updatequantity(<?php echo $id_sp ?>, <?php echo $k ?>)">
                </div>
                <div>
                    <p class="giohang_box2_product_price2">
                        <?php echo number_format($giathuc * $quantity_in_cart, 0, ',', '.') ?>đ</p>
                </div>
                <div class="giohang_box2_product_submit">
                    <input type="submit" value="Xóa">
                    <input type="submit" value="Mua">
                </div>
            </div>
        </div>
    <?php
        $tong += ($giathuc * $quantity_in_cart);

        //luu vao session
        $_SESSION['tongsp'] = $tong;
    } ?>
    <h2 style="color: red;">Tổng tiền sản phẩm : <?php echo number_format($_SESSION['tongsp'], 0, ',', '.') ?>đ
    </h2>
<?php
}
?>