<div class="box_right_1">
  <h2>Thống kê </h2>
</div>
<hr>
<div class="tk">
  <h1>Bảng thống kê theo danh mục</h1>
  <table border="1px" class="tk_table">
    <tr>
      <th>STT</th>
      <th>Tên danh mục</th>
      <th>Lượt xem</th>
      <th>Số lượng còn lại</th>
      <th>Đã bán</th>
    </tr>
    <?php
    $all_lct = 0;
    $all_sl = 0;
    $all_db = 0;
    foreach ($laydulieu as $k => $v) {
      extract($v);
      $all_lct += $tong_ltc;
      $all_sl +=$tong_sl;
      $all_db +=$da_ban;
    ?>
      <tr style="text-align: center;">
        <td><?php echo $k + 1 ?></td>
        <td><?php echo $ten_dm ?></td>
        <td><?php echo $tong_ltc ?></td>
        <td><?php echo $tong_sl ?></td>
        <td><?php echo $da_ban ?></td>
      </tr>
    <?php } ?>
    <tr>
      <td colspan="2">Tổng:</td>
      <td><?php echo $all_lct ?></td>
      <td><?php echo $all_sl ?></td>
      <td><?php echo $all_db ?></td>
    </tr>
  </table>
  <a href="index.php?act=bieudo" style="font-size: 20px;">Xem biểu đồ chi tiết</a>
</div>
