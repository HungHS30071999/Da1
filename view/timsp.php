<div class="tk_main">
    <h1 class="tk_main_h1">Từ khóa tìm kiếm :<?php echo $tukhoa ?></h1>
    <h1 class="tk_main_h2">Sản phẩm có tên giống từ khóa :</h1>
    <div class="trangchu_main_box4_product">
        <?php 
        if($hienthi_sptk != null){
            foreach ($hienthi_sptk as $k => $v) {
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
        <?php } }else{ ?>
            <h1 style="color: red;">Không có sản phẩm có từ khóa bạn tìm kiếm</h1>
<?php } ?>
    </div>
</div>