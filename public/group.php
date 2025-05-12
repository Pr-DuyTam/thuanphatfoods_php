<?php include("inc/top.php"); ?>
<style>
     @media (max-width: 767px) {
        .fw-bolder {
            margin: -40px -2px 3px -5px;
        }

        .dynamic-text {
            font-size: clamp(13px, 2vw, 20px);
        }
     }
</style>
<p class="dm" style="color: red; font-size: 25px; font-weight: 900; letter-spacing: 2px; text-transform: uppercase;">
    <a class="text-decoration-none text-danger text-dm" href="index.php?action=group&id=<?php echo $d["id"]; ?>">
        <b class="text-dm"><?php echo $d["tendanhmuc"]; ?></b>
    </a>
</p>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    <?php
    if ($mathang != null) {
        foreach ($mathang as $m):
            ?>
            <div class="col mb-5">
                <div class="card h-100 shadow">
                    <!-- Sale badge-->
                    <?php
                    if ($m["giaban"] != $m["giagoc"] && $m["giagoc"] > 0) {
                        // Tính phần trăm giảm giá
                        $giamGia = (($m["giagoc"] - $m["giaban"]) / $m["giagoc"]) * 100;
                        ?>
                        <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            -<?php echo round($giamGia) . "%"; ?>
                        </div>
                    <?php } ?>
                    <!-- Product image-->
                    <a href="index.php?action=detail&id=<?php echo $m["id"]; ?>">
                        <img class="card-img-top" src="../<?php echo $m["hinhanh"]; ?>" alt="<?php echo $m["tenmathang"]; ?>" />
                    </a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <a class="fw-bolder" style="text-decoration: none"
                                href="index.php?action=detail&id=<?php echo $m["id"]; ?>">
                                <h5 class="fw-bolder truncate-3-words"><?php echo $m["tenmathang"]; ?></h5>
                            </a>

                            <!-- Product price-->
                            <span class="text-danger fw-bolder dynamic-text"><?php echo number_format($m["giaban"]); ?>
                                vnd</span>
                            <?php if ($m["giaban"] < $m["giagoc"]) { ?>
                                <span class="text-muted text-decoration-line-through">
                                    <?php echo number_format($m["giagoc"]); ?>
                                    vnd
                                </span>
                            <?php } // end if ?>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto btn-cart btn-addcart"
                                href="index.php?action=chovaogio&id=<?php echo $d["id"]; ?>">
                                Thêm vào giỏ hàng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endforeach;
    } else {
        echo "<p>Danh mục này hiện chưa có mặt hàng. Vui lòng xem danh mục khác...</p>";
    }
    ?>
</div>


<?php include("inc/bottom.php"); ?>