<?php include("../inc/top.php"); 
require_once("../../model/database.php");
require_once("../../model/mathang.php");
require_once("../../model/donhang.php");
require_once("../../model/nguoidung.php");
require_once("../../model/khachhang.php");

$dh = new DONHANG();
$mh = new MATHANG();
$donhang = $dh->doctatcadonhang();
?>

<div class="container">  
    <h3>Quản lý đơn hàng</h3>  
    <table class="table table-hover">
        <tr>
            <th>Email</th>
            <th>Họ tên</th>
            <th>Số điện thoại</th>
            <th>Tên mặt hàng</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
            <th>Trạng thái</th>
        </tr>

        <?php foreach ($donhang as $ctdh): ?>
        <tr>
            <td><?php echo $ctdh["email"]; ?></td>
            <td><?php echo $ctdh["hoten"]; ?></td>
            <?php $mathang = $mh->laymathangtheoid($ctdh["mathang_id"]); ?>
            <td><?php echo $ctdh["sodienthoai"]; ?></td>
            <td><?php echo $mathang["tenmathang"]; ?></td>
            <td><?php echo $ctdh["soluong"]; ?></td>
            <td><?php echo number_format($mathang["giaban"]) . "đ"; ?></td>
            <td><?php echo number_format($ctdh["tongtien"]) . "đ"; ?></td>
            <td>
                <a href="index.php?action=xoa&id=<?php echo $ctdh['id']; ?>"
                   class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa đơn hàng này?');">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include("../inc/bottom.php"); ?>
