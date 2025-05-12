<?php
if (!isset($_SESSION['giohang']) || !is_array($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}

// Hàm thêm sản phẩm vào giỏ
function themhangvaogio($id, $soluong)
{
    // Đảm bảo số lượng nhập vào là số hợp lệ
    $soluong = max(0, intval($soluong));
    $_SESSION['giohang'][$id] = $soluong;
}

// Cập nhật số lượng của giỏ hàng
function capnhatsoluong($id, $soluong)
{
    if (isset($_SESSION['giohang'][$id])) {
        $_SESSION['giohang'][$id] = max(0, intval($soluong));
    }
}

// Xóa một sản phẩm trong giỏ hàng
function xoamotmathang($id)
{
    if (isset($_SESSION['giohang'][$id])) {
        unset($_SESSION['giohang'][$id]);
    }
}

// Hàm lấy mảng các sản phẩm trong giohang
function laygiohang()
{
    $mh = [];
    $mh_db = new MATHANG();

    foreach ($_SESSION['giohang'] as $id => $soluong) {
        $m = $mh_db->laymathangtheoid($id);
        if (!$m) {
            continue; // Nếu sản phẩm không tồn tại, bỏ qua
        }

        $dongia = $m['giaban'];
        $solg = max(0, intval($soluong));
        $thtien = round($dongia * $solg, 2);

        $mh[$id] = [
            'tenmathang' => $m['tenmathang'],
            'hinhanh' => $m['hinhanh'],
            'giaban' => $dongia,
            'soluong' => $solg,
            'thanhtien' => $thtien
        ];
    }
    return $mh;
}

// Đếm số sản phẩm trong giỏ hàng
function demhangtronggio()
{
    return count($_SESSION['giohang']);
}

// Đếm tổng số lượng các sản phẩm trong giỏ
function demsoluongtronggio()
{
    return array_sum($_SESSION['giohang']);
}

// Tính tổng thành tiền trong giỏ hàng
function tinhtiengiohang()
{
    $tong = 0;
    $giohang = laygiohang();
    foreach ($giohang as $mh) {
        $tong += $mh['giaban'] * $mh['soluong'];
    }
    return $tong;
}

// Xóa tất cả giỏ hàng
function xoagiohang()
{
    $_SESSION['giohang'] = [];
}

?>