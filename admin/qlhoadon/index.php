<?php

if (!isset($_SESSION["nguoidung"])) {
    header("location:../index.php");
}
require_once("../../model/database.php");
require_once("../../model/mathang.php");
require_once("../../model/donhang.php");
require_once("../../model/khachhang.php");
require_once("../../model/diachi.php");
require_once("../../model/donhang.php");
require_once("../../model/donhangct.php");
// Xét xem có thao tác nào được chọn
if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
} else {
    $action = "xem";
}

$mh = new MATHANG();
$dh = new DONHANG();
switch ($action) {
    case "xem":
        $donhang = $dh->doctatcadonhang();
        include("main.php");
        break;

    case "xoa":
        if (isset($_GET["id"])) {
            if ($dh->xoadonhang($_GET["id"])) {
                header("Location: index.php?action=xem");
                exit();
            } else {
                echo "<script>alert('Xóa đơn hàng thất bại!');</script>";
            }
        }
        break;
    default:
        break;
}


?>