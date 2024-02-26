<main>
    <div class="box_left">
        <div class="box_left_1">
            <h2><?php if (isset($_SESSION['vtt']) && $_SESSION['vtt'] == 1) {
                    echo "Nhân viên";
                } else if(isset($_SESSION['vtt']) && $_SESSION['vtt']==2){
                    echo "Quản lý";
                } ?></h2>
        </div>
        <hr>
        <div>
            <div class="box_left_dm"><a href="index.php?act=danhmuc">Danh mục</a></div>
            <div class="box_left_dm"><a href="index.php?act=sanpham&trang=1">Sản phẩm</a></div>
            <div class="box_left_dm"><a href="index.php?act=binhluan">Bình luận</a></div>
            <div class="box_left_dm"><a href="index.php?act=donhang">Đơn hàng</a></div>
            <?php if(isset($_SESSION['vtt']) && $_SESSION['vtt']==2){ ?>
            <div class="box_left_dm"><a href="index.php?act=taikhoan">Tài khoản</a></div>
            <div class="box_left_dm"><a href="index.php?act=bangtk">Thống kê</a></div>
            <?php } ?>
            <div class="box_left_dm"><a href="index.php?act=trangchu">Trang chủ</a></div>
        </div>
    </div>
    <div class="box_right">