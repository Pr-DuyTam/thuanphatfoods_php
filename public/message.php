<?php include("inc/top.php"); ?>

<br><br>
<div class="container">
  <div class="row">
    <h4 class="text-info">Cảm ơn quý khách!</h4>
    <p>Đơn hàng mã số <?php echo $donhang_id; ?> trị giá <strong><?php echo number_format($tongtien) ?> vnd</strong> sẽ
      được giao đến quý khách trong thời gian sớm nhất.
    <p>
    <p><a href="index.php?action=thongtin">Danh sách đơn hàng</a></p>
  </div>
</div>
<style>
  @media (max-width: 767px) {
    .row {
      margin-top: -100px;
      margin-bottom: 100px;
    }
  }
</style>
<?php include("inc/bottom.php"); ?>