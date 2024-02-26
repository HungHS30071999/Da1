<div class="box_right_1">
    <h2>Danh mục / Sửa danh mục</h2>
</div>
<span class="dm_span">
    <a href="index.php?act=danhmuc">
        < Quay lại</a>
</span>
<div class="sua_dm">
    <?php foreach($hienthi_1_dm as $k=>$v){
            extract($v);
        ?>
    <form action="index.php?act=suadm&iddm=<?php echo $id_dm; ?>" method="post">
        <p>Tên danh mục cũ</p>
        <input class="sua_dm_a" type="text" name="" id="" value="<?php echo $ten_dm; ?>" readonly><br>
        <p>Tên danh mục mới</p>
        <input class="sua_dm_a" type="text" name="name_dm" id=""><br>
        <input class="sua_dm_b" type="submit" name="suadm" id="" value="Sửa">
    </form>
    <?php } ?>
</div>