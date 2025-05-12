<?php include("inc/top.php"); 
require_once("database.php");
require_once("mathang.php");

$mathang = new MATHANG();
$query = isset($_GET['query']) ? trim($_GET['query']) : '';
$results = [];

if (!empty($query)) {
    $results = $mathang->laymathangtheotukhoa($query);
}
?>

<section class="py-5 reveal">
    <div class="container px-4 px-lg-5 mt-5">
        <h3 class="mb-4">Kết quả tìm kiếm cho "<?php echo htmlspecialchars($query); ?>"</h3>
        
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php if (!empty($results)): ?>
                <?php foreach ($results as $product): ?>
                    <div class="col mb-5">
                        <div class="card h-100 shadow">
                            <!-- Product image-->
                            <img class="card-img-top" 
                                 src="../images/products/<?php echo htmlspecialchars($product['hinhanh']); ?>" 
                                 alt="<?php echo htmlspecialchars($product['tenmathang']); ?>">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"><?php echo htmlspecialchars($product['tenmathang']); ?></h5>
                                    <p class="text-muted"><?php echo number_format($product['giaban'], 0, ',', '.'); ?>₫</p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-dark" href="chitiet.php?id=<?php echo $product['id']; ?>">
                                        Xem chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <p class="text-center text-muted">Không tìm thấy sản phẩm phù hợp</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php include("inc/bottom.php"); ?>