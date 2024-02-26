<main class="trangchu_main">
    <div class="trangchu_main_thongbao">
        <marquee behavior="" direction="">Vào 30/04/2024 cửa hàng sẽ có đợt giảm giá 30% </marquee>
    </div>
    <div class="trangchu_main_box1">
        <div class="trangchu_main_dmsp">
            <h2>Danh mục sản phẩm</h2>
            <?php foreach ($hienthi_dm_4 as $k => $v) {
            ?>
                <div class="trangchu_main_dmsp_text"><a href="index.php?act=danhmucsp&iddm=<?php echo $v['id_dm']; ?>&tt=new&trang=1"><?php echo $v['ten_dm']; ?></a></div>
            <?php } ?>
            <div class="trangchu_main_dmsp_a">
                <a href="index.php?act=danhmucsp&iddm=0&tt=new&trang=1">Xem thêm</a>
            </div>
        </div>
        <div class="trangchu_main_banner">
            <div class="img">
                <img src="./img/banner1.jpg" alt="">
            </div>
            <div class="img">
                <img src="./img/banner2.jpg" alt="">
            </div>
            <div class="img">
                <img src="./img/banner3.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- <div class="trangchu_main_box2">
        <div class="trangchu_main_box2_time">
        
            <h2>Sản phẩm mới hôm nay </h2>
            <h3><?php echo '20'.$time ?></h3>
        </div>
        <div class="trangchu_main_box2_link">
            <a href="index.php?act=danhmucsp&iddm=0&tt=new&trang=1">Xem tất cả ></a>
        </div>
        <div class="trangchu_main_box2_product">
        <?php foreach ($hienthi_sp_day as $k => $v) {
                extract($v);
                if ($giamgia != 0) {
                    $da_giamgia = $gia * ($giamgia / 100);
                    $giathuc = $gia - $da_giamgia;
                } else {
                    $giathuc = $gia;
                }
            ?>
            <div class="trangchu_main_box2_product_1">
                <img src="./img/<?php echo $img ?>" alt="">
                <h3><?php echo number_format($giathuc,0,'.','.'); ?>đ</h3>
                <h2>Giảm  <?php echo $giamgia ?>%</h2>
            </div>
            <?php } ?>
        </div>
    </div> -->
    <div class="trangchu_main_box3">
        <div>
            <div class="trangchu_main_box2_time">
                <h2>Sản phẩm bán chạy </h2>
            </div>
            <div class="trangchu_main_box2_link">
                <a href="index.php?act=danhmucsp&iddm=0&tt=rate&trang=1">Xem tất cả ></a>
            </div>
        </div>
        <div class="trangchu_main_box3_product">
            <?php foreach ($hienthi_rate_5sp as $k => $v) {
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
                    <h3><?php echo number_format($giathuc,0,'.','.'); ?>đ</h3>
                    <!-- <h4>đã bán <?php echo $da_ban; ?></h4> -->
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="trangchu_main_box4">
        <h2>Sản phẩm</h2>
        <hr>
        <div class="trangchu_main_box4_product">
        <?php foreach ($hienthi_10sp as $k => $v) {
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
                    <h3><?php echo number_format($giathuc,0,'.','.'); ?>đ</h3>
                    <!-- <h4>đã bán <?php echo $da_ban; ?></h4> -->
            </div>
            <?php } ?>
        </div>
        <div class="trangchu_main_box4_link">
            <a href="index.php?act=danhmucsp&iddm=0&tt=new&trang=1">Xem thêm</a>
        </div>
    </div>
</main>