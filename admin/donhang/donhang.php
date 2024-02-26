<div class="box_right_1">
    <h2>Quản lý đơn hàng</h2>
</div>
<hr>
<div>
    <table border="1px" style="width: 90%;margin:auto;margin-top: 20px;">
        <tr>
            <th>Id đơn hàng</th>
            <th>Id sản phẩm</th>
            <th>Id tài khoản</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Chú thích</th>
            <th>Ngày đặt</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
            <th>Xóa</th>
        </tr>
        <?php foreach($hienthi_gh as $k=>$v){
            extract($v);
            ?>
        <tr style="text-align: center;">
            <td><?= $id_dh ?></td>
            <td><?= $id_sp ?></td>
            <td><?= $id_tk ?></td>
            <td><?= $sl_sp ?></td>
            <td><?= number_format($thanh_tien,0,',','.') ?>đ</td>
            <td><?= $chuthich ?></td>
            <td><?= $ngay_dat ?></td>
            <td><?php if($trangthai == 0){echo "<p style='color: red;'>Chờ xác nhận</p>";}else{echo "<p style='color: green;'>Đã giao</p>";} ?></td>
            <td><a class="dh_a" href="index.php?act=donhang_xn&iddh=<?php echo $id_dh ?>&slsp=<?php echo $sl_sp ?>&idsp=<?php echo $id_sp ?>" onclick="return confirm('bạn có muốn Xác nhận đơn hàng không ?')">Xác nhận</a></td>
            <td><a class="dh_a" href="index.php?act=donhang_xoa&id=<?php echo $id_dh ?>" onclick="return confirm('bạn có muốn xóa không ?')">Xóa</a></td>
        </tr>
        <?php } ?>
    </table>
</div>