<main class="main">
    <div class="dmsp_link">
        <a href="index.php?act=trangchu">MTK Mobile</a>
        <p>> <?php if ($id_dm == 0) { ?>
                Tất cả sản phẩm
            <?php } else {
                    echo $hienthi_1dm[0]['ten_dm'] ?>
            <?php } ?></p>
    </div>
    <div class="dmsp_box">
        <div class="dmsp_boxleft">
            <div>
                <h2>Danh mục sản phẩm</h2>
                <div class="dmsp_boxleft_dm"><a href="index.php?act=danhmucsp&iddm=0&tt=new&trang=1">Tất cả sản phẩm</a></div>
                <?php foreach ($hienthi_dm_all as $k => $v) {
                    extract($v);
                ?>
                    <div class="dmsp_boxleft_dm"><a href="index.php?act=danhmucsp&iddm=<?php echo $id_dm; ?>&tt=new&trang=1"><?php echo $ten_dm ?></a></div>
                <?php } ?>
            </div>
            <hr>
            <div class="dmsp_boxleft_price">
                <h2>Giá</h2>
                <form action="index.php?act=danhmucsp&iddm=<?php echo $id; ?>&tt=<?php echo $tt ?>&trang=1" method="post">
                    <input class="dmsp_boxleft_price_input" type="radio" name="gia" value="1" id="">
                    <label for="">Dưới 3.000.000</label><br>
                    <input class="dmsp_boxleft_price_input" type="radio" name="gia" value="2" id="">
                    <label for="">3.000.000 - 6.000.000</label><br>
                    <input class="dmsp_boxleft_price_input" type="radio" name="gia" value="3" id="">
                    <label for="">6.000.000 - 9.000.000</label><br>
                    <input class="dmsp_boxleft_price_input" type="radio" name="gia" value="4" id="">
                    <label for="">Trên 9.000.000</label><br>
                    <input class="dmsp_boxleft_price_submit" type="submit" name="gui" value="Áp dụng">
                </form>
            </div>
            <hr>
        </div>
        <div class="dmsp_boxright">
            <div class="dmsp_boxright_menu">
                <div class="dmsp_boxright_menu_1"><a href="index.php?act=danhmucsp&iddm=<?php echo $id; ?>&tt=new&trang=1">Hàng mới</a></div>
                <div class="dmsp_boxright_menu_1"><a href="index.php?act=danhmucsp&iddm=<?php echo $id; ?>&tt=rate&trang=1">Bán chạy</a></div>
                <div class="dmsp_boxright_menu_1"><a href="index.php?act=danhmucsp&iddm=<?php echo $id; ?>&tt=min&trang=1">Giá thấp tới cao</a></div>
                <div class="dmsp_boxright_menu_1"><a href="index.php?act=danhmucsp&iddm=<?php echo $id; ?>&tt=max&trang=1">Giá cao tới thấp</a></div>
            </div>
            <div class="dmsp_boxright_product">
                <?php foreach ($hienthi_sp as $k => $v) {
                    extract($v);
                    if ($giamgia != 0) {
                        $da_giamgia = $gia * ($giamgia / 100);
                        $giathuc = $gia - $da_giamgia;
                    } else {
                        $giathuc = $gia;
                    }
                ?>
                    <div class="dmsp_boxright_product_1">
                        <div class="dmsp_boxright_product_1_img">
                           <a href="index.php?act=chitietsp&iddm=<?php echo $id_dm ?>&idsp=<?php echo $id_sp ?>"><img src="./img/<?php echo $img; ?>" alt=""></a>
                            <h1>Giảm <?php echo $giamgia; ?>%</h1>
                        </div>
                        <p><?php echo $ten_sp; ?></p>
                        <h3><?php echo number_format($gia,0,'.','.');; ?>đ</h3>
                        <h4>đã bán <?php echo $da_ban; ?></h4>
                    </div>
                <?php } ?>
            </div>
            <div class="chantrang">
                <?php if(isset($huy)){
                }else{
                if($id ==0){ 
                    for($i=1;$i<=$sotrangg;$i++){ ?>
                <a href="index.php?act=danhmucsp&iddm=0&tt=<?php echo $tt ?>&trang=<?php echo $i ?>"><?php echo $i ?></a>
                <?php } } } ?>
            </div>
        </div>
    </div>
    </div>
</main>