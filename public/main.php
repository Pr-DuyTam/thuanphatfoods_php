<?php
include("inc/top.php");
?>

<style>
    @media (max-width: 767px) {
        .fw-bolder {
            font-size: 15px;
            margin: -22px 0 -5px -4px;
        }
        .text-muted {
            font-size: 12px;
        }
        .card-img-top {
            width: 100%;
            height: 50%;
            object-fit: contain;
        }
        .fw-bolder {
            margin: -40px -2px 3px -5px;
        }
        .dynamic-text {
            font-size: clamp(13px, 2vw, 20px);
        }
    }
</style>

<!-- Hiển thị thông báo nếu không có sản phẩm -->
<?php if (!empty($thongbao)): ?>
    <div class="alert text-center"><?php echo $thongbao; ?></div>
<?php endif; ?>

<?php if (!empty($mathang)): ?>
    <?php foreach ($danhmuc as $d): ?>
        <?php 
        $coSanPham = false;
        foreach ($mathang as $m) {
            if ($m["danhmuc_id"] == $d["id"]) {
                $coSanPham = true;
                break; // Chỉ cần tìm thấy một sản phẩm thì giữ danh mục
            }
        }
        ?>

        <?php if ($coSanPham): ?>
            <p class="dm" style="color: red; font-size: 25px; font-weight: 900; letter-spacing: 2px; text-transform: uppercase;">
                <a class="text-decoration-none text-danger text-dm" href="index.php?action=group&id=<?php echo $d["id"]; ?>">
                    <b class="text-dm"><?php echo $d["tendanhmuc"]; ?></b>
                </a>
            </p>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $i = 0;
                foreach ($mathang as $m) {
                    if ($m["danhmuc_id"] == $d["id"] && $i < 4) {
                        $i++;
                        ?>
                        <div class="col mb-5 reveal">
                            <div class="card h-100">
                                <?php if ($m["giaban"] < $m["giagoc"] && $m["giagoc"] > 0): ?>
                                    <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                        -<?php echo round(($m["giagoc"] - $m["giaban"]) / $m["giagoc"] * 100) . "%"; ?>
                                    </div>
                                <?php endif; ?>

                                <a href="index.php?action=detail&id=<?php echo $m["id"]; ?>">
                                    <img class="card-img-top" src="../<?php echo $m["hinhanh"]; ?>" alt="<?php echo $m["tenmathang"]; ?>" />
                                </a>

                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <a class="fw-bolder" style="text-decoration: none" href="index.php?action=detail&id=<?php echo $m["id"]; ?>">
                                            <h5 class="fw-bolder"><?php echo $m["tenmathang"]; ?></h5>
                                        </a>
                                        <span class="text-danger fw-bolder dynamic-text"><?php echo number_format($m["giaban"]); ?> vnd</span>
                                        <br>
                                        <?php if ($m["giaban"] < $m["giagoc"]): ?>
                                            <span class="text-muted text-decoration-line-through">
                                                <?php echo number_format($m["giagoc"]); ?> vnd
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-outline-dark mt-auto btn-cart btn-addcart"
                                            href="index.php?action=chovaogio&id=<?php echo $m["id"]; ?>">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

            <div class="text-center btn-view">
                <a class="btn btn-out mt-3 btn-view-all" href="index.php?action=group&id=<?php echo $d["id"]; ?>">Xem tất cả
                    <i class="bi bi-chevron-double-right"></i></a>
            </div>
        <?php endif; ?> <!-- Kết thúc kiểm tra nếu có sản phẩm -->
    <?php endforeach; ?>
<?php endif; ?>

<?php
include("inc/bottom.php");
?>
