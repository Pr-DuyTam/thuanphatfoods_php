<?php
include("inc/top.php");
?>
<style>
    @media (max-width: 767px) {
        .text-cart {
            font-size: 15px;
            margin-top: -75px !important;
        }

        .table-hover {
            width: 100%;
            table-layout: fixed;
            /* Giữ kích thước cột cố định */
        }

        .table-hover th {

            white-space: nowrap;
            /* Ngăn chữ xuống dòng */
            text-align: center;
            /* Căn giữa nội dung */
            padding: -8px;
            /* Điều chỉnh khoảng cách */
            font-size: 10px;

        }

        .table-hover td {
            font-size: 9px;
            /* Điều chỉnh kích thước chữ */
        }

        .soluong-input {
            width: 20px;
        }

        .colum-th {
            min-width: 120px;
        }

        .col-all {
            font-size: 11px;
        }

        .btn-capnhat {
            font-size: 10px;
            height: 28px;
        }

        .btn-thanhtoan {
            font-size: 10px;
            height: 28px;
        }

        .button-container {
            margin-left: -22px;
            display: flex;
            /* Kích hoạt bố cục linh hoạt */
            gap: 10px;
            /* Điều chỉnh khoảng cách giữa các nút */
        }

        .row-end {
            margin-top: 20px;
        }

        .soluong-input {
            width: 50px;
            height: 3px;
            padding: 8px;
            font-size: 8px;
        }

        .info h3 {
            margin-bottom: 3px;
            /* Giảm khoảng cách giữa h3 và p */
        }

        .info p {
            margin-top: 0;
            /* Đảm bảo không có khoảng cách dư thừa */
        }

        .info {
            margin-top: -60px;
            /* Đẩy toàn bộ khối .info xuống dưới */
        }

    }
</style>
<div class="info">
    <?php if (demhangtronggio() == 0) { ?>
        <h3 class="text-info">Giỏ hàng rỗng!</h3>
        <p>Vui lòng chọn sản phẩm...</p>
        <?php
    } else {
        ?>
    </div>
    <h3 class="text-danger text-cart">Giỏ hàng của bạn:</h3>
    <form action="index.php">
        <table class="table table-hover">
            <tr>
                <th class="colum-th">Hình ảnh</th>
                <th class="colum-th">Tên hàng</th>
                <th class="colum-th">Đơn giá</th>
                <th class="colum-th">Số lượng</th>
                <th class="colum-th">Thành tiền</th>
            </tr>
            <?php foreach ($giohang as $id => $mh): ?>
                <tr>
                    <td><img width="50" src="../<?php echo $mh["hinhanh"]; ?>"></td>
                    <td><?php echo $mh["tenmathang"]; ?></td>
                    <td><?php echo number_format($mh["giaban"]); ?> vnd</td>
                    <td><input class="soluong-input" type="number" name="mh[<?php echo $id; ?>]"
                            value="<?php echo $mh["soluong"]; ?>"></td>
                    <td><?php echo number_format($mh["thanhtien"]); ?> vnd</td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3"></td>
                <td class="fw-bold tong-tien">Tổng tiền</td>
                <td class="text-danger fw-bold"><?php echo number_format(tinhtiengiohang()); ?> vnd</td>
            </tr>

        </table>
        <div class="row row-end">
            <div class="col col-all"><a href="index.php?action=xoagiohang">Xóa tất cả</a> (Nhập số lượng = 0 để xóa mặt
                hàng)</div>
            <div class="col text-end">
                <input type="hidden" name="action" value="capnhatgio">
                <div class="button-container">
                    <input type="submit" class="btn btn-warning btn-capnhat" value="Cập nhật">
                    <a href="index.php?action=thanhtoan" class="btn btn-success btn-thanhtoan">Thanh toán</a>
                </div>
            </div>
        </div>
    </form>
<?php } // end if ?>
<?php
include("inc/bottom.php");
?>