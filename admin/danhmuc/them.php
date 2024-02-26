<div class="box_right_1">
    <h2>Danh mục / Thêm danh mục</h2>
</div>
<hr>
<span class="dm_span">
    <a href="index.php?act=danhmuc">< Quay lại</a>
</span>
<div class="dm_them">
    <form action="index.php?act=themdanhmuc" method="post">
        <p>Tên danh mục</p>
        <input class="dm_them_1" type="text" name="ten_dm" id="" placeholder="Nhập danh mục"><br>
        <input class="dm_them_2" type="submit" name="themdm" id="" value="Thêm"><br>
        <p class="dm_them_p"><?php echo $tb ?></p>
    </form>
</div>