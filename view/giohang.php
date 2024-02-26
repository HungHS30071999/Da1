    <?php 
        // $cartsp=($_SESSION['cart']);
        // print_r($cartsp);
?>  
    <?php
    if (empty($load_sp_cart)) { ?>
<div class="giohang_box1">
            <a href="index.php?act=trangchu">CTK Mobile</a>
            <p>Giỏ hàng</p>
        </div>
        <div class="giohang_box2">
            <div class="giohang_box2_menu">
                <p>Sản phẩm</p>
                <p>Đơn giá</p>
                <p>Số lượng</p>
                <p>Thành tiền</p>
                <p>Thao tác</p>
            </div>
            <h1 style="text-align: center;color:red">Chưa có sản phẩm trong giỏ hàng</h1>
   <?php } else {
    ?>
        <div class="giohang_box1">
            <a href="index.php?act=trangchu">CTK Mobile</a>
            <p>Giỏ hàng</p>
        </div>
        <div class="giohang_box2">
            <div class="giohang_box2_menu">
                <p>Sản phẩm</p>
                <p>Đơn giá</p>
                <p>Số lượng</p>
                <p>Thành tiền</p>
                <p>Thao tác</p>
            </div>
            <div class="giohang_box2_product">
            <!-- index.php?act=dathang  -->
                <form action="" method="post" id='order'>
                    <?php
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
                                    <input type="number" name="sl" min="1" value="<?= $quantity_in_cart ?>" id="quantity_<?php echo $id_sp ?>" oninput="updatequantity(<?php echo $id_sp ?>, <?php echo $k ?>)">
                                </div>
                                <div>
                                    <p class="giohang_box2_product_price2">
                                        <?php echo number_format($giathuc * $quantity_in_cart, 0, ',', '.') ?>đ</p>
                                </div>
                                <div class="giohang_box2_product_submit">
                                    <input type="button" value="Xóa" onclick="xoagiohang(<?php echo $id_sp ?>)">
                                    <input type="hidden" name="giasp" value="<?php echo $giathuc ?>">
                                    <input type="hidden" name="id_gh" value="<?php echo $id_sp ?>">
                                    <input type="button" value="Mua" name="gh_gui" onclick="hienthi(<?php echo $id_sp ?>,<?= $quantity_in_cart ?>)">
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
                </form>
            </div>
        </div>
        <?php } ?>
</main>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function updatequantity(idsp, index) {
    let inputElement = $('#quantity_' + idsp);
    let new_quantity = inputElement.val();
    if (new_quantity <= 0) {
        new_quantity = 1;
    }
    $.ajax({
        type: 'POST',
        url: './view/updataquantity.php',
        data: {
            id: idsp,
            quantity: new_quantity
        },
        success: function(response) {
            // Handle successful response
            $.post('view/tablecart.php', function(data) {
                $('#order').html(data);
            });
        },
        error: function(xhr, status, error) {
            console.error("AJAX Request Error:", status, error);
            // Optionally, display an error message to the user
        }
    });
}
function hienthi(id,sl) {
    if(confirm("Bạn có muốn mua "+sl+ " sản phẩm không ?")){
        window.location.href="index.php?act=dathang&id="+id+"&sl="+sl
    }
}
function xoagiohang(idsp) {
    if (confirm('Bạn có muốn xóa sản phẩm không?')) {
        $.ajax({
            type: 'POST',
            url: './view/xoagiohang.php',
            data: {
                id: idsp,
            },
            success: function(response) {
                if (response === "success") {
                    $.post('view/tablecart.php', function(data) {
                        $('#order').html(data);
                    });
                } else {
                    alert("Error: " + response);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Lỗi:", status, error);
            }
        });
    }
}

</script>