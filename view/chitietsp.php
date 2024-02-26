<?php
?>
<main>
    <div class="ctsp">
        <div class="ctsp_link">
            <?php foreach ($hienthi_1sp as $k => $v) {
                extract($v);
                if ($giamgia != 0) {
                    $da_giamgia = $gia * ($giamgia / 100);
                    $giathuc = $gia - $da_giamgia;
                } else {
                    $giathuc = $gia;
                }
            ?>
                <a href="index.php?act=trangchu">MTK Mobile</a>
                <a href="index.php?act=danhmucsp&iddm=<?php echo $id_dm; ?>&tt=new&trang=1">> <?php echo $ten_dm ?></a>
                <p>> <?php echo $ten_sp ?></p>
        </div>
        <div class="ctsp_product_box">
            <div>
                <div class="ctsp_product_box1">
                    <div class="ctsp_product_box1_img1">
                        <img src="./img/<?php echo $img ?>" alt="">
                    </div>
                </div>
                <div class="ctsp_product_box2">
                    <div>
                        <h2><?php echo $ten_sp ?></h2>
                        <div>
                            <p class="ctsp_product_box2_1"><?php echo $luottruycap ?> Lượt xem</p>
                            <p class="ctsp_product_box2_2"><?php echo $da_ban ?> đã bán</p>
                        </div>
                        <div class="ctsp_product_box2_price">
                            <p><?php echo number_format($gia, 0, '.', '.'); ?>đ</p>
                            <h2><?php echo number_format($giathuc, 0, '.', '.'); ?>đ</h2>
                            <div class="ctsp_product_box2_price_1">
                                <p>Giảm <?php echo $giamgia ?>%</p>
                            </div>
                        </div>
                    </div>
                    <div class="ctsp_product_box2_property">
                        <div class="ctsp_product_box2_property_1">
                            <h2>Vận chuyển :</h2>
                            <h3>Miễn phí vận chuyển</h3>
                        </div>
                        <div class="ctsp_product_box2_property_2">
                            <form action="index.php?act=dathang" method="post">
                                <div class="ctsp_product_form_1">
                                </div>
                                <div class="ctsp_product_form_2">
                                    <input type="hidden" name="giasp" value="<?php echo $giathuc ?>">
                                    <input type="hidden" name="id" value="<?php echo $id_sp ?>">
                                    <h2>Số lượng :</h2>
                                    <button type="button" class="tru" onclick="hanhdongtru()">-</button>
                                    <input type="text" name="soluong" id="soluong" value="1" readonly>
                                    <button type="button" class="cong" onclick="hanhdongcong()">+</button>
                                    <h5>Kho : <?php echo $soluong ?> sản phẩm</h5>
                                </div>
                                <div class="ctsp_product_form_3">
                                <?php if(isset($_SESSION['id_tk'])){ ?>
                                    <input type="button" value="Thêm vào giỏ" onclick="addtocart(<?php echo $id_sp ?>,'<?php echo $ten_sp ?>',<?php echo $gia ?>)">
                                    <input type="submit" value="Mua ngay" name="dathang">
                                <?php }else{ ?>
                                    <h1 style="color:red">Bạn chưa thể mua hàng và đặt hàng khi chưa đăng nhập</h1>
                                <?php } ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ctsp_deltail">
            <h2>MÔ TẢ SẢN PHẨM</h2>
            <div class="ctsp_deltail_1">
                <p><?php echo $mota ?></p>
            </div>
        </div>
        <div class="ctsp_comments">
            <section class="ctsp_comments_1">
                <h2>Bình luận</h2>
                <form action="index.php?act=chitietsp&iddm=<?php echo $id_dm ?>&idsp=<?php echo $id_sp ?>" method="post">
                <?php } ?>
                <input class="ctsp_comments_1_1" type="text" name="binhluan" id="">
                <input type="hidden" name="ngaygui" value="<?php echo $ngaygui ?>">
                <input class="ctsp_comments_1_2" type="submit" name="gui" value="Gửi">
                </form>
            </section>
            <div class="ctsp_comments_2">
                <?php
                $k = 0;
                foreach ($hienthi_bl as $k => $v) {
                    extract($v);
                    $k = $id_bl; ?>
                    <div class="ctsp_comments_3">
                        <div class="ctsp_comments_2_1">
                            <h5><i class="fa-solid fa-user-secret"></i> <?php echo $tennguoidung ?></h5>
                            <h5>(<?php echo $ngay_bl ?>)</h5>
                        </div>
                        <p><?php echo $noidung_bl ?></p>
                    </div>
                <?php } ?>
                <div class="ctsp_comments_3">
                    <?php if ($k == 0) { ?>
                        <h1 style="color: red;">Sản phẩm chưa có bình luận</h1>
                    <?php  } ?>
                </div>
            </div>
        </div>
        <div class="ctsp_same">
            <h2>Các sản phẩm khác cùng loại</h2>
            <div class="trangchu_main_box4_product">
                <?php foreach ($hienthi_5sp as $k => $v) {
                    extract($v);
                    if ($giamgia != 0) {
                        $da_giamgia = $gia * ($giamgia / 100);
                        $giathuc = $gia - $da_giamgia;
                    } else {
                        $giathuc = $gia;
                    }
                ?>
                    <div class="trangchu_main_box3_product_1">
                        <div class="trangchu_main_box3_product_1_img">
                            <a href="index.php?act=chitietsp&iddm=<?php echo $id_dm ?>&idsp=<?php echo $id_sp ?>"><img src="./img/<?php echo $img; ?>" alt=""></a>
                            <h1>Giảm <?php echo $giamgia; ?>%</h1>
                        </div>
                        <p><?php echo $ten_sp; ?></p>
                        <h3><?php echo number_format($giathuc, 0, '.', '.'); ?>đ</h3>
                        <h4>đã bán <?php echo $da_ban; ?></h4>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let laysoluong = document.getElementById("soluong");

    function hienthi() {
        // Hiển thị giá trị mới của soluong
        console.log(laysoluong.value);
    }

    function hanhdongcong() {
        // Tăng giá trị của soluong
        laysoluong.value++;
        // Hiển thị giá trị mới của soluong
        hienthi();
    }

    function hanhdongtru() {
        if (laysoluong.value > 1) {
            laysoluong.value--;
        }
        // Hiển thị giá trị mới của soluong
        hienthi();
    }
</script>
<script>
    let soluong = document.getElementById('soluong1');

    function addtocart(idsp, namesp, pricesp) {
        $.ajax({
            type: 'POST',
            url: "./view/addtocart.php",
            data: {
                id: idsp,
                name: namesp,
                price: pricesp
            },
            success: function(response) {
                soluong.innerText = response;
                alert("Bạn đã thêm vào giỏ hàng thành công!");
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>