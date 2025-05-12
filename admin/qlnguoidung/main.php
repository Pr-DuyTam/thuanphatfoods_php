<?php include("../inc/top.php"); ?>
<div>
  <h3>Quản lý người dùng</h3>
  <!-- Thông báo lỗi nếu có -->
  <?php
  if (isset($tb)) {
    ?>
    <div class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Lỗi!</strong> <?php echo $tb; ?>
    </div>
    <?php
  }
  ?>
  <!-- Nút mở hộp modal chứa form thêm mới -->
  <div><a class="btn btn-primary" href="index.php?action=them"><span class="glyphicon glyphicon-plus"></span> Thêm người
      dùng</a></div>

  <br>

  <!-- Danh sách người dùng -->
  <?php 
// Sắp xếp danh sách người dùng theo loại quyền: Quản lý trước, Nhân viên, rồi Khách hàng
usort($nguoidung, function($a, $b) {
    return $a["loai"] - $b["loai"]; 
});
?>

<table class="table table-hover">
    <tr>
      <th><a href="index.php?sort=email">Email</a></th>
      <th><a href="index.php?sort=sodienthoai">Số điện thoại</a></th>
      <th><a href="index.php?sort=hoten">Họ tên</a></th>
      <th><a href="index.php?sort=loai">Loại quyền</a></th>
      <th>Trạng thái</th>
      <th>Thao tác</th>
    </tr>
    <?php foreach ($nguoidung as $nd): ?>
      <tr style="color: <?php echo ($nd["loai"] == 1) ? 'red' : (($nd["loai"] == 2) ? 'blue' : 'black'); ?>;">
        <td><?php echo $nd["email"]; ?></td>
        <td><?php echo $nd["sodienthoai"]; ?></td>
        <td><?php echo $nd["hoten"]; ?></td>
        <td>
          <?php
          if ($nd["loai"] == 1)
            echo "🟥 Quản lý";
          elseif ($nd["loai"] == 2)
            echo "🔵 Nhân viên";
          else
            echo "⚫ Khách hàng";
          ?>
        </td>
        <td><?php echo ($nd["trangthai"] == 1) ? "Kích hoạt" : "Khóa"; ?></td>
        <td>
          <?php if ($nd["loai"] != 1): ?>
            <?php if ($nd["trangthai"] == 1): ?>
              <a href="?action=khoa&trangthai=0&mand=<?php echo $nd["id"]; ?>" class="btn btn-sm btn-warning">Khóa</a>
            <?php else: ?>
              <a href="?action=khoa&trangthai=1&mand=<?php echo $nd["id"]; ?>" class="btn btn-sm btn-success">Kích hoạt</a>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($nd["loai"] != 1): ?>
            <a href="index.php?action=xoa&mand=<?php echo $nd['id']; ?>" class="btn btn-sm btn-danger"
              onclick="return confirm('Để xóa tài khoản khách hàng. Trước tiên hãy xóa người dùng này trong mục);">Xóa</a>
          <?php endif; ?>
        </td>
      </tr>
    <?php endforeach; ?>
</table>


</div>
<?php include("../inc/bottom.php"); ?>